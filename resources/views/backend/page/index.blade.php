
@extends('layouts.backend')
@section('contents')

    <!-- breadcum -->
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Pages</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
            <li>Page</li>
        </ul>
    </div>
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <a class="btn btn-primary" href="{{route('admin_page.create')}}"><i class="fa fa-plus fa-lg fa-check-circle"></i>New Page</a>
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
                        <th>Photo</th>
                        <th>Page Title</th>
                        <th>URL</th>
                        <th>Display</th>
                        <th>Sirial</th><!--
                        <th>Status</th> -->
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $x = 0;?>
                      @foreach($pageinfos as $pages)
                        <?php $x++;?>

                      <tr {{$pages->status == 0 ? 'style=opacity:0.2;background:#ccc' : ''}}>
                        <td class="align-middle">{{$x}}</td>
                        <td class="align-middle">
                          @if($pages->photo != NULL)
                          <img src="{{asset('local/public/uploads/page/')}}/{{$pages->photo}}" class="xm-img" width="80">
                          @else
                          <img src="{{asset('local/public/uploads/no-image.png')}}" class="xm-img" width="80">
                          @endif
                        </td>
                        <td class="align-middle">{{str_limit($pages->title, 20)}}</td>
                        <td class="align-middle">{{str_limit($pages->slug, 20)}}</td>
                        <td class="align-middle">{{$pages->page_display}}</td>
                        <td class="align-middle">{{$pages->sirial}}</td>

                        <td class="align-middle">
                          <div class="table-action">
                          <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{route('admin_page.edit',$pages->id)}}" class="btn btn-primary tooltip-danger">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <a target="__" data-toggle="tooltip" data-placement="top" title="View"  href="{{URL::to('/',$pages->slug)}}" class="btn btn-success"> <i class="fa fa-eye"></i></a>

                          <form action="{{route('admin_page.destroy',$pages->id)}}" method="post" class="d-inline">
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
 @endsection
 @push('page-script')
    <!-- Data table plugin-->
    <script src="{{asset('contents/backend')}}/vendors/datatable/jquery.dataTables.min.js"></script>
    <script src="{{asset('contents/backend')}}/vendors/datatable/dataTables.bootstrap.min.js"></script>
    <script>
     "use strict";
     $('#sampleTable').DataTable();
    </script>
 @endpush
