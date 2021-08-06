
@extends('layouts.backend')
@section('contents')

      <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="tile">
            <h3 class="tile-title text-center ">View Team Information</h3>
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
                         <img src="{{asset('local/public/uploads/client/')}}/{{$show->photo}}" class="xm-img">
                        @else
                        <img src="{{asset('local/public/uploads/no-photo.jpg')}}" class="xm-img">
                        @endif
                    </th>
                  </tr> 
                  <tr>
                    <th scope="col">Company Website URl</th>
                    <th scope="col">{{$show->url}}</th>
                  </tr>
                </thead>
              </table>
                <div class="text-center">
                <a href="{{route('client.index')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i>Back</a>
              </div>
            </div>
           
          </div>
        </div>
      </div>
 @endsection
