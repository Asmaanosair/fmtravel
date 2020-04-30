<?php

namespace App\Http\Controllers\admin;

use App\section;
use App\program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sectioncontroller extends Controller
{
    public function index($id){
            $department=section::all()->where('program_id',$id);
            $program=program::find($id);
            return view('admin.section.showall',['department'=>$department,'program'=>$program]);

    }
    public function create($id){

        return view('admin.section.create',['id'=>$id]);
    }
    public function Edit($id){
        $department=section::find($id);

        return view('admin.section.edit',['department'=>$department]);
    }
    public function Store(Request $request,$id){

        $this->validate($request,
            [
                'des'=>'required',
                'name'=>'required',

                'active'=>'required',


                'main_image'=>'required',


            ]);
        $test= new section();
        $test->name=$request->name;
        $test->program_id=$id;

        $test->active=$request->active;

        $test->des=$request->des;


        if($request->file('main_image') !=null)
        {
            $filname1=time().".".$request->file('main_image')->getClientOriginalExtension();
            $request->file('main_image')->move('img',$filname1);
            $test->image=$filname1;
        }




        if($test->save()){
            session()->flash("success","Success");
            return redirect('KT_Admin/Section/'.$id);
        }

    }

    public function Update(Request $request ,$id){

        $this->validate($request,
            [
                'des'=>'required',
                'name'=>'required',

                'active'=>'required',



            ]);
        $test= section::find($id);
        $test->name=$request->name;

        $test->active=$request->active;

        $test->des=$request->des;


        if($request->file('main_image') !=null)
        {
            $filname1=time().".".$request->file('main_image')->getClientOriginalExtension();
            $request->file('main_image')->move('img',$filname1);
            $test->image=$filname1;
        }

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }

    public function Active(Request $request ,$id){
        $test= section::find($id);
        $test->active=0;

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }
    }
    public function NotActive(Request $request ,$id){
        $test= section::find($id);
        $test->active=1;

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }
    }
    public function Delete($id){
        $department=section::find($id);
        $department->delete();
        return back();
    }
}
