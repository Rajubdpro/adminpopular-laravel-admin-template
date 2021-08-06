@extends('layouts.backend')
@section('contents')
@push('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('local/public/contents/frontend/assets/css/iziToast.min.css')}}">
@endpush

<div class="title container">
    <h3 class="title-text text-center mt-20 mb-20">Update Basic Settings</h3>
    <form action="{{route('admin_settings.update',1)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="favicon">Favicon</label>
                            <input type="file" class="form-control" id="favicon" name="favicon">
                            @if($edit->favicon != null)
                            <img src="{{asset('local/public/uploads/setting')}}/{{$edit->favicon}}">
                            @else
                            <img style="width: 20%" src="{{asset('local/public/uploads')}}/no-image.png">
                            @endif
                            @error('favicon')
                            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                            @if($edit->logo != null)
                            <img src="{{asset('local/public/uploads/setting')}}/{{$edit->logo}}">
                            @else
                            <img src="{{asset('local/public/uploads')}}/no-image.png">
                            @endif
                            @error('logo')
                            <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="primary-color">Primary Color</label>
                    <input type="text" class="form-control" id="primary-color" placeholder="Ex: #19ed81" name="primary_color" value="{{$edit->primary_color}}">
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Ex: +8801794939992" name="phone" value="{{$edit->phone}}">
                </div>

                <div class="form-group">
                    <label for="phone2">Phone Optional</label>
                    <input type="text" class="form-control" id="phone2" placeholder="Ex: +8801794939992" name="phone2" value="{{$edit->phone2}}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Ex: example@gmail.com" name="email" value="{{$edit->email}}">
                </div>
                <div class="form-group">
                    <label for="email2">Optional Email</label>
                    <input type="email" class="form-control" id="email2" placeholder="Ex: example@gmail.com" name="email2" value="{{$edit->email2}}">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$edit->address}}">
                </div>

            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="about_text">About Footer</label>
                    <textarea name="about_us" class="form-control" id="about_text">{{$edit->about_us}}</textarea>
                </div>
                <div class="form-group">
                    <label for="google_map">Google Map</label>
                    <textarea name="google_map" class="form-control" id="google_map">{{$edit->google_map}}</textarea>
                </div>

                <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <input type="text" class="form-control" id="copyright" name="copyright" value="{{$edit->copyright}}">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>


                <div class="form-group">
                    <label for="google_analytics">Google Analytics</label>
                    <textarea name="google_analytics" class="form-control" id="google_analytics" rows="10">{{$edit->google_analytics}}</textarea>
                </div>

                <div class="form-group">
                    <label for="live_chat">Live Chat</label>
                    <textarea name="live_chat" class="form-control" id="live_chat" rows="10">{{$edit->live_chat}}</textarea>
                </div>

            </div>

        </div>
        <br>
        <br>
        @if (env('demo_mode')!='enabled')
        <button type="submit" class="btn btn-primary">Submit</button>
        @else
        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title=" Currently Demo Mode"> Submit
        </button>
        @endif
        <br>
        <br>


    </form>


</div>

@push('page-script')
<script src="{{asset('local/public/contents/frontend/assets/js/iziToast.min.js')}}"></script>
@if(Session('success'))
<script type="text/javascript">
    "use strict";
    iziToast.success({
        title: 'Thank you!',
        message: 'Data has been updated',
        position: 'topRight',
        transitionIn: 'fadeInUp',
        transitionOut: 'fadeOut',
        transitionInMobile: 'fadeInUp',
        transitionOutMobile: 'fadeOutDown',
    });
</script>

@endif
@endpush

@endsection