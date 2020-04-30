@extends('layouts.admin_lay')
@section('order')
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
{{--                            <li class="breadcrumb-item"><a href="{{url('KT_Admin/gallery')}}">Hajj</a></li>--}}
                            <li class="breadcrumb-item active">Hajj Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content--->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Hajj DataTable </h3>
                        {{--                        <a href="{{url('/KT_Admin/gallery/Create')}}" type="button" class="btn btn-success btn-sm pull-right" style="float: right;">Add city</a>--}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Hajj </th>

                                <th>Status </th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($flight as $row)
                                <tr>



                                    <td>
                                        Name:  {{$row->name}}
                                        <br>
                                        Phone : {{$row->phone}}

                                        <br>

                                        Adult : {{$row->adult}}

                                        <br>
                                        Level : {{$row->level}}

                                        <br>
                                        Type  : {{$row->type}}





                                    </td>
                                    <td>
                                        @if($row->active==0)
                                        <p class=" btn btn-warning">جديد</p>
                                        @elseif($row->active==1)
                                            <p class=" btn btn-primary">جارى المتابعه</p>
                                        @elseif($row->active==2)
                                            <p class=" btn btn-success">تم</p>
                                        @else
                                            <p class=" btn btn-danger"> تم الالغاء</p>
                                            @endif
                                        <br>
                                        {{$row->des}}

                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-danger{{$row->id}}">
                                            <i class="fa fa-edit"></i></button>
                                        <div class="modal fade" id="modal-danger{{$row->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-success">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Status </h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post"  class="form-horizontal" action="{{url('KT_Admin/hajj/update/'.$row->id)}}" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                    <div class="modal-body">

                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label"> Status </label>
                                                            <div class="col-sm-10">
                                                                <select type="text" class="form-control" id="inputEmail3" name="active"  >

                                                                        <option value="0" selected>جديد </option>
                                                                        <option value="1">جارى المتابعه</option>

                                                                        <option value="2" >تم</option>
                                                                        <option value="3">تم الالغاء</option>

                                                                </select>
                                                            </div>
                                                            @if ($errors->has('active'))
                                                                <span class="help-block text-red">
                                            <strong>{{ $errors->first('active') }}</strong>
                                         </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Reason</label>
                                                            <div class="col-sm-10">
                                                                <textarea type="text" class="form-control" id="inputEmail3" name="des" ></textarea>
                                                            </div>
                                                            @if ($errors->has('des'))
                                                                <span class="help-block text-red">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                                                            @endif
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                        <button type="submit"  class="btn btn-outline-light">Update </button>
                                                    </div>
                                                    </form>


                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Hajj </th>
                                <th>Status </th>
                                <th>Edit</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@stop