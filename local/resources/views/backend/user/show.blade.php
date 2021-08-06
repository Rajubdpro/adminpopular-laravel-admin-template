
@extends('layouts.backend')
@section('contents')

      <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="title">
            <h3 class="tile-title text-center ">View User Information</h3>
            <div class="tile-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">{{$show->name}}</th>
                  </tr>
                   <tr>
                    <th class="align-middle" scope="col">Photo</th>
                    <th scope="col" > 
                        @if($show->photo != NULL)
                         <img src="{{asset('local/public/uploads/user/')}}/{{$show->photo}}" class="xm-img" width="120">
                        @else
                        <img src="{{asset('local/public/uploads/user/no-photo.jpg')}}" class="xm-img" width="120">
                        @endif
                    </th>
                  </tr> 
                   <tr>
                    <th scope="col">Email</th>
                    <th scope="col">{{$show->email}}</th>
                  </tr>
                  <tr>
                    <th scope="col">Phone</th>
                    <th scope="col">{{$show->phone}}</th>
                  </tr>
                   <tr>
                    <th scope="col">User Role</th>
                    <th scope="col">
                      @if($show->relational_user_role)
                      {{$show->relational_user_role->role_name}}
                      @endif
                    </th>
                  </tr>
                </thead>
              </table>
                <div class="text-center">
                <a href="{{route('custom-user.index')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i>Back</a>
              </div>
            </div>
           
          </div>
        </div>
      </div>
 @endsection
