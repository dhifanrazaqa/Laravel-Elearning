<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\StudentAnswer;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index($course, $quiz) {
        return view('quiz.index', [
            'course' => $course,
            'info' => Quiz::where('slug', $quiz)->first(),
        ]);
    }
    public function show($course, $quiz) {
        $quizz = Quiz::where('slug', $quiz)->first();
        $questions = $quizz->question()->paginate(1);
        $answer = Answer::where('question_id', $questions[0]->id)->get();
        $studentAns = StudentAnswer::where([
            ['question_id', $questions[0]->id],
            ['no_induk', '2210511001']
        ])->first();
        return view('quiz.show', [
            'course' => $course,
            'quiz' => $quiz,
            'info' => $quizz,
            'question' => $questions,
            'answer' => $answer,
            'studentAns' => $studentAns
        ]);
    }
    public function store(Request $request, $course, $quiz) {
        // dd($request->path());
        if ($request->type == 'post' && $request->answer != null) {
            StudentAnswer::create([
                'no_induk' => '2210511001',
                'quiz_id' => $request->quiz,
                'question_id' => $request->question,
                'answer_id' => $request->answer,
                'is_correct' => mt_rand(0,1)
            ]);
        }
        else {
            StudentAnswer::where([
                ['question_id', $request->question],
                ['no_induk', '2210511001']
            ])->update(['answer_id'=> $request->answer]);
        }
        if (!empty($request->query())) {
            if ($request->nextType == "next")
                return redirect($request->url() . "?page=" . $request->query()["page"] + 1);
            elseif ($request->nextType == "previous")
                return redirect($request->url() . "?page=" . $request->query()["page"] - 1);
            else
                return redirect(str_replace('/attempt', '/finish', $request->path()));
        } else {
                return redirect($request->url() . "?page=2");
        }
    }
    public function submit(Request $request, $course, $quiz) {
        $quizz = Quiz::where('slug', $quiz)->first();
        $studentAns = StudentAnswer::where([
            ['quiz_id', $quizz->id],
            ['no_induk', '2210511001']
        ]);
        $count = $studentAns->get()->count();
        $countCorrect = $studentAns->where('is_correct', 1)->get()->count();
        $grade = ($countCorrect / $count) * 100;
        // dd($request->nextType);
        return view('quiz.finish', [
            'course' => $course,
            'quiz' => $quiz,
            'info' => $quizz,
            'studentAns' => $studentAns,
            'grade' => $grade
        ]);
    }
}
