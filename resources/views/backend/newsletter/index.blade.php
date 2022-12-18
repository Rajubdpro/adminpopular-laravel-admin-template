
@extends('layouts.backend')
@section('contents')

<!-- breadcum -->
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Newsletter</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
            <li>Newsletter</li>
        </ul>
    </div>
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            @if (env('demo_mode') != 'enabled')
            <a class="btn btn-primary" style="color:#fff"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-plus fa-lg fa-check-circle"></i>Add Email</a>
            @endif
            @if(Session('status'))
            <div class="text-center text-success">
            <h5>Data Deleted Sucessfully</h5></div>
            @endif
            <div class="tile mt-2">
              <div class="tile-body">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                      <tr>
                        <th>Si</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $x = 0;?>
                      @foreach($emails as $emailinfo)
                        <?php $x++;?>

                      <tr {{$emailinfo->status == 0 ? 'style=opacity:0.2;background:#ccc' : ''}}>
                        <td class="align-middle">{{$x}}</td>

                        <td class="align-middle">{{$emailinfo->email}}</td>
                        <td class="align-middle" >
                          @if($emailinfo->status ==1)
                              <a href="{{URL::to('email_deactive',$emailinfo->id)}}" class="btn btn-primary">Active</a>

                        @else
                              <a href="{{URL::to('email_active',$emailinfo->id)}}" class="btn btn-danger">Deactive</a>
                        @endif

                        </td>
                        <td class="align-middle">
                          <div class="table-action">
                          <form action="{{route('newsletter.destroy',$emailinfo->id)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                          <button onclick="return window.confirm('are you sure want to delete')" data-toggle="tooltip" data-placement="top" title="Delete"  class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          </form>


                        </div>
                        </td>

                      </tr>

                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <form action="{{route('newsletter.store')}}" method="post">
         @csrf
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add News Email</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required="required">
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
        </div>
      </div>
      </form>

   @endsection
   @push('page-script')
      <!-- Data table plugin-->
      <script src="{{asset('contents/backend')}}/vendors/datatable/jquery.dataTables.min.js"></script>
      <script src="{{asset('contents/backend')}}/vendors/datatable/dataTables.bootstrap.min.js"></script>
       <script>
      (function ($) {
           "use strict";
          $('#sampleTable').DataTable();
      })(jQuery);
        </script>
   @endpush
