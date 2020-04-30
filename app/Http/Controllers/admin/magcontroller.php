<?php

namespace App\Http\Controllers\admin;

use App\mag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class magcontroller extends Controller
{
    public function index(){
        $department=mag::all();
        return view('admin.mag.showall',['department'=>$department]);
    }
    public function create(){

        return view('admin.mag.create');
    }
    public function Edit($id){
        $department=mag::find($id);
        return view('admin.mag.edit',['department'=>$department]);
    }
    public function Store(Request $request){

        $this->validate($request,
            [
                'name'=>'required',
                'name_ar'=>'required',
                'address'=>'required',
                'address_ar'=>'required',
                'phone'=>'required',
                'email'=>'required',




            ]);
        $test= new mag();

        $test->name=$request->name;
        $test->name_ar=$request->name_ar;
        $test->address=$request->address;
        $test->address_ar=$request->address_ar;
        $test->phone=$request->phone;
        $test->email=$request->email;
        $test->active=$request->active;



        if($test->save()){
            session()->flash("success","Success");
            return redirect('KT_Admin/mag');
        }

    }

    public function Update(Request $request ,$id){

        $this->validate($request,
            [
                'name'=>'required',
                'name_ar'=>'required',
                'address'=>'required',
                'address_ar'=>'required',
                'phone'=>'required',
                'email'=>'required',
                'active'=>'required',




            ]);
        $test= mag::find($id);
        $test->name=$request->name;
        $test->name_ar=$request->name_ar;
        $test->address=$request->address;
        $test->address_ar=$request->address_ar;
        $test->phone=$request->phone;
        $test->email=$request->email;
        $test->active=$request->active;


        if($test->save()){
            session()->flash("success","Success");
            return back();
        }

    }

    public function Active(Request $request ,$id){
        $test= mag::find($id);
        $test->active=0;

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }
    }
    public function NotActive(Request $request ,$id){
        $test= mag::find($id);
        $test->active=1;

        if($test->save()){
            session()->flash("success","Success");
            return back();
        }
    }
    public function Delete($id){
        $department=mag::find($id);
        $department->delete();
        return back();
    }


    public function image(Request $request){

        $lang='en';
        if($request->file('file')!=null){
            $filname1=time().".".$request->file('files')->getClientOriginalExtension();
            $request->file('files')->move('img',$filname1);
            return $filname1;

        }else{

            return view('admin.imageup',['lang'=>$lang]);
        }


    }


    public function uploadimage(Request $request){
        $this->validate($request,
            [
                'image'=>'required|mimes:jpeg,bmp,png',

            ]);

        $filname1=time().".".$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('img',$filname1);
        //  echo $filname1;
        return view('admin.imageup',['filname1'=>$filname1]);



    }
}
