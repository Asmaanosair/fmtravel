<?php

namespace App\Http\Controllers\admin;

use App\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactcontroller extends Controller
{
    public function index(){
        $row=contact::find(1);
        return view('admin.contact.contact',['row'=>$row]);
    }
    function update(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'fb'=>'required',
                'tw'=>'required',
                'insta'=>'required',
                'yt'=>'required',
                'address'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'link'=>'required',
                'wh'=>'required',
                'gm'=>'required',
                'loc'=>'required',



            ]);
        $test=contact::find(1);

        $test->des=$request->des;
        $test->fb=$request->fb;
        $test->tw=$request->tw;
        $test->insta=$request->insta;
        $test->yt=$request->yt;
        $test->address=$request->address;
        $test->email=$request->email;
        $test->phone=$request->phone;
        $test->wh=$request->link;
        $test->wh_num=$request->wh;
        $test->gm=$request->gm;
        $test->loc=$request->loc;




        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }
}
