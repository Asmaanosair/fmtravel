<?php

namespace App\Http\Controllers\admin;

use App\static_image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class staticcontroller extends Controller
{
    public function index(){
        $row=static_image::find(1);
        return view('admin.static.static',['row'=>$row]);
    }
    function update(Request $request){

        $this->validate($request,
            [
                'c_title'=>'required',
                't_title'=>'required',
                'g_title'=>'required',
                'c_des'=>'required',
                't_des'=>'required',
                'g_des'=>'required',

                'c_image1'=>'mimes:jpeg,bmp,png',
                't_image2'=>'mimes:jpeg,bmp,png',
                'g_image2'=>'mimes:jpeg,bmp,png',


            ]);
        $test=static_image::find(1);

        $test->c_title=$request->c_title;
        $test->t_title=$request->t_title;
        $test->g_title=$request->g_title;
        $test->c_des=$request->c_des;
        $test->t_des=$request->t_des;
        $test->g_des=$request->g_des;



        if($request->file('c_image1') !=null)
        {
            $filname2=time().".".$request->file('c_image1')->getClientOriginalExtension();
            $request->file('c_image1')->move('img',$filname2);
            $test->c_img1=$filname2;
        }
        if($request->file('t_image2') !=null)
        {
            $filname3=time().".".$request->file('t_image2')->getClientOriginalExtension();
            $request->file('t_image2')->move('img',$filname3);
            $test->t_img2=$filname3;
        }
       if($request->file('g_image2') !=null)
        {
            $filname5=time().".".$request->file('g_image2')->getClientOriginalExtension();
            $request->file('g_image2')->move('img',$filname5);
            $test->g_img2=$filname5;
        }


        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }
}
