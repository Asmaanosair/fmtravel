<?php

namespace App\Http\Controllers;

use App\flight;
use App\hajj;
use App\trip;
use Illuminate\Http\Request;
use DB;

class ordercontroller extends Controller
{
    function flight(){
        $flight=DB::table('flights')->orderBy('id', 'asc')->get();
        return view('admin.order.flight',['flight'=>$flight]);
    }
    function hajj(){
        $flight=DB::table('hajjs')->orderBy('id', 'asc')->get();
        return view('admin.order.hajj',['flight'=>$flight]);
    }
    function trip(){
        $flight=DB::table('trips')->orderBy('id', 'asc')->get();
        return view('admin.order.trip',['flight'=>$flight]);
    }
    public function h_update(Request $request,$id){

        $test=hajj::find($id);
        $test->active=$request->active;
        $test->des=$request->des;




        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }
    public function t_update(Request $request,$id){

        $test=trip::find($id);
        $test->active=$request->active;
        $test->des=$request->des;




        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }
    public function f_update(Request $request,$id){

        $test=flight::find($id);
        $test->active=$request->active;
        $test->des=$request->des;




        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }
}
