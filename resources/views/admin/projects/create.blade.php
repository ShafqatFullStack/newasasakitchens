@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Works</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('works.index') }}">Manage Works</a></li>
                    <li class="active">Add Works</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Add Projects</h3>
                    {{ Form::open([ 'route' => 'projects.store','class'=>'form-horizontal generalForm','enctype'=>'multipart/form-data']) }}
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
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Meta Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror"
                                    autocomplete="meta_title" value="{{ old('meta_title')}}" autofocus id="name">
                            @error('meta_title')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Video Url</label>
                        <div class="col-sm-4">
                            <input type="text" name="video_url" class="form-control @error('video_url') is-invalid @enderror"
                                    autocomplete="video_url" value="{{ old('video_url')}}" autofocus id="name">
                            @error('video_url')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Meta Keyword</label>
                        <div class="col-sm-4">
                            <textarea name="meta_keyword" class="form-control  @error('meta_keyword') is-invalid @enderror" id="" cols="30" rows="10">{{ old('description')}}</textarea>
                            @error('meta_keyword')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Meta Description</label>
                        <div class="col-sm-4">
                            <textarea name="meta_description" class="form-control  @error('meta_description') is-invalid @enderror" id="" cols="30" rows="10">{{ old('description')}}</textarea>
                            @error('meta_description')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                        <div class="col-sm-3">
                            {!! Form::label('Slug:') !!}
                        </div>
                        <div class="col-sm-4">
                            {{ Form::text('slug', null, ['class' => 'form-control','id'=>'name','placeholder'=>'i.e: Games Support = games-support']) }}
                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                        <div class="col-sm-3">
                            {!! Form::label('Category:') !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::select('category',$categories, null, ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-4">
                            <textarea name="description" class="form-control summernote  @error('description') is-invalid @enderror" id="" cols="30" rows="10">{{ old('description')}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Feaures</label>
                        <div class="col-sm-4">
                            <textarea name="features" class="form-control summernote @error('features') is-invalid @enderror" id="" cols="30" rows="10">{{ old('description')}}</textarea>
                            @error('features')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-4">
                            <input type="file" name="image" class="form-control  @error('image') is-invalid @enderror"
                                   required autocomplete="name"  autofocus id="name">
                            @error('image')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
<div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Description before & After  </label>
                        <div class="col-sm-4">
                            <textarea name="description_before" class="form-control  @error('description_before') is-invalid @enderror" id="" cols="30" rows="10">{{ old('description_before')}}</textarea>
                            @error('description_before')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
					<?php for ($i = 1; $i <=6 ; $i++){ ?>
       
	   
					<div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Befor & After Section {{ $i }}</label>
                        <div class="col-sm-4">
							<input type="text" class="form-control" name="section_head_{{ $i }}">	
                            <textarea name="section_description_<?php echo  $i ?>" class="form-control  @error('section_description_{{ $i }}') is-invalid @enderror" id="" cols="30" rows="10">{{ old("section_description_$i")}}</textarea>
                            @error("section_description_$i")
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
						<div class="prices col-sm-3" style="margin-bottom: 15px;">
                        <h4 class="col-sm-8" style="font-weight:500;">Before / After Images</h4>
                        <input type="file" name="section_before_{{ $i }}"  class="form-control">
                        <input type="file" name="section_after_{{ $i }}"  class="form-control">

                    </div>
                    </div>
					<?php } ?>
					
                    <div class="prices" style="margin-bottom: 15px;">
                        <h4 class="col-sm-8" style="font-weight:500;">Before / After Images</h4>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-success btn-xs add_p pull-right"><i class="fa fa-plus"></i> Add </button>
                        </div>

                    </div>



                    <div class="questions" style="margin-bottom: 15px;">
                        <h4 class="col-sm-8" style="font-weight:500;">Video Url</h4>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-success btn-xs add_q pull-right"><i class="fa fa-plus"></i> Add </button>
                        </div>

                    </div>


                    <div class="files">

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
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="city" class=" control-label">Images of your Portfolio(only 20 files)</label>

                        </div>
                        <form action="{{ route('admin.saveprojectsImages') }}"  file="true" enctype ='multipart/form-data' class ='dropzone' id ='imageUpload'>
                            {{ csrf_field() }}
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
@stop
@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropzone.min.css') }}">
@endsection
@section("scripts")
    <script type="text/javascript" charset="utf8" src="{{ asset('js/dropzone.min.js') }}"></script>

    <script type="text/javascript">

        $('.generalForm').submit(function () {
            $('body').LoadingOverlay("show");
            $("#generalForm").submit();
        });

        $('.inline-editor').summernote({
            airMode: true
        });
    </script>
    <script>
        $('.summernote').summernote();
    </script>
    <script>
        Dropzone.options.imageUpload = {
            uploadMultiple: false,
            parallelUploads: 5,
            maxFilesize  :  2,
            maxFiles: 20,
            addRemoveLinks: true,
            dictRemoveFile: 'Remove',
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            removedfile: function(file,done) {
                var name = file.name;
                if (name) {
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                        }, //passes the current token of the page to image url
                        type: 'GET',
                        url: "remove/" + name,  //passes the image name to  the method handling this url to //remove file
                        dataType: 'json',
                        success: function (data) {
                            var id ="#";
                            id +=data.id;
                            console.log(id);
                            $(id).remove();


                        }
                    });
                }

                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function(file,done) {

                var data = "";
                var value = "";
                value +=done.imageName;
                data +="<input type='hidden' value='"+value+"' name='uploadedImages[]' id='"+done.id+"'>";
                $(".files").append(data);
                //localStorage.setItem("file", done.success);

            }
        };
        $(document).ready(function() {
            $(".number-validation").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl/cmd+A
                    (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+C
                    (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+X
                    (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        });

        $(".add_p").click(function () {
            $(".prices").append('<div class="col-md-8 col-md-offset-2">\n' +
                '                           <button type="button" class="btn btn-danger btn-xs pull-right cross"><i class="fa fa-times"></i></button>\n' +
                '                           <div class="form-group">\n' +
                '                                <label>Description</label>\n' +
                '                               <textarea class="form-control" name="description_b[]" required></textarea>\n' +
                '                           </div>\n' +
                '                            <div class="form-group">\n' +
                '                                    <label>Before Image</label>\n' +
                '                                    <input type="file" class="form-control" name="before[]" required>\n' +
                '                            </div>\n' +
                '                            <div class="form-group">\n' +
                '                                    <label>After Image</label>\n' +
                '                                    <input type="file" class="form-control" name="after[]" required>\n' +
                '                            </div>\n' +
                '                        </div>')
        });
        $(".add_q").click(function () {
            $(".questions").append('<div class="col-md-8 col-md-offset-2">\n' +
                '                                        <button type="button" class="btn btn-danger btn-xs pull-right cross"><i class="fa fa-times"></i></button>\n' +
                '                                        <div class="form-group">\n' +
                '                                            <label>Url</label>\n' +
                '                                            <input type="text" class="form-control" name="url[]" required>\n' +
                '                                        </div>\n' +
                '                                    </div>');
        });
        $("body").on('click','.cross',function () {
            $(this).parent().remove();
        });
    </script>
@endsection
