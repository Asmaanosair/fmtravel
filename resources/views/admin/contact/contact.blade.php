@extends('layouts.admin_lay')
@section('contact')
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
                    <h1 class="m-0 text-dark">Contact Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('KT_admin/contact')}}">Contact</a></li>
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
                        <h3 class="card-title">Contact Page Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                        <form method="post"  class="form-horizontal" action="{{url('/KT_Admin/contact')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="card-body">



                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control"  name="address" >{{$row->address}} </textarea>
                                </div>
                                @if ($errors->has('address'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('address') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Address _ar </label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control "  name="des" >{{$row->des}} </textarea>
                                </div>

                                @if ($errors->has('des'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                                @endif
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control"  name="loc" >{{$row->loc}} </textarea>
                                </div>
                                @if ($errors->has('loc'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('loc') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> email </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="email" value="{{$row->email}}" >
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Phone </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="phone" value="{{$row->phone}}" >
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> What's App Number </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="wh" value="{{$row->wh_num}}" >
                                </div>
                                @if ($errors->has('wh'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('wh') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> What's App Link </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="link" value="{{$row->wh}}" >
                                </div>
                                @if ($errors->has('link'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('link') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Facebook </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="fb" value="{{$row->fb}}" >
                                </div>
                                @if ($errors->has('fb'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('fb') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Twitter </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="tw" value="{{$row->tw}}" >
                                </div>
                                @if ($errors->has('tw'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('tw') }}</strong>
                                         </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Instagram </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="insta" value="{{$row->insta}}" >
                                </div>
                                @if ($errors->has('insta'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('insta') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> Gmail </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="gm" value="{{$row->gm}}" >
                                </div>
                                @if ($errors->has('gm'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('gm') }}</strong>
                                         </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label"> YouTube </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="yt" value="{{$row->yt}}" >
                                </div>
                                @if ($errors->has('yt'))
                                    <span class="help-block text-red">
                                            <strong>{{ $errors->first('yt') }}</strong>
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