@extends('layouts.admin_lay')
@section('gallery')
    active
@stop
@section('add_gallery')
    active
@stop
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">City Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('KT_Admin/gallery')}}">Cities</a></li>
                            <li class="breadcrumb-item active">Cities Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.card -->
                    <!-- Horizontal Form -->
                    <div class="card card-info col-12">
                        <div class="card-header">
                            <h3 class="card-title">Cities Page Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form method="post"  class="form-horizontal" action="{{url('KT_Admin/gallery/store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">





















                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">  City  </label>
                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" name="city"   id="inputEmail3" >
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('image') }}</strong>
                                         </span>
                                    @endif
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">  City _ar  </label>
                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" name="city_ar"   id="inputEmail3" >
                                    </div>
                                    @if ($errors->has('city_ar'))
                                        <span class="help-block text-red">
                                            <strong>{{ $errors->first('city_ar') }}</strong>
                                         </span>
                                    @endif
                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info form-control"> Submit</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@stop