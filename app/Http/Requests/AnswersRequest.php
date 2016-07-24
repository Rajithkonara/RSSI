<?php

namespace App\Http\Requests;

use App\Repositories\PaperRepository;

class AnswersRequest extends Request
{
    /**
     * @var PaperRepository
     */
    private $paper;

    /**
     * AnswersRequest constructor.
     * @param PaperRepository $paper
     */
    public function __construct(PaperRepository $paper)
    {
        $this->paper = $paper;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];

//        $questions = $this->paper->getQuestionsbyPaperID($this->get('paper_id'));
//
//        foreach ($questions as $question) {
//            $rules[$question->id] = 'required';
//        }

        return $rules;
    }
}
