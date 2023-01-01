
@extends('layouts.backend')
@section('contents')
<!-- breadcum -->
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">User</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
            <li>Create User</li>
        </ul>
    </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="title">
            <h3 class="title-text text-center ">Update User Information</h3>
            @if(Session('status'))
             <div class="alert alert-success" role="alert">
               Data successfully added
            </div>
            @endif
            <div class="title-body">
              <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" placeholder="Enter full name" value="{{old('name')}}" name="name">
                   @if ($errors->has('name'))
                      <span class="invalid-feedback">
                        {{$errors->first('name')}}
                      </span>
                    @endif
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" placeholder="Enter email address" value="{{old('email')}}" name="email">
                    @if ($errors->has('email'))
                      <span class="invalid-feedback">
                        {{$errors->first('email')}}
                      </span>
                    @endif
                </div>
               <div class="form-group">
                  <label class="control-label">Phone</label>
                  <input class="form-control" type="text" placeholder="Enter phone number" value="{{old('phone')}}" name="phone">
                   @if ($errors->has('phone'))
                      <span class="invalid-feedback">
                        {{$errors->first('phone')}}
                      </span>
                    @endif
                </div>

               <div class="form-group">
                  <label class="control-label">New Password</label>
                  <input class="form-control" type="password" placeholder="Enter new password" name="password" value="{{old('password')}}">
                   @if ($errors->has('password'))
                      <span class="invalid-feedback">
                        {{$errors->first('password')}}
                      </span>
                    @endif
               </div>
              <div class="form-group">
                  <label class="control-label">Select User Role</label>
                  <select name="role_id" class="form-control">

                    @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->role_name}}</option>
                    @endforeach
                  </select>
               </div>

                <div class="form-group">
                  <label class="control-label">Photo</label>
                  <input class="form-control" type="file" name="photo">
                   @if ($errors->has('photo'))
                      <span class="invalid-feedback">
                        {{$errors->first('photo')}}
                      </span>
                    @endif

                </div>


              <div class="tile-footer text-center mt-20 mb-20">

                @if (env('demo_mode') != 'enabled')
                  <button type="submit" class="btn btn-primary">Register</button>
                @else
                  <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title=" Currently Demo Mode"> Register</button>
                @endif

                   <a href="{{route('users.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left fa-lg fa-check-circle"></i>Back</a>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>
 @endsection
