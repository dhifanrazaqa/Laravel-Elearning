<?php

namespace App\Http\Controllers;

use App\Models\StudentAnswer;
use App\Http\Requests\StoreStudentAnswerRequest;
use App\Http\Requests\UpdateStudentAnswerRequest;

class StudentAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentAnswer  $studentAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(StudentAnswer $studentAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentAnswer  $studentAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentAnswer $studentAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentAnswerRequest  $request
     * @param  \App\Models\StudentAnswer  $studentAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentAnswerRequest $request, StudentAnswer $studentAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentAnswer  $studentAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentAnswer $studentAnswer)
    {
        //
    }
}
