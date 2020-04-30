<?php

namespace App\Http\Controllers;

use App\department;
use App\gallery;
use App\mag;
use App\program;
use App\section;
use App\slider;
use App\contact;
use App\testimonial;
use App\flight;
use App;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function publish(){

        return redirect('/ar');
    }
    public function index($locale){
        App::setLocale($locale);
        $slider=slider::all();
        $programe=program::all()->where('active',1);
        $prog=program::all();
        $flight=program::all()->where('department_id',2);
        $department=department::all()->where('active',1);
        $test=testimonial::all();
        return view('site.index',['slider'=>$slider,'programe'=>$programe,'department'=>$department,'flight'=>$flight,'test'=>$test,'prog'=>$prog]);
    }

    function about($locale){

        App::setLocale($locale);

        return view('site.about');
    }

    function offers($locale){
        $prog=program::all();
        $department=department::all()->where('active',1);
        App::setLocale($locale);

        return view('site.offers',['department'=>$department,'prog'=>$prog]);
    }
    function offer($id,$locale){
        $prog=program::all();
        $dep2=department::find($id);
        $department=program::all()->where('department_id',$id);
        App::setLocale($locale);

        return view('site.offer',['department'=>$department,'prog'=>$prog,'dep2'=>$dep2]);
    }
    function Contact($locale){
        App::setLocale($locale);
       $test=contact::find(1);


        return view('site.contact',['test'=>$test]);
    }


    public function Flight(Request $request,$locale){
        $this->validate($request,
            [

                'name'=>'required',
                'phone'=>'required',
                'from'=>'required',
                'to'=>'required',
                'adult'=>'required',
                'child'=>'required',
                'ck_in'=>'required',
                'ck_out'=>'required',


            ]);
        $test= new flight();
        $test->name=$request->name;
        $test->phone=$request->phone;
        $test->from=$request->from;
        $test->to=$request->to;

        $test->adult=$request->adult;


        $test->child=$request->child;
        $test->ck_in=$request->ck_in;
        $test->ck_out=$request->ck_out;

        if($test->save()){
            session()->flash("success","سيتم التواصل فى اقرب وقت ");
            return back();
        }

    }
    public function Hajj(Request $request,$locale){
        $this->validate($request,
            [

//                'name'=>'required',
//                'phone'=>'required',
//                'level'=>'required',
//                'type'=>'required',
//                'adult'=>'required',



            ]);
        $test= new App\hajj();
        $test->name=$request->name;
        $test->phone=$request->phone;


        $test->adult=$request->adult;


        $test->level=$request->level;
        $test->type=$request->type;


        if($test->save()){
            session()->flash("success","سيتم التواصل فى اقرب وقت ");
            return back();
        }

    }


    public function Trip(Request $request,$locale){
        $this->validate($request,
            [

                'name'=>'required',
                'phone'=>'required',
                'trip'=>'required',

                'adult'=>'required',
                'child'=>'required',
                'ck_in'=>'required',
                'ck_out'=>'required',


            ]);
        $test= new App\trip();
        $test->name=$request->name;
        $test->phone=$request->phone;
        $test->trip=$request->trip;
        $test->adult=$request->adult;
        $test->child=$request->child;
        $test->ck_in=$request->ck_in;
        $test->ck_out=$request->ck_out;

        if($test->save()){
            session()->flash("success","سيتم التواصل فى اقرب وقت ");
            return back();
        }

    }
}
