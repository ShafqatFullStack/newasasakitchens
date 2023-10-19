@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Dashboard</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('tags.index') }}">Manage Tags</a></li>
                    <li class="active">Add Tag</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    @include('admin.partials._msg')
                    <h3 class="box-title m-b-0">Add Tag</h3>
                    {{ Form::open([ 'route' => 'tags.store','class'=>'form-horizontal generalForm']) }}
                    <div class="col-md-offset-3 col-md-6">
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
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Name:') !!}
                            {{ Form::text('name', null, ['class' => 'form-control','id'=>'name','placeholder'=>'Enter Name']) }}

                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>

                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-4 text-center">
                            <a href="{{ route('tags.index') }}" class="btn btn-info waves-effect waves-light
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
    <script type="text/javascript">

        $('.generalForm').submit(function () {
            $('body').LoadingOverlay("show");
            $("#generalForm").submit();
        });
    </script>
@endsection
