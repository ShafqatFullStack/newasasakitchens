@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Careers</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('careers.index') }}">Manage Career</a></li>
                    <li class="active">Add Careers</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Add Career</h3>
                    {{ Form::open([ 'route' => 'careers.store','class'=>'form-horizontal generalForm','enctype'=>'multipart/form-data']) }}
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-7">
                            <input type="text" name="title" class="form-control @error('tile') is-invalid @enderror"
                                   required autocomplete="name" value="{{ old('title')}}" autofocus id="name">
                            @error('title')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-7">
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="" cols="30" rows="10">{{ old('description')}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>

                        </div>
						
                    </div>
					<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}" style="margin-left:25%;">
						<div class="col-sm-8">
							{!! Form::label('Content:') !!}
							{{ Form::textarea('content', null, ['class' => 'form-control summernote','id'=>'name','placeholder'=>'Content here']) }}

							<span class="text-danger">{{ $errors->first('content') }}</span>
						
                        </div>
					</div>	
                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-4">
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                   required autocomplete="name"  autofocus id="name">
                            @error('image')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('careers.index') }}" class="btn btn-info waves-effect waves-light
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
<script type="text/javascript">

       
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
