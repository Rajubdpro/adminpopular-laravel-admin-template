
@extends('layouts.backend')
@section('contents')

      <!-- breadcum -->
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Dashboard</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
            <li>User</li>
        </ul>
    </div>
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary btn-sm mb-2" href="{{route('custom-user.create')}}"><i class="fa fa-plus fa-lg fa-check-circle"></i>Add New</a>
          @if(Session('status'))
          <div class="text-center text-success">
          <h5>Data Deleted Sucessfully</h5></div>
          @endif
              <div class="table-responsive title">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Si</th>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $x = 0;?>
                    @foreach($getusers as $getuser)
                      <?php $x++;?>
                    <tr>
                      <td class="align-middle">{{$x}}</td>
                      <td class="align-middle">
                        @if($getuser->photo != NULL)
                         <img src="{{asset('local/public/uploads/user/')}}/{{$getuser->photo}}" class="xm-img" width="80">
                        @else
                        <img src="{{asset('local/public/uploads/user/no-photo.jpg')}}" class="xm-img" width="80">
                        @endif
                      </td>
                      <td class="align-middle">{{$getuser->name}}</td>
                      <td class="align-middle">{{$getuser->phone}}</td>
                      <td class="align-middle">{{$getuser->email}}</td>
                      <td class="align-middle">
                        <div class="table-action">
                        <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{route('custom-user.edit',$getuser->id)}}" class="btn btn-primary btn-sm tooltip-danger">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="View"  href="{{route('custom-user.show',$getuser->id)}}" class="btn btn-success btn-sm"> <i class="fa fa-eye"></i></a>
                        @if($getuser->id != 1)


                        @if(env('demo_mode') == 'enabled')

                        <button data-toggle="tooltip" data-placement="top" title="Demo Mode Please"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                       
                        @else
                           <form action="{{route('custom-user.destroy',$getuser->id)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                          <button onclick="return window.confirm('are you sure want to delete')" data-toggle="tooltip" data-placement="top" title="Delete"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                          </form>
                        @endif


                        @endif
                      </div>
                      </td>
                      
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
                  @if(env('demo_mode') != 'enabled')
                <a class="btn btn-circle btn-info btn-xs mb-10 mt-20" href="{{route('user-role.index')}}"> Role Managment</a>
                @endif
              </div>
            </div>
          </div>
 @endsection
 @push('page-script')
    <!-- Data table plugin-->
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatable/jquery.dataTables.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatable/dataTables.bootstrap.min.js"></script>
    <script>
    (function ($) {
         "use strict";
        $('#sampleTable').DataTable();
    })(jQuery);
      </script>
 @endpush