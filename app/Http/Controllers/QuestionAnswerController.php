<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = QuestionAnswer::paginate(30);
        return view('question_answers.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question_answers.create');
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
            'question' => 'required',
            'answer' => 'required',
            'sort' => 'required',
        ]);


        QuestionAnswer::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'sort' => $request->sort,
        ]);


        return redirect('/question_answers')->with('status', 'Успешно добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionAnswer  $questionAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionAnswer $questionAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionAnswer  $questionAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionAnswer $questionAnswer)
    {
        return view('question_answers.edit', compact('questionAnswer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuestionAnswer  $questionAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionAnswer $questionAnswer)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'sort' => 'required',
        ]);


        $questionAnswer->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'sort' => $request->sort,
        ]);


        return redirect('/question_answers')->with('status', 'Успешно добавлено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionAnswer  $questionAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionAnswer $questionAnswer)
    {
        //
    }
}
