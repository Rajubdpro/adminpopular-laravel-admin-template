<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_role;
use Session;
class UserRoleController extends Controller
{

    public function index()
    {
        $userRoles = user_role::get();
        return view('backend.user.user-role.index', compact('userRoles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.user.user-role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $inputValue = clean($request->all());

     $request->validate([
        'role_name' => 'required|max:50',
        'show_option' => 'required',
      ]);

     $arrayTostring = implode(',', $request->input('show_option'));
     $inputValue['show_option'] = $arrayTostring;
      $success = user_role::create($inputValue);
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
        $show = user_role::find($id);
        return view('backend.user.user-role.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit = user_role::find($id);
        return view('backend.user.user-role.edit', compact('edit'));
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

     $find = user_role::find($id);
     $inputValue = clean($request->all());
     $request->validate([
        'role_name' => 'required|max:50',
        'show_option' => 'required',
      ]);

     $arrayTostring = implode(',', $request->input('show_option'));
     $inputValue['show_option'] = $arrayTostring;
      $success = $find->fill($inputValue)->save();
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
        $success = user_role::destroy($id);
        if($success){
            Session::flash('status', 'success');
          }else{
            Session::flash('error','something wend wrong');
          }
       return redirect()->back();
    }
}
