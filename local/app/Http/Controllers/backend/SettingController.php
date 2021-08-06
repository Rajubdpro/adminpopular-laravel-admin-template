<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\setting;
use Image;
use Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
     $edit = setting::first();
     return view('backend.setting.index',compact('edit'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
       $findData = setting::first();
       $inputValue= clean($request->all());
        $request->validate([
         'favicon' => 'max:2048',
         'logo' => 'max:2048',
         'first_link' => 'max:255',
         'phone' => 'required|max:20',
         'email' => 'max:50',
         'email2' => 'max:50',
        ]);

        // Favicon 
        if($request->hasFile('favicon')){
           $image=$request->file('favicon');
           $imageName='favicon'.'_'.time().'.'.$image->getClientOriginalExtension();
           if($image->getClientOriginalExtension() == 'svg'){
              $image->move(public_path('uploads/setting'),$imageName);
           }else{
             Image::make($image)->save(public_path('uploads/setting/'.$imageName));
           }
            $inputValue['favicon']=$imageName;
            if ($findData->favicon && file_exists(public_path().'/uploads/setting/'.$findData->favicon)) {
                 unlink(public_path().'/uploads/setting/'.$findData->favicon);
            }
        }

         // Logo
         if($request->hasFile('logo')){
           $image=$request->file('logo');
           $imageName='logo'.'_'.time().'.'.$image->getClientOriginalExtension();
           if($image->getClientOriginalExtension() == 'svg'){
              $image->move(public_path('uploads/setting'),$imageName);
           }else{
             Image::make($image)->save(public_path('uploads/setting/'.$imageName));
           }
            $inputValue['logo']=$imageName;
            if ($findData->logo && file_exists(public_path().'/uploads/setting/'.$findData->logo)) {
                 unlink(public_path().'/uploads/setting/'.$findData->logo);
            }
        }


       $success = $findData->fill($inputValue)->save();
       if($success){
        Session::flash('success', 'success');
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
        //
    }
}
