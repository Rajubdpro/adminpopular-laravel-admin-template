<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\newsleter;
use App\page;
use App\User;
use Auth;
class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function getAllMonths(){
        $month_array = array();
        $newsleter_dates = newsleter::orderBy('created_at','ASC')->pluck('created_at');
        $newsleter_dates = json_decode($newsleter_dates);
            if(!empty($newsleter_dates)){
             foreach ($newsleter_dates as $unrofmat_date) {     
              $month_no = date('m', strtotime($unrofmat_date));
              $month_name = date('M', strtotime($unrofmat_date));
              $month_array[$month_no] = $month_name;

            }}
        return $month_array;
    }
  
    public function index()
    {   
        $getusers = user::count();
        $pagecount = page::count();
        $newsleter = newsleter::count();
         return view('backend.index',compact('getusers','newsleter','pagecount'));
    }


    function getMonthlyPostCount( $month ) {
        $monthly_post_count = newsleter::whereMonth( 'created_at', $month )->get()->count();
        return $monthly_post_count;
    }



    public function get_chartinfo(){
        $monthly_post_count_array = array();
        $month_array = $this->getAllMonths();
        $month_name_array = array();

        if ( ! empty( $month_array ) ) {
            foreach ( $month_array as $month_no => $month_name ){
                $monthly_post_count = $this->getMonthlyPostCount( $month_no );
                array_push( $monthly_post_count_array, $monthly_post_count );
                array_push( $month_name_array, $month_name );
            }
        }
      
      
        $monthly_post_data_array = array(
            'months' => $month_name_array,
            'chart_count_data' => $monthly_post_count_array,
           
        );
        return $monthly_post_data_array;

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
        //
    }
}
