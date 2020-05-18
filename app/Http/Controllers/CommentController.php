<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(){
        $product_id = request('product_id');
        $user_id = request('user_id');
        $content = request('content');

        $comment = new Comment;
        $comment->content = $content;
        $comment->user_id = $user_id;
        $comment->product_id = $product_id;
        $comment->save();

        return back();
    }
}
