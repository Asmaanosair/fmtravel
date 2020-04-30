<?php

namespace App\Http\Controllers;

//use App\department;
use Illuminate\Http\Request;

class departmentcontroller extends Controller
{
    public function index(){

        return view('admin.department.showall');
    }
}
