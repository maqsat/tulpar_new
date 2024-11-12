<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->type)){
            $list = Post::where('type',$request->type)->paginate(30);
        }
        else $list = Post::paginate(30);

        return view('post.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'text' => 'required',
            'cost' => 'required',
            'sort' => 'required',
            'photo' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $tmp_path = date('Y')."/".date('m')."/".date('d')."/".$request->photo->getFilename().'.'.$request->photo->getClientOriginalExtension();
            $path = $request->photo->storeAs('public/images', $tmp_path);
            $request->photo = str_replace("public", "storage", $path);
        }


        Post::create([
            'type' => $request->type,
            'title' => $request->title,
            'url' => Str::slug($request->title, '-'),
            'text' => $request->text,
            'cost' => $request->cost,
            'model' => $request->model,
            'material' => $request->material,
            'color' => $request->color,
            'height' => $request->height,
            'size' => $request->size,
            'season' => $request->season,
            'protection' => $request->protection,
            'sort' => $request->sort,
            'photo' => $request->photo,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);


        return redirect('/posts')->with('status', 'Успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required',
            'text' => 'required',
            'photo' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $tmp_path = date('Y')."/".date('m')."/".date('d')."/".$request->photo->getFilename().'.'.$request->photo->getClientOriginalExtension();
            $path = $request->photo->storeAs('public/images', $tmp_path);
            $request->photo = str_replace("public", "storage", $path);
        }


        $post->update([
            'type' => $request->type,
            'title' => $request->title,
            'url' => Str::slug($request->title, '-'),
            'text' => $request->text,
            'cost' => $request->cost,
            'model' => $request->model,
            'material' => $request->material,
            'color' => $request->color,
            'height' => $request->height,
            'size' => $request->size,
            'season' => $request->season,
            'protection' => $request->protection,
            'sort' => $request->sort,
            'photo' => $request->photo,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);


        return redirect()->back()->with('status', 'Успешно изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
