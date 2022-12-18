<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use Auth;

class ThreadController extends Controller
{

    public function index(){
        return view("thread.index", ["threads" => Thread::all()]);
    }

    public function add()
    {
        return view('thread.create');
    }

    public function create(Request $request){
        $thread = new Thread;
        $thread->user_id = Auth::id();
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->save();
        return redirect(route("thread.index"));
    }
}
