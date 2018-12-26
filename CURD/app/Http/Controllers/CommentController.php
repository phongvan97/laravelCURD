<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
class CommentController extends Controller
{
    public function index($id){
        $pro=Product::find($id);
        $coms=Comment::all()->where('product_id',$id);
        $data=array();
        $data['coms']=$coms;
        $data['pro']=$pro;
        return view('comment.index',$data);
    }
    public function post(Request $request,$id){
        $input=$request->all();
        $comment=new Comment();
        $comment->Title=$input['title'];
        $comment->content=$input['content'];
        $comment->product_id=$id;
        $comment->save();
        return redirect('/comment/'.$id);

    }
}
