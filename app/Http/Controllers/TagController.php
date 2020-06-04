<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>'store']);
    }


    public function index()
    {
        $tags = Tag::all();
        return view('tags.index',compact('tags'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'tagName'=> 'required'

        ]);

        $tag = new Tag;
        $tag->tagName=$request->tagName;
        $tag->save();

        return redirect('/tags')->with('success','Тег добавлен!');

    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tags.show',compact('tag'));
    }


    public function edit($id)
    {
        $tag = Tag::find($id);

        return view('tags.edit',compact('tag'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tagName'=> 'required'

        ]);

        $tag= Tag::find($id);
        $tag->tagName=$request->tagName;
        $tag->save();

        return redirect('/tags');
    }


    public function destroy($id)
    {
        $tag= Tag::find($id);
        $tag->delete();
        return redirect('/tags');
    }
}
