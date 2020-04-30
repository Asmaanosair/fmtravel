<?php

namespace App\Http\Controllers\admin;

use App\department;
use App\program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class programcontrpller extends Controller
{
    public function index(){
        $department=program::all();
        return view('admin.program.showall',['department'=>$department]);
    }
    public function create(){
        $department=department::all();
        return view('admin.program.create',['department'=>$department]);
    }
    public function Edit($id){
        $department=program::find($id);
        $department_id=program::find($id)->department;
        $department_all=department::all();
        return view('admin.program.edit',['department'=>$department,'department_id'=>$department_id,'department_all'=>$department_all]);
    }
    public function Store(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'name'=>'required',
                'title'=>'required',
                'keywords'=>'required',

                'active'=>'required',


                's_des'=>'required',
                'description'=>'required',

                'price'=>'required',

                'department'=>'required',

                'main_image'=>'required',


            ]);
        $test= new program();
        $test->name=$request->name;
        $test->title=$request->title;
        $test->description=$request->description;
        $test->keywords=$request->keywords;

        $test->active=$request->active;


        $test->s_des=$request->s_des;
        $test->des=$request->des;
        $test->price=$request->price;
        $test->offer=$request->offer;

        $test->department_id=$request->department;

        if($request->file('main_image') !=null)
        {
            $filname1=time().".".$request->file('main_image')->getClientOriginalExtension();
            $request->file('main_image')->move('img',$filname1);
            $test->main_image=$filname1;
        }




        if($test->save()){
            session()->flash("success","Success");
            return redirect('KT_Admin/Program');
        }

    }

    public function Update(Request $request ,$id){

        $this->validate($request,
            [
                'des'=>'required',
                'name'=>'required',
                'title'=>'required',
                'keywords'=>'required',

                'active'=>'required',


                's_des'=>'required',
                'description'=>'required',

                'price'=>'required',

                'department'=>'required',




            ]);
        $test= program::find($id);
        $test->name=$request->name;
        $test->title=$request->title;
        $test->description=$request->description;
        $test->keywords=$request->keywords;

        $test->active=$request->active;


        $test->s_des=$request->s_des;
        $test->des=$request->des;
        $test->price=$request->price;
        $test->offer=$request->offer;

        $test->department_id=$request->department;

        if($request->file('main_image') !=null)
        {
            $filname1=time().".".$request->file('main_image')->getClientOriginalExtension();
            $request->file('main_image')->move('img',$filname1);
            $test->main_image=$filname1;
        }



        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }

    public function Active(Request $request ,$id){
        $test= program::find($id);
        $test->active=0;

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }
    }
    public function NotActive(Request $request ,$id){
        $test= program::find($id);
        $test->active=1;

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }
    }
    public function Delete($id){
        $department=program::find($id);
        $department->delete();
        return back();
    }
}
