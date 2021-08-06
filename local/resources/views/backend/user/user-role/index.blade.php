
@extends('layouts.backend')
@section('contents')

<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">User Role</h4>
    <ul class="db-breadcrumb-list">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
        <li>All User Role</li>
    </ul>
</div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <a class="btn btn-primary btn-sm" href="{{route('user-role.create')}}"><i class="fa fa-plus fa-lg fa-check-circle"></i>Add New Role</a>
          @if(Session('status'))
          <div class="text-center text-success">
          <h5>Data Deleted Sucessfully</h5></div>
          @endif
          <div class="title mt-20">
                <table class="table table-bordered f-border-none" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Si</th>
                      <th>Role Name</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $x = 0;?>
                    @foreach($userRoles ?? '' as $roleinfo)
                      <?php $x++;?>
                    <tr>
                      <td class="align-middle">{{$x}}</td>
                      <td class="align-middle">{{$roleinfo->role_name}}</td>
                      <td class="align-middle">{{$roleinfo->role_status}}</td>
                      <td class="align-middle">
                        <div class="table-action">
                        <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{route('user-role.edit',$roleinfo->id)}}" class="btn btn-primary btn-sm tooltip-danger">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="View"  href="{{route('user-role.show',$roleinfo->id)}}" class="btn btn-success btn-sm"> <i class="fa fa-eye"></i></a>
                        @if($roleinfo->id != 1 && $roleinfo->id != 2)
                        <form action="{{route('user-role.destroy',$roleinfo->id)}}" method="post" class="d-inline">
                          @method('DELETE')
                          @csrf
                        <button onclick="return window.confirm('are you sure want to delete')" data-toggle="tooltip" data-placement="top" title="Delete"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                        @endif
                      </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
        </div>
      </div>
 @endsection
