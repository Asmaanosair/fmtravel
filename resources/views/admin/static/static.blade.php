@extends('layouts.admin_lay')
@section('home')
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
                    <h1 class="m-0 text-dark">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('KT_admin/static')}}">Home</a></li>
                        <li class="breadcrumb-item active">Home Page</li>
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
                        <h3 class="card-title">Home Page Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                        <form method="post"  class="form-horizontal" action="{{url('/KT_Admin/static')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Title</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control "  name="c_title" >{{$row->c_title}} </textarea>
                                </div>

                                @if ($errors->has('c_title'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('c_title') }}</strong>
                                         </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Description </label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control"  name="c_des" >{{$row->c_des}} </textarea>
                                </div>
                                @if ($errors->has('c_des'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('c_des') }}</strong>
                                         </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Gallery Title</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control "  name="g_title" >{{$row->g_title}} </textarea>
                                </div>

                                @if ($errors->has('g_title'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('g_title') }}</strong>
                                         </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Gallery Description </label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control"  name="g_des" >{{$row->g_des}} </textarea>
                                </div>
                                @if ($errors->has('g_des'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('g_des') }}</strong>
                                         </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Testimonial Title</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control "  name="t_title" >{{$row->t_title}} </textarea>
                                </div>

                                @if ($errors->has('t_title'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('t_title') }}</strong>
                                         </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Testimonial Description </label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control"  name="t_des" >{{$row->t_des}} </textarea>
                                </div>
                                @if ($errors->has('t_des'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('t_des') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Contact Image  </label>
                                <div class="col-sm-10">
                                    @if($row->c_img1==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->c_img1)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" name="c_image1"   id="inputEmail3" >
                                </div>
                                @if ($errors->has('c_image1'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('c_image1') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Testimonial Image  </label>
                                <div class="col-sm-10">
                                    @if($row->t_img2==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->t_img2)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="t_image2" >
                                </div>
                                @if ($errors->has('t_image2'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('t_image2') }}</strong>
                                         </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Gallrery Image  </label>
                                <div class="col-sm-10">
                                    @if($row->g_img2==null)
                                        <span class="help-block text-red">
                                            <strong>Please Uploade Image</strong>
                                         </span>
                                    @else
                                        <img src="{{asset('img/'.$row->g_img2)}}" width="100px"height="100px">
                                    @endif
                                    <input type="file" class="form-control" id="inputEmail3" name="g_image2" >
                                </div>
                                @if ($errors->has('g_image2'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('g_image2') }}</strong>
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