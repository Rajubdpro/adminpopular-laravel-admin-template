
@extends('layouts.backend')
@section('contents')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">User Role</h4>
    <ul class="db-breadcrumb-list">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
        <li>Show User Role</li>
    </ul>
</div>


      <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="title">
            <h3 class="title-text border-bottom-none mb-20">View Role Information</h3>
            <div class="tile-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Role Name</th>
                    <th scope="col">{{$show->role_name}}</th>
                  </tr>
                
                   <tr>
                    <th scope="col">Role Status</th>
                    <th scope="col">{{$show->role_status}}</th>
                  </tr> 
                  <tr>
                    <th scope="col">Access Menu</th>
                    <th scope="col">{{$show->show_option}}</th>
                  </tr>
                 
                </thead>
              </table>
              <br>
                <div class="text-center">
                <a href="{{route('user-role.index')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i>Back</a>
              </div>
              <br>
            </div>
           
          </div>
        </div>
      </div>
 @endsection
 