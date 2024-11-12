<?php

namespace App\Http\Controllers;

use App\Models\Reason;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Reason::paginate(30);
        return view('reason.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reason.create');
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


        Reason::create([
            'title' => $request->title,
            'url' => Str::slug($request->title, '-'),
            'text' => $request->text,
            'sort' => $request->sort,
            'photo' => $request->photo,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);


        return redirect('/reasons')->with('status', 'Успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function show(Reason $reason)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function edit(Reason $reason)
    {
        return view('reason.edit', compact('reason'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reason $reason)
    {
        $request->validate([
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


        $reason->update([
            'title' => $request->title,
            'url' => Str::slug($request->title, '-'),
            'text' => $request->text,
            'sort' => 'required',
            'sort' => $request->sort,
            'photo' => $request->photo,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);


        return redirect()->back()->with('status', 'Успешно добавлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reason $reason)
    {
        //
    }
}
