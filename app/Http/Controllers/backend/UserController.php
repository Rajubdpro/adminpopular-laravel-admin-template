<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;
use Image;
use App\Models\user_role;
class UserController extends Controller
{

    public function index()
    {
       $getusers = user::get();
       return view('backend.user.index', compact('getusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $roles = user_role::get();
         return view('backend.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input_value = clean($request->all());
        // input validation
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users,email',
            'phone' => 'max:14|unique:users,phone',
            'password' => 'min:8',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:2048',
         ],[
         'required.name' => 'Name filed is required',

       ]
       );
        // user image update
        if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='user'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(public_path('uploads/user/'.$imageName));
            $input_value['photo']=$imageName;

        }
        $input_value['password'] = Hash::make($input_value['password']);

        // insert data to database
        $success = user::create($input_value);
         // flash message
         if($success){
            Session::flash('status', 'success');
          }else{
            Session::flash('error','something wend wrong');
          }
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = user::with('role')->find($id);
        return view('backend.user.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $roles = user_role::get();
        $edit = user::find($id);
        return view('backend.user.edit',compact('edit','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_data = user::find($id);
        $input_value = clean($request->all());
        // input validation
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'phone' => 'max:14',
            'password' => 'min:8',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:2048',
         ],[
         'required.name' => 'Name filed is required',

       ]
       );
        // user image update
        if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='user'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(public_path('uploads/user/'.$imageName));
            $input_value['photo']=$imageName;
            if ($update_data->photo && file_exists(public_path().'/uploads/user/'.$update_data->photo)) {
                 unlink(public_path().'/uploads/user/'.$update_data->photo);
            }
        }
      // save data to database
        if($request->input('password') != $update_data->password){
               $input_value['password'] = Hash::make($input_value['password']);
        }

       $success = $update_data->fill($input_value)->save();
      // flash message
      if($success){
        Session::flash('status', 'success');
      }else{
        Session::flash('error','something wend wrong');
      }
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delted_id = user::find($id);
        $deleted = user::destroy($id);
        if($deleted){
            if ($delted_id->photo && file_exists(public_path().'/uploads/user/'.$delted_id->photo)) {
                 unlink(public_path().'/uploads/user/'.$delted_id->photo);
            }
        }
        if($deleted){
        Session::flash('status', 'success');
          }else{
            Session::flash('error','something wend wrong');
          }
       return redirect()->back();
    }
}
