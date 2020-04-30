@extends('layouts.admin_lay')
@section('department')
    active
@stop
@section('show_department')
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
                            <li class="breadcrumb-item"><a href="{{url('KT_Admin/department')}}">Department</a></li>
                            <li class="breadcrumb-item active">Department Page</li>
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
                        <h3 class="card-title">Department DataTable </h3>
                        <a href="{{url('/KT_Admin/Department/Create')}}" type="button" class="btn btn-success btn-sm pull-right" style="float: right;">Add Department</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name </th>
                                <th>Browser</th>
                                <th>Active</th>
                                <th>Edit</th>
{{--                                <th>Delete</th>--}}
                            </tr>
                            </thead>
                            <tbody>

                        @foreach($department as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->url_name}}</td>
                                <td>
                                    @if($row->active==1)
                                        <a href="{{url('/KT_Admin/department/Active/'.$row->id)}}" type="button" class="btn btn-success btn-sm ">Active</a>
                                @else
                                        <a href="{{url('/KT_Admin/department/NotActive/'.$row->id)}}" type="button" class="btn btn-danger btn-sm ">Not Active</a>
                                    @endif
                                </td>
                                <td><a href="{{url('/KT_Admin/department/Edit/'.$row->id)}}" type="button" class="btn btn-success btn-sm "><i class="fa fa-edit"></i></a></td>
{{--                                <td><a href="{{url('/KT_Admin/department/Delete/'.$row->id)}}" type="button" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></a></td>--}}
{{--                                <td>   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$row->id}}">--}}
{{--                                        <i class="fa fa-trash"></i></button>--}}


{{--                                    <div class="modal fade" id="modal-danger{{$row->id}}">--}}
{{--                                        <div class="modal-dialog">--}}
{{--                                            <div class="modal-content bg-danger">--}}
{{--                                                <div class="modal-header">--}}
{{--                                                    <h4 class="modal-title">Delete </h4>--}}
{{--                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                        <span aria-hidden="true">&times;</span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-body">--}}
{{--                                                    <p>Are you sure   ?</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-footer justify-content-between">--}}
{{--                                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>--}}
{{--                                                    <a type="button" href="{{url('/KT_Admin/department/Delete/'.$row->id)}}" class="btn btn-outline-light">Delete </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.modal-content -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.modal-dialog -->--}}
{{--                                    </div>--}}


{{--                                </td>--}}
                            </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name </th>
                                <th>Browser</th>
                                <th>Active</th>
                                <th>Edit</th>
{{--                                <th>Delete</th>--}}
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