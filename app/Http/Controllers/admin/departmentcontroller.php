<?php

namespace App\Http\Controllers\admin;

use App\department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;





class departmentcontroller extends Controller
{
    public function index(){
        $department=department::all();
        return view('admin.department.showall',['department'=>$department]);
    }
    public function create(){

        return view('admin.department.create');
    }
    public function Edit($id){
        $department=department::find($id);
        return view('admin.department.edit',['department'=>$department]);
    }
    public function Store(Request $request){

        $this->validate($request,
            [
                'des'=>'required',
                'name'=>'required',
                'title'=>'required',
                'keywords'=>'required',

                'active'=>'required',

                'image'=>'required',


            ]);
        $test= new department();
        $test->name=$request->name;
        $test->title=$request->title;
        $test->description=$request->des;
        $test->keywords=$request->keywords;

        $test->active=$request->active;
        if($request->file('image') !=null)
        {
            $filname3=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname3);
            $test->image=$filname3;
        }

        if($test->save()){
            session()->flash("success","Success");
            return redirect('KT_Admin/department');
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



            ]);
        $test= department::find($id);
        $test->name=$request->name;
        $test->title=$request->title;
        $test->description=$request->des;

        $test->keywords=$request->keywords;

        $test->active=$request->active;
        if($request->file('image') !=null)
        {
            $filname3=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname3);
            $test->image=$filname3;
        }

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }

    public function Active(Request $request ,$id){
        $test= department::find($id);
        $test->active=0;

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }
    }
        public function NotActive(Request $request ,$id){
            $test= department::find($id);
            $test->active=1;

            if($test->save()){
                session()->flash("success","Success");
                return back();
            }
    }
    public function Delete($id){
        $department=department::find($id);
        $department->delete();
        return back();
    }
}
