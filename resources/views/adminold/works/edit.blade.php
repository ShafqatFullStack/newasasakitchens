@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Works</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('works.index') }}">Manage Work</a></li>
                    <li class="active">Edit Works</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Edit Work -> {{ $work->title }}</h3>
                    {{ Form::model($work, ['method' => 'PATCH','route' => ['works.update', $work->id],'class'=>'form-horizontal generalForm','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="title" class="form-control @error('name') is-invalid @enderror"
                                   required autocomplete="name" value="{{ $work->title }}" autofocus id="name">
                            @error('title')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Url</label>
                        <div class="col-sm-4">
                            <input type="text" name="url" class="form-control @error('url') is-invalid @enderror"
                                   required autocomplete="name" value="{{$work->url}}" autofocus id="name">
                            @error('url')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Order</label>
                        <div class="col-sm-4">
                            <input type="text" name="ord" class="form-control @error('ord') is-invalid @enderror"
                                   required autocomplete="name" value="{{$work->ord}}" autofocus id="name">
                            @error('ord')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                        <div class="col-sm-3">
                            {!! Form::label('Category:') !!}
                        </div>
                        <div class="col-sm-4">
                            {{ Form::select('categories[]',$categories, null, ['class' => 'no-padding kt-select2 col-lg-12 ','multiple'=>'multiple','id'=>'categories']) }}
                            <span class="text-danger">{{ $errors->first('categories') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-4">
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="" cols="30" rows="10">{{ $work->description }}</textarea>

                            @error('description')
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
                                <img src="{{asset("uploads/works/$work->image")}}" width="150" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('works.index') }}" class="btn btn-info waves-effect waves-light
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
        $("#categories").select2({
                placeholder: "Select Categories",
                allowClear: true
            }
        );
    </script>
@endsection
