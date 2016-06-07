<?php

namespace App\Http\Controllers;

use App\Answer;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index()
    {
        $answers = Answer::all();
        return view('test/test')->
        with('answers', $answers);
    }

    public function test(Request $request)
    {
//        $option1 = $request->input('opt1');
//        $option2 = $request->input('opt2');
//        $option3 = $request->input('opt3');
//        $option4 = $request->input('opt4');
//        $option5 = $request->input('opt5');
//
//        $arr = [$option1,$option2,$option3];
//
//       if($arr[0] == 'a' && $arr[1] == 'b' && $arr[2] == 'c'){
//           echo 'done';
//       }else{echo 'error'; }

        $anwser = $request->input('arr');


//        dd($anwser);
        $ans = Answer::pluck('ans')->toArray();


        if ($ans == $anwser) {
            echo 'Correct Answer';
        } else {
            echo 'try aagain';
        }


    }
}
