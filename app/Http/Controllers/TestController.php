<?php

namespace App\Http\Controllers;
use App\Answer;

use App\Paper;
use App\Repositories\PaperRepository;
use Illuminate\Http\Request;

use App\Http\Requests;


class TestController extends Controller
{
    /**
     * @var PaperRepository
     */
    protected $paper;

    /**
     * TestController constructor.
     * @param PaperRepository $paper
     */
    public function __construct(PaperRepository $paper)
    {
        $this->paper = $paper;
    }

    public function index($id)
    {
        $questions = $this->paper->getQuestionsbyPaperID($id);
        return view('paper.test', compact('questions', 'id'));
    }

    public function test(Request $request, $paper)
    {
        $questions = $this->paper->getQuestionsbyPaperID($paper);
        
        $correct_ans_count = 0;

        foreach($questions as $question) {
            $given_ans = $request->get($question->id);
            if ($given_ans === $question->correct_answer) {
                $correct_ans_count++;
            }
        }
        
        return "No of correct answers {$co}";
    }
}
