<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = User::paginate(30);
        return view('user.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'type' => 'required',
            'name' => 'required',
            'email' => 'required',
            'job_title' => 'required',
            'text' => 'required',
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


        User::create([
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('1230000009999'),
            'job_title' => $request->job_title,
            'text' => $request->text,
            'sort' => $request->sort,
            'photo' => $request->photo,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);


        return redirect('/users')->with('status', 'Успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'email' => 'required',
            'job_title' => 'required',
            'text' => 'required',
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


        $user->update([
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('1230000009999'),
            'job_title' => $request->job_title,
            'text' => $request->text,
            'sort' => $request->sort,
            'photo' => $request->photo,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);


        return redirect('/users')->with('status', 'Успешно добавлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
