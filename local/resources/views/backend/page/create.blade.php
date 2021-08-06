
@extends('layouts.backend')
@push('page-style')
 <link href="{{asset('local/public/contents/backend/js/plugins/editor/summernote')}}/css/summernote.min.css" rel="stylesheet">
 @endpush


@section('contents')

  <!-- breadcum -->
  <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">Pages</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a></li>
            <li>Create</li>
        </ul>
    </div>

      <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="title">
            <h3 class="title-text text-center mt-20">Create New Page</h3>
            @if(Session('status'))
             <div class="alert alert-success" role="alert">
               Data successfully added
            </div>
            @endif
            <div class="tile-body">
              <form action="{{route('admin_page.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="control-label">Page Name</label>
                  <input class="form-control" type="text" placeholder="Enter page name" value="{{old('page_name')}}" name="page_name" autocomplete="off">
                   @if ($errors->has('page_name'))
                      <span class="invalid-feedback">
                        {{$errors->first('page_name')}}
                      </span>
                    @endif
                </div> 

               
                 <div class="form-group">
                  <label class="control-label">Page URl</label>
                  <input class="form-control" type="text" placeholder="Enter page url" value="{{old('slug')}}" name="slug" autocomplete="off">
                   @if ($errors->has('slug'))
                      <span class="invalid-feedback">
                        {{$errors->first('slug')}}
                      </span>
                    @endif
                </div>


                 <div class="form-group">
                    <label class="control-label">Optional Text</label>
                    <textarea  class="form-control ShamimEditor_bottom"  name="optional_text">{{old('optional_text')}}</textarea>
                     @if ($errors->has('optional_text'))
                        <span class="invalid-feedback">
                          {{$errors->first('optional_text')}}
                        </span>
                      @endif
                  </div>
              
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Page Display</label>
                    <select name="page_display" class="form-control"> 
                      <option value="header">Header</option>
                      <option value="footer">Footer</option>
                      <option value="other">Other</option>
                    </select>
                     @if ($errors->has('page_display'))
                        <span class="invalid-feedback" >
                          {{$errors->first('page_display')}}
                        </span>
                      @endif
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Page Sirial</label>
                     <input type="number" name="sirial" value="{{old('sirial')}}" class="form-control" min="1" max="20">
                     @if ($errors->has('sirial'))
                        <span class="invalid-feedback" >
                          {{$errors->first('sirial')}}
                        </span>
                      @endif
                  </div>
                </div>
              </div>


                <div class="form-group">
                  <label class="control-label">Page Title</label>
                  <input class="form-control" type="text" placeholder="Enter page title" value="{{old('title')}}" name="title" autocomplete="off">
                   @if ($errors->has('title'))
                      <span class="invalid-feedback">
                        {{$errors->first('title')}}
                      </span>
                    @endif
                </div>
                
                <div class="form-group">
                    <label class="control-label">Page Meta Description</label>
                    <textarea class="form-control" name="meta_des">{{old('meta_des')}}</textarea>
                     @if ($errors->has('meta_des'))
                        <span class="invalid-feedback">
                          {{$errors->first('meta_des')}}
                        </span>
                      @endif
                </div>

               <div class="form-group">
                    <label class="control-label">Page Meta Tags</label>
                    <textarea class="form-control" name="meta_tag">{{old('meta_tag')}}</textarea>
                     @if ($errors->has('meta_tag'))
                        <span class="invalid-feedback">
                          {{$errors->first('meta_tag')}}
                        </span>
                      @endif
                </div>

                <div class="form-group">
                  <label class="control-label">Photo</label>
                  <input class="form-control" type="file" name="photo" autocomplete="off">
                   @if ($errors->has('photo'))
                      <span class="invalid-feedback" >
                        {{$errors->first('photo')}}
                      </span>
                    @endif
                 
                </div>


                 <div class="tile-footer text-center mt-20">
                  @if (env('demo_mode')!='enabled')
                   <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button> 
                  @else
                   <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="top" title="Demo Mode"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button> 
                  @endif 
                   <a href="{{route('admin_page.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left fa-lg fa-check-circle"></i>Back</a>
                </div>

                <br>
                <br>
              
              </form>
            </div>
           
          </div>
        </div>
      </div>
 @endsection
 @push('page-script')
  <!-- write custom page script here -->
  <script src="{{asset('local/public/contents/backend/js/plugins/editor/summernote')}}/js/summernote-lite.min.js"></script>
  <script>
    (function ($) {
         "use strict";
        $('.ShamimEditor').summernote();
        $('.ShamimEditor_right').summernote();
        $('.ShamimEditor_bottom').summernote();
    })(jQuery);
   </script>
 @endpush