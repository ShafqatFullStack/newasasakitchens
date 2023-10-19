@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('products.index') }}">Manage Products</a></li>
                    <li class="active">Edit Category</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Edit Products -> {{ $service_item->title }}</h3>
                    <div class="row">
                        <div class="col-sm-6" style="background-color: white">
                            {{ Form::model($service_item, ['method' => 'PATCH','route' => ['products.update', $service_item->id],'class'=>'form-horizontal','role'=>'form','enctype' =>'multipart/form-data']) }}
                            {{ csrf_field() }}
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                    {!! Form::label('Title:') !!}
                                    {{ Form::text('title', null, ['class' => 'form-control','id'=>'category']) }}
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                                    {!! Form::label('Slug:') !!}
                                    {{ Form::text('slug', null, ['class' => 'form-control','placeholder'=>'e.g : Games Support = games-support']) }}
                                    <span class="text-danger">{{ $errors->first('slug') }}</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                                    {!! Form::label('Price:') !!}
                                    {{ Form::text('price', null, ['class' => 'form-control','placeholder'=>'Price here']) }}
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                                    {!! Form::label('Category:') !!}
                                    {{  Form::select('category', $categories,$service_item->category_id, ['class' => 'form-control'])  }}
                                    <span class="text-danger">{{ $errors->first('category') }}</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                    {!! Form::label('Description:') !!}
                                    {{ Form::textarea('description', null, ['class' => 'form-control summernote','placeholder'=>'Description Here','rows'=>'4']) }}
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group {{ $errors->has('features') ? 'has-error' : '' }}">
                                    {!! Form::label('Features:') !!}
                                    {{ Form::textarea('features', null, ['class' => 'form-control summernote','placeholder'=>'Price Description Here','rows'=>'4']) }}
                                    <span class="text-danger">{{ $errors->first('features') }}</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <label>Feature Image</label>
                                    <div></div>
                                    <div class="custom-file">
                                        <input type="file" name="featured_image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <span class="text-danger">{{ $errors->first('featured_image') }}</span>
                                    @if(File::exists('uploads/post/'.$service_item->image))
                                        <img src="{{asset('uploads/post/'.$service_item->image)}}"
                                             style=" width:120px;max-width:100%;margin-top:12px" alt="Image is not found."/>

                                    @endif
                                </div>
                            </div>
                            <div class="prices" style="margin-bottom: 15px;">
                                <h4 class="col-sm-8" style="font-weight:500;">Pros  / Cons</h4>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-success btn-xs add_p pull-right"><i class="fa fa-plus"></i> Add </button>
                                </div>
                                @foreach($service_item->advantages as $price)
                                    <div class="col-md-8 col-md-offset-2">
                                        <a href="{{route('remove-price',$price->id)}}" class="btn btn-danger btn-xs pull-right "><i class="fa fa-times"></i></a>
                                        <div class="form-group">
                                            <label for="">Pros </label>
                                            <input type="text" class="form-control" name="title_p[]" value="{{$price->point}}">
                                            <input type="hidden" class="form-control" name="price_id[]" value="{{$price->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Cons</label>
                                            <input type="text" class="form-control" name="status[]" value="{{$price->status}}">

                                        </div>
                                    </div>
                                @endforeach
                            </div>



                            <div class="files">

                            </div>

                            <div class="clearfix form-actions">
                                <div class="col-xs-12 text-center">
                                    <a class="btn btn-danger btn-sm" href="{{ route('products.index') }}">
                                        <i class="ace-icon fa fa-reply icon-only"></i> Back
                                    </a>
                                    {{ Form::submit('Update', ['class' => 'btn btn-sm btn btn-info', 'title'=>'Click here to Save']) }}
                                </div>
                            </div>
                            {{Form::close()}}
                            <div class="form-group"></div>
                        </div>

                        <div class="col-sm-5">
                            <div class="row">
                                @foreach($service_item->images as $image)
                                    <div class="col-sm-6">
                                        <img src="{{asset('uploads/service/'.$image->image)}}"  style="width:100%;" alt="Image is not found." />
                                        <?php $serviceId = $service_item->id; $imageId = $image->id?>
                                        <a href='{{ route('admin.delete-service-image',array($serviceId,$imageId)) }}' class='btn btn-danger btn-xs'>Remove</a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="city" class=" control-label">Images of your Service(only 5 files)</label>

                            </div>
                            <form action="{{ route('admin.saveServiceImages') }}"  file="true" enctype ='multipart/form-data' class ='dropzone' id ='imageUpload'>
                                {{ csrf_field() }}
                            </form>
                        </div>
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
    <script type="text/javascript">

        $('.generalForm').submit(function () {
            $('body').LoadingOverlay("show");
            $("#generalForm").submit();
        });
    </script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/dropzone.min.js') }}"></script>
    <script>

        Dropzone.options.imageUpload = {
            uploadMultiple: false,
            parallelUploads: 5,
            maxFilesize  :  2,
            maxFiles: 5,
            addRemoveLinks: true,
            dictRemoveFile: 'Remove',
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            removedfile: function(file,done) {
                var name = file.name;
                var APP_URL = "{{ url('/admin/service-items/remove/') }}/";
                if (name) {
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                        }, //passes the current token of the page to image url
                        type: 'GET',
                        url: APP_URL + name,  //passes the image name to  the method handling this url to //remove file
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
                '                                        <button type="button" class="btn btn-danger btn-xs pull-right cross"><i class="fa fa-times"></i></button>\n' +
                '                                        <div class="form-group">\n' +
                '                                            <label>Pros </label>\n' +
                '                                            <input type="text" class="form-control" name="title_p[]" required>\n' +
                '                                            <input type="hidden" class="form-control" value="0" name="price_id[]" required>\n' +
                '                                        </div>\n' +
                '                                        <div class="form-group">\n' +
                '                                            <label>Cons</label>\n' +
                '                                              <input type="text" class="form-control" name="status[]" required>\n' +
                '                                        </div>\n' +
                '                                    </div>')
        });

        $(".add_q").click(function () {
            $(".questions").append('<div class="col-md-8 col-md-offset-2">\n' +
                '                                        <button type="button" class="btn btn-danger btn-xs pull-right cross"><i class="fa fa-times"></i></button>\n' +
                '                                        <div class="form-group">\n' +
                '                                            <label>Title</label>\n' +
                '                                            <input type="text" class="form-control" name="title_q[]" required>\n' +
                '                                        </div>\n' +
                '                                        <div class="form-group">\n' +
                '                                            <label>Description</label>\n' +
                '                                            <textarea name="answer[]" id="" class="form-control" rows="4" required></textarea>\n' +
                '                                        </div>\n' +
                '                                    </div>');
        });

        $(".add_k").click(function () {
            $(".keypoints").append('<div class="col-md-8 col-md-offset-2">\n' +
                '                                        <button type="button" class="btn btn-danger btn-xs pull-right cross"><i class="fa fa-times"></i></button>\n' +
                '                                        <div class="form-group">\n' +
                '                                            <label>Keypoint</label>\n' +
                '                                            <input type="text" class="form-control" name="keypoint[]" required>\n' +
                '                                        </div>\n' +
                '                                    </div>');
        });
        $("body").on('click','.cross',function () {
            $(this).parent().remove();
        });
    </script>
    <script>
        $('.summernote').summernote();

    </script>
@endsection
