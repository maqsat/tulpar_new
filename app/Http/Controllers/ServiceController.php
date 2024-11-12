<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Service::where('parent_id','!=',0)->paginate(100);
        return view('service.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last_sort = Service::orderBy('id','desc')->first();

        return view('service.create', compact('last_sort'));
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
            'parent_id' => 'required',
            'sort' => 'required',
        ]);


        Service::create([
            'title' => $request->title,
            'url' => Str::slug($request->title, '-'),
            'parent_id' => $request->parent_id,
            'sort' => $request->sort,
        ]);


        return redirect('/services')->with('status', 'Успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'parent_id' => 'required',
            'sort' => 'required',
        ]);


        $service->update([
            'title' => $request->title,
            'url' => Str::slug($request->title, '-'),
            'parent_id' => $request->parent_id,
            'sort' => $request->sort,
        ]);


        return redirect('/services')->with('status', 'Успешно добавлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
