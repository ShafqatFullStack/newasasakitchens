@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Works</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('areas.index') }}">Manage Area</a></li>
                    <li class="active">Add Area</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Add Work</h3>
                    {{ Form::open([ 'route' => 'areas.store','class'=>'form-horizontal generalForm','enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="title" class="form-control @error('tile') is-invalid @enderror"
                                   required autocomplete="name" value="{{ old('title')}}" autofocus id="name">
                            @error('title')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-offset-3 col-md-6">
                    <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                        {!! Form::label('Type:') !!}
                        <select name="type" class="form-control" id="">
                            <option value="1">Area</option>
                            <option value="2">Service</option>
                        </select>
                        <span class="text-danger">{{ $errors->first('type') }}</span>
                    </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('areas.index') }}" class="btn btn-info waves-effect waves-light
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

        $('.inline-editor').summernote({
            airMode: true
        });

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });
    </script>
@endsection
