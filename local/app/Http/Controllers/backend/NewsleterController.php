<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\newsleter;
class NewsleterController extends Controller
{
 
    public function index()
    {
      $emails = newsleter::orderBy('id','DESC')->get();
      return view('backend.newsletter.index', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deactive($id){
        $enactive=newsleter::where('status',1)->where('id',$id)->update([
          'status' => 0,
        ]);
        return redirect()->back();
      }
    public function active($id){
         $active=newsleter::where('status',0)->where('id',$id)->update([
          'status' => 1,
        ]);
       return redirect()->back();
    }
    public function create()
    {
     
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
        'email' => 'required|max:255|unique:newsleters,email',
        ]);
        $success = newsleter::create($inputValue);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        newsleter::destroy($id);
        return redirect()->back();
    }
}
