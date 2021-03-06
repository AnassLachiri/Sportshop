<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(request $req){
        $this->validate($req,[
            'product_id'=>'required',
            'user_id'=>'required',
            'content'=>'required',
            'rating'=>'required',
        ]);


        $product_id = request('product_id');
        $user_id = request('user_id');
        $content = request('content');
        $rating = request('rating');

        $comment = new Comment;
        $comment->content = $content;
        $comment->user_id = $user_id;
        $comment->product_id = $product_id;

        if($rating <= 5 && $rating >=0){
            $comment->rating = $rating;
        }else if($rating <0 ){
            $comment->rating = 0;
        }else{
            $comment->rating = 5;
        }
        $comment->save();

        return back();
    }

    public function destroy($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return back()->with('success', 'Comment deleted successfully');
    }
}
