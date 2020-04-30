<?php

namespace App\Http\Controllers\admin;

use App\gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gallerycontroller extends Controller
{
    public function index(){
        $department=gallery::all();
        return view('admin.gallery.showall',['department'=>$department]);
    }
    public function create(){

        return view('admin.gallery.create');
    }

    public function Store(Request $request){

        $this->validate($request,
            [

                'city'=>'required',
                'city_ar'=>'required',



            ]);
        $test= new gallery();


        $test->city=$request->city;
        $test->city_ar=$request->city_ar;

        if($test->save()){
            session()->flash("success","Success");
            return redirect('KT_Admin/gallery');
        }

    }




    public function Delete($id){
        $department=gallery::find($id);
        $department->delete();
        return back();
    }
}
