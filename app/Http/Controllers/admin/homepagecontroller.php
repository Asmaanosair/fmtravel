<?php

namespace App\Http\Controllers\admin;

use App\homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homepagecontroller extends Controller
{
public function index(){
    $row=homepage::find(1);
    return view('admin.home.about',['row'=>$row]);
}
    function update(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'about'=>'required',
                'about_ar'=>'required',

                'keywords'=>'required',
                'footer'=>'required',
                'footer_ar'=>'required',
                'site_ar'=>'required',
                'site'=>'required',
                'about_iamge1'=>'mimes:jpeg,bmp,png',


            ]);
        $test=homepage::find(1);

        $test->about=$request->about;
        $test->about_ar=$request->about_ar;

        $test->keywords=$request->keywords;
        $test->description=$request->des;
        $test->footer_des=$request->footer;
        $test->footer_des_ar=$request->footer_ar;
        $test->site=$request->site;
        $test->site_ar=$request->site_ar;


        if($request->file('about_iamge1') !=null)
        {
            $filname1=time().".".$request->file('about_iamge1')->getClientOriginalExtension();
            $request->file('about_iamge1')->move('img',$filname1);
            $test->about_img=$filname1;
        }


        if($request->file('logo') !=null)
        {
            $filname6=time().".".$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move('img',$filname6);
            $test->logo=$filname6;
        }



        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }
}
