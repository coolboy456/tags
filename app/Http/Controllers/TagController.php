<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TagPost;


class TagController extends Controller
{
    public function index()
    {
        $tags = TagPost::all();
        return view('tag',compact('tags'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title_name' => 'required',
            'content' => 'required',
            'tags' => 'required',
        ]);

        $input = $request->all();

        $tags = explode(",", $request->tags);

        $post = TagPost::create($input);

        $post->tag($tags);

        return back()->with('success','Tags added to database.');
    }
}
