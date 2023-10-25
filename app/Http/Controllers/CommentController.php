<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        $data=$request->validated();
        $comment= new \App\Models\Comment();
        $comment->comment = $data['comment'];
        $comment->save();

        $comment->tasks()->attach($data['select']);

        return redirect()->route('tasks.list');
//        Алгоритм сохранения комментария к задаче
    }
    //
}
