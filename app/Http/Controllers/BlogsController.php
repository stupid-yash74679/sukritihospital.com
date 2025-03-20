<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCommentsModel;

class BlogsController extends Controller
{
    public function store(request $request){
        BlogCommentsModel::create([
            'blog-id'=>$request->blogid,
            'parent-comment-id'=> $request->parentcommentid,
            'name'=> $request->name,
            'email'=> $request->email,
            'comment'=> $request->comment
        ]);
        return response()->json(['success' => 'Comment added successfully']);
    }
}
