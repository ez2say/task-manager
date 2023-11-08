<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    public function index(){
$tags = Tag::all();
    return view('tag', ['tags' => $tags]);
}
    public function store(TagRequest $request){
        $data=$request->validated();
        $tag=new Tag();
        $tag->name = $data['name'];
        $tag->color = $data['color'];
        $tag->save();

        return redirect()->route('tag');



    }
    //
}
