<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use Auth;

class PostController extends Controller
{
    public function create(Request $request){
        $post = new Post;
        $post->user_id = Auth::id();
        $post->fill($request->all())->save();
        return redirect()->back();
    }
}
