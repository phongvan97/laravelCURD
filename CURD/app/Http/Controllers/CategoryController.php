<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $cats=Category::all();
        $data=array();
        $data['cats']=$cats;
        return view('category.index',$data);
    }
    public function create(){
        return view('category.create');
    }
    public function edit($id){
        $cat=Category::find($id);
        $data=array();
        $data['cat']=$cat;
        return view('category.edit',$data);
    }
    public function delete($id){
        $cat=Category::find($id);
        $data=array();
        $data['cat']=$cat;
        return view('category.delete',$data);
    }
    public function destroy($id){
        $cat=Category::find($id);
        $cat->delete();
        return redirect('/');
    }
    public function update(Request $request,$id){
        $input=$request->all();
        $cat=Category::find($id);
        $cat['Name']=$input['Name'];
        $cat->save();
        return redirect('/');
    }
    public function store(Request $request){
        $input=$request->all();
        $cat=new Category();
        $cat->Name=$input['Name'];
        $cat->save();
        return redirect("/");
    }
}
