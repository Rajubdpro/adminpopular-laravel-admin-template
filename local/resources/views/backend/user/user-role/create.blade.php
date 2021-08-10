
@extends('layouts.backend')
@section('contents')

    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">User Role</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
            <li>Create User Role</li>
        </ul>
    </div>

      <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="title">
            <h3 class="title-text text-center mt-20">Add New User Role</h3>
            @if(Session('status'))
             <div class="alert alert-success" role="alert">
               Data successfully added
            </div>
            @endif
            <div class="tile-body">
              <form action="{{route('user-role.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label class="control-label">Role Name</label>
                  <input class="form-control" type="text" placeholder="Enter role name" value="{{old('role_name')}}" name="role_name">
                   @if ($errors->has('role_name'))
                      <span class="invalid-feedback">
                        {{$errors->first('role_name')}}
                      </span>
                    @endif
                </div> 
                <div class="form-group mt-20">
                  <label class="control-label">Acess Menus</label>
                   <table class="table table-bordered">
                      <tbody>
                        <div class="row">
                          @foreach($admin_menu_list as $key => $value)
                             <div class="form-check col-md-3 m-3">
                               <label class="form-check-label">
                               <input class="form-check-input" value="{{$key}}" type="checkbox" name="show_option[]">{{$value}}
                            </label>
                            </div>
                          @endforeach
                       </div>

                      </tbody>
                    </table>

                   @if ($errors->has('show_option'))
                      <span class="invalid-feedback">
                        {{$errors->first('show_option')}}
                      </span>
                    @endif

                </div>
              
              

                 <div class="tile-footer text-center">
                   <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button> 
                   <a href="{{route('user-role.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left fa-lg fa-check-circle"></i>Back</a>
                </div>
                <br>
                <br>
              
              </form>
            </div>
           
          </div>
        </div>
      </div>
 @endsection
