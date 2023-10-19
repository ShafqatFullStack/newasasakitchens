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
                    {{ Form::model($work, ['method' => 'PATCH','route' => ['projects.update', $work->id],'class'=>'form-horizontal generalForm','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="title" class="form-control @error('tile') is-invalid @enderror"
                                   required autocomplete="name" value="{{ $work->title}}" autofocus id="name">
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
                                    autocomplete="meta_title" value="{{ $work->meta_title}}" autofocus id="name">
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
                                    autocomplete="video_url" value="{{ $work->video_url}}" autofocus id="name">
                            @error('video_url')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Meta Keyword</label>
                        <div class="col-sm-4">
                            <textarea name="meta_keyword" class="form-control  @error('meta_keyword') is-invalid @enderror" id="" cols="30" rows="10">{{ $work->meta_keyword}}</textarea>
                            @error('meta_keyword')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Meta Description</label>
                        <div class="col-sm-4">
                            <textarea name="meta_description" class="form-control summernote  @error('meta_description') is-invalid @enderror" id="" cols="30" rows="10">{{ $work->meta_description}}</textarea>
                            @error('meta_description')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    {{--                    <div class="form-group">--}}
                    {{--                        <label for="name" class="col-sm-3 control-label">Url</label>--}}
                    {{--                        <div class="col-sm-4">--}}
                    {{--                            <input type="text" name="url" class="form-control @error('url') is-invalid @enderror"--}}
                    {{--                                   required autocomplete="name" value="{{ old('url')}}" autofocus id="name">--}}
                    {{--                            @error('url')--}}
                    {{--                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>--}}
                    {{--                            @enderror--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                        <div class="col-sm-3">
                            {!! Form::label('Slug:') !!}
                        </div>
                        <div class="col-sm-4">
                            {{ Form::text('slug', null, ['class' => 'form-control','id'=>'name','placeholder'=>'i.e: Games Support = games-support']) }}
                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('ord') ? 'has-error' : '' }}">
                        <div class="col-sm-3">
                            {!! Form::label('Order:') !!}
                        </div>
                        <div class="col-sm-4">
                            {{ Form::number('ord', null, ['class' => 'form-control','id'=>'name','placeholder'=>'Order ']) }}
                            <span class="text-danger">{{ $errors->first('ord') }}</span>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                        <div class="col-sm-3">
                            {!! Form::label('Category:') !!}
                        </div>
                        <div class="col-sm-4">
                            {!! Form::select('category',$categories, $work->category_id, ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-4">
                            <textarea name="description" class="form-control summernote  @error('description') is-invalid @enderror" id="" cols="30" rows="10">{{ $work->description}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Feaures</label>
                        <div class="col-sm-4">
                            <textarea name="features" class="form-control summernote @error('features') is-invalid @enderror" id="" cols="30" rows="10">{{ $work->features}}</textarea>
                            @error('features')
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
                                <img src="{{asset("uploads/projects/$work->image")}}" width="150" alt="">
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Description before & After  </label>
                        <div class="col-sm-4">
                            <textarea name="description_before" class="form-control summernote  @error('description_before') is-invalid @enderror" id="" cols="30" rows="10">{{ $work->before_description }}</textarea>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
					<?php 
// dd($before_after);
for ($i = 1; $i <=6 ; $i++){
						// dd($before_after[$i]['description']);
						
						
					?>
					<div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Befor & After Section {{ $i }}</label>
                        <div class="col-sm-4">
							<input type="text" class="form-control"value="					@if(isset($before_after[$i-1]['heading'])){{ $before_after[$i-1]['heading'] }}  @endif" name="section_head_{{ $i }}">	
					<textarea name="section_description_<?php echo  $i ?>" class="form-control summernote @error('section_description_{{ $i }}') is-invalid @enderror" id="" cols="30" rows="10">
					@if(isset($before_after[$i-1]['description']))
					{{ $before_after[$i-1]['description'] }}  
					@endif
					</textarea>
                            @error("section_description_$i")
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="clearfix"></div>
                        </div>
						@php  
						$before =  "";
						$after =  "";
						@endphp
						@if(isset($before_after[$i-1]['before']))
					
					
						<?php $before = $before_after[$i-1]['before'];
						
						?>
						@endif
						@if(isset($before_after[$i-1]['after']))
					
					
						<?php 
							$after = $before_after[$i-1]['after'];
						?>
						@endif
						<div class="prices col-sm-3" style="margin-bottom: 15px;">
                        <h4 class="col-sm-8" style="font-weight:500;">Before / After Images</h4>
                        <input type="file" name="section_before_{{ $i }}"  class="form-control">
						 <div class="clearfix"></div>
                            <div class="form-group m-t-15">
							
                                <img src="{{asset("uploads/projects/before/$before")}}" width="150" alt="">
                            </div>
                        <input type="file" name="section_after_{{ $i }}"  class="form-control">
							<div class="clearfix"></div>
                            <div class="form-group m-t-15">
                                <img src="{{asset("uploads/projects/before/$after")}}" width="150" alt="">
                            </div>
                    </div>
                    </div>
					<?php } ?>	

                    <div class="prices" style="margin-bottom: 15px;">
                        <h4 class="col-sm-8" style="font-weight:500;">Before / After Images</h4>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-success btn-xs add_p pull-right"><i class="fa fa-plus"></i> Add </button>
                        </div>
						@if(isset($work->befores))
                        @foreach($work->befores as $before)
                        <div class="col-md-8 col-md-offset-2">
                            <a href="{{route("remove-before",$before->id)}}" class="btn btn-danger btn-xs pull-right "><i class="fa fa-times"></i></a>
                            <div class="form-group">
                                    <label>Description</label>
                                   <textarea class="form-control summernote" name="description_b[]" required>{{$before->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Before Image</label>
                                <input type="file" class="form-control" name="before[]" >
                                <div class="form-group m-t-15">
                                    <img src="{{asset("uploads/works/before/$before->before")}}" width="150" alt="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>After Image</label>
                                <input type="file" class="form-control" name="after[]" >
                                <input type="hidden" class="form-control" value="{{$before->id}}" name="before_id[]" >
                                <div class="form-group m-t-15">
                                    <img src="{{asset("uploads/works/before/$before->after")}}" width="150" alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
						@endif
                    </div>
                    <div class="questions" style="margin-bottom: 15px;">
                        <h4 class="col-sm-8" style="font-weight:500;">Video Url</h4>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-success btn-xs add_q pull-right"><i class="fa fa-plus"></i> Add </button>
                        </div>
						@if(isset($work->videos))
                        @foreach ($work->videos as $item)
                        <div class="col-md-8 col-md-offset-2">
                            <button type="button" class="btn btn-danger btn-xs pull-right cross"><i class="fa fa-times"></i></button>
                            <div class="form-group">
                                <label>Url</label>
                            <input type="text" class="form-control" value="{{$item->url}}" name="url[]" required>
                            </div>
                        </div>
                        @endforeach
						@endif
                    
                        
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
                        <div class="row">
						
						@if(isset($images))
                            @foreach($images as $image)
							
                                <div class="col-sm-6">
                                    <img src="{{asset('uploads/projects/'.$image->image)}}"  style="width:100%;" alt="Image is not found." />
                                    <?php $serviceId = $work->id; $imageId = $image->id?>
                                    <a href='{{ route('admin.delete-project-image',array($serviceId,$imageId)) }}' class='btn btn-danger btn-xs'>Remove</a>
                                </div>
                            @endforeach
							@endif
                    
                        </div>

                        <div class="form-group">
                            <label for="city" class=" control-label">Images of your Service(only 20 files)</label>

                        </div>
                        <form action="{{ route('admin.saveprojectsImages') }}"  file="true" enctype ='multipart/form-data' class ='dropzone' id ='imageUpload'>
						<input type="hidden" name="idimage" value="{{ $work->id }}">
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
                '                                    <input type="hidden" class="form-control" value="0" name="before_id[]" >\n' +
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
