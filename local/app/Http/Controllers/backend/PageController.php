<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\page;
use Session;
class PageController extends Controller
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
     $pageinfos = page::orderBy('id','ASC')->get();
     return view('backend.page.index',compact('pageinfos'));
    }

    public function deactive($id){
        $enactive=page::where('status',1)->where('id',$id)->update([
          'status' => 0,
        ]);
        return redirect()->back();
      }
    public function active($id){
         $active=page::where('status',0)->where('id',$id)->update([
          'status' => 1,
        ]);
       return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputValue = $request->all();
         $request->validate([
            'page_name' => 'required|max:255',
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:pages,slug',
            'page_display' => 'required|max:255',
            'sirial' => 'required|max:255',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:2048',
         ]);
        $inputValue['slug'] = str_slug($request->input('slug'), "-");
          // user image update
        if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='page'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(public_path('uploads/page/'.$imageName));

            $inputValue['photo']=$imageName;
            
        }

        $success = page::create($inputValue);
        if($success){
          Session::flash('status', 'success');
        }else{
            Session::flash('error', 'something went wrong');
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
       $show = page::find($id);
        return view('backend.page.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
      $edit = page::find($id);
       return view('backend.page.edit', compact('edit'));
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
       $update_data = page::find($id);
        $input_value = $request->all();
        // input validation
        $request->validate([
            'page_name' => 'required|max:255',
            'title' => 'required|max:255',
            'slug' => ($request->input('slug') != $update_data->slug) ? 'required|max:255|unique:pages,slug' : '',
            'page_display' => 'required|max:255',
            'sirial' => 'required|max:255',
            'photo' => 'mimes:jpeg,jpg,png,gif|max:2048',
         ]);
        $input_value['slug'] = str_slug($request->input('slug'), "-");
        // user image update
        if($request->hasFile('photo')){
           $image=$request->file('photo');
           $imageName='page'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(public_path('uploads/page/'.$imageName));
            $input_value['photo']=$imageName;
            if ($update_data->photo && file_exists(public_path().'/uploads/page/'.$update_data->photo)) {
                 unlink(public_path().'/uploads/page/'.$update_data->photo);
            }
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
         $delted_id = page::find($id);
        $deleted = page::destroy($id);
        if($deleted){
            if ($delted_id->photo && file_exists(public_path().'/uploads/page/'.$delted_id->photo)) {
                 unlink(public_path().'/uploads/page/'.$delted_id->photo);
            }
        }
        if($deleted){
          Session::flash('status', 'success');
        }else{
            Session::flash('error', 'something went wrong');
        }
        return redirect()->back();
    }
}
