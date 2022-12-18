<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    public function add()
    {
        return view('thread.create');
    }

    public function create(Request $request){
        $thread = new Thread;
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->save();
        return redirect(route("thread.add"));
    }
}
