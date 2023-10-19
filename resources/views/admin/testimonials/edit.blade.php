@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Testimonials</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('testimonials.index') }}">Manage Testimonial</a></li>
                    <li class="active">Edit Testimonial</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Edit Testimonial -> {{ $testimonial->name }}</h3>
                    {{ Form::model($testimonial, ['method' => 'PATCH','route' => ['testimonials.update', $testimonial->id],'class'=>'form-horizontal generalForm','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                   required autocomplete="name" value="{{ $testimonial->name }}" autofocus id="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Designation</label>
                        <div class="col-sm-4">
                            <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror"
                                   required autocomplete="name" value="{{ $testimonial->designation }}" autofocus id="name">
                            @error('designation')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Comment</label>
                        <div class="col-sm-4">
                            <textarea name="comment" class="form-control @error('comment') is-invalid @enderror" id="" cols="30" rows="10">{{ $testimonial->comment }}</textarea>

                            @error('comment')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-4">
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                    autocomplete="name"  autofocus id="name">
                            @error('image')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                            <div class="form-group m-t-15">
                                <img src="{{asset("uploads/testimonials/$testimonial->image")}}" width="150" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('testimonials.index') }}" class="btn btn-info waves-effect waves-light
                                 m-t-10"><i class="fa fa-backward"></i> Back</a>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">
                                <i class="fa fa-check"></i> Save</button>
                        </div>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>

        <!-- /.row -->
    </div>
@stop
@section("scripts")
    <script type="text/javascript">
        $('.generalForm').submit(function () {
            $('body').LoadingOverlay("show");
            $("#generalForm").submit();
        });
    </script>
@endsection
