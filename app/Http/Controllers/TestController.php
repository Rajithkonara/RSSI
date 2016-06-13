<?php

namespace App\Http\Controllers;
use App\Answer;

use App\Choice;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;


class TestController extends Controller
{


    public function index()
    {
        $answers = Answer::all();
        $questions =Question::all();
        $choices = Choice::all();
        return view('test/test')->
        with('answers', $answers)->
        with('questions',$questions)->
            with('choices',$choices);
    }

    public function test(Request $request)
    {

        $anwser = $request->input('arr');
       // dd($anwser);

        $answers = Answer::pluck('ans')->toArray();

        //return Count
        $matchingAnswers = Answer::whereIn('ans', $anwser)->count();
        dd($matchingAnswers);

        //BY milroy
//        $answers = Answer::all();
//        $correct_ans_count = 0;
//
//        foreach($answers as $answer) {
//            $given_ans = $request->get($answer->qno);
//            if ($given_ans === $answer->ans) {
//                $correct_ans_count++;
//            }
//        }

        ///
    }
}
