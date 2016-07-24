<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswersRequest;
use App\Repositories\PaperRepository;
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

    public function test(AnswersRequest $request, $paper)
    {
        $questions = $this->paper->getQuestionsbyPaperID($paper);
        $correct_ans_count = 0;

        foreach($questions as $question) {
            $given_ans = $request->get($question->id);
            if ($given_ans === $question->correct_answer) {
                $correct_ans_count++;
            }
        }

    //Bug #1 0 field required
        return "No of correct answers {$correct_ans_count}";
    }
}
