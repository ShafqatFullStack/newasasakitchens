@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('posts.index') }}">Manage Posts</a></li>
                    <li class="active">Add Posts</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Add Post</h3>
                    {{ Form::open([ 'route' => 'posts.store','class'=>'form-horizontal generalForm','enctype'=>'multipart/form-data']) }}
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            {!! Form::label('Title:') !!}
                            {{ Form::text('title', null, ['class' => 'form-control','id'=>'title','placeholder'=>'Enter Name']) }}

                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                            {!! Form::label('Slug:') !!}
                            {{ Form::text('slug', null, ['class' => 'form-control','id'=>'slug','placeholder'=>'i.e: Games Support = games-support']) }}

                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('Meta Title:') !!}
                            {{ Form::text('meta_title', null, ['class' => 'form-control','id'=>'name','placeholder'=>'Meta title here']) }}

                        </div>
                        <div class="form-group ">
                            {!! Form::label('Meta Keyword:') !!}
                            {{ Form::text('meta_keyword', null, ['class' => 'form-control','id'=>'name','placeholder'=>'Meta keyword here']) }}
                        </div>
                        <div class="form-group ">
                            {!! Form::label('Meta Description:') !!}
                            {{ Form::textarea('meta_description', null, ['class' => 'form-control','id'=>'name','placeholder'=>'Meta Description here']) }}
                        </div>
                        <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                            {!! Form::label('Content:') !!}
                            {{ Form::textarea('content', null, ['class' => 'form-control summernote','id'=>'name','placeholder'=>'Content here']) }}

                            <span class="text-danger">{{ $errors->first('content') }}</span>
                        </div>
                        <div class="form-group ">
                            {!! Form::label('Categories:') !!}
                            {{ Form::select('categories[]',$categories, null, ['class' => 'no-padding kt-select2 col-lg-12 ','multiple'=>'multiple','id'=>'categories']) }}
                        </div>
                        <div class="form-group ">
                            {!! Form::label('Tags:') !!}
                            {{ Form::select('tags[]',$tags, null, ['class' => 'no-padding kt-select2 col-lg-12','multiple'=>'multiple','id'=>'tags']) }}
                        </div>
                        <div class="form-group">
                            <label>Feature Image</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" name="featured_image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <span class="text-danger">{{ $errors->first('featured_image') }}</span>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('posts.index') }}" class="btn btn-info waves-effect waves-light
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

        <!-- /.row -->
    </div>
@stop
@section("scripts")
<script>
$( "#title" ).keyup(function( event ) {
	var title = $("#title").val();
	// console.log(title);
	 title = title.toLowerCase();
	slug = title.replace(/\s/g, "-");
	$("#slug").val(slug);
})
	$('.summernote').summernote({
		 height: ($(window).height() - 300),
     onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0], editor, welEditable);
        }
});

function sendFile(file, editor, welEditable){
	
    var data = new FormData();
   
	 data.append("featured_image", file);
		data.append("_token", "{{ csrf_token() }}");
    $.ajax({
        url: '/uploadEditorImages',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        success: function(url) {
            var image = $('<img>').attr('src', url);
            $('.summernote').summernote("insertNode", image[0]);
        },
        error: function(data) {
            console.log(data);
        }
    });
}

    </script>
<script>
    // $('.summernote').summernote();
    
</script>
    <script type="text/javascript">

        $('.generalForm').submit(function () {
            $('body').LoadingOverlay("show");
            $("#generalForm").submit();
        });
    </script>
    <script>
        $('.inline-editor').summernote({
            airMode: true
        });
    </script>
    <script>
        $("#categories").select2({
                placeholder: "Select Categories",
                allowClear: true
            }
        );
    </script>
    <script>
        $("#tags").select2({
                placeholder: "Select Tags",
                allowClear: true
            }
        );
    </script>
    
@endsection
