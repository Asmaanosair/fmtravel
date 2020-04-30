<?php

namespace App\Http\Controllers\admin;

use App\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class slidercontroller extends Controller
{
    public function index(){
        $department=slider::all();
        return view('admin.slider.showall',['department'=>$department]);
    }
    public function create(){

        return view('admin.slider.create');
    }
    public function Edit($id){
        $department=slider::find($id);
        return view('admin.slider.edit',['department'=>$department]);
    }
    public function Store(Request $request){

        $this->validate($request,
            [
                'des'=>'required',

                'title'=>'required',

                'des_ar'=>'required',

                'title_ar'=>'required',
                'image'=>'required',



            ]);
        $test= new slider();

        $test->title=$request->title;
        $test->des=$request->des;

        $test->title_ar=$request->title_ar;
        $test->des_ar=$request->des_ar;
        if($request->file('image') !=null)
        {
            $filname3=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname3);
            $test->image=$filname3;
        }

        if($test->save()){
            session()->flash("success","Success");
            return redirect('KT_Admin/slider');
        }

    }

    public function Update(Request $request ,$id){

        $this->validate($request,
            [
                'des'=>'required',

                'title'=>'required',
                'des_ar'=>'required',

                'title_ar'=>'required',



            ]);
        $test= slider::find($id);

        $test->title=$request->title;
        $test->des=$request->des;
        $test->title_ar=$request->title_ar;
        $test->des_ar=$request->des_ar;
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


    public function Delete($id){
        $department=slider::find($id);
        $department->delete();
        return back();
    }
}
