<?php

namespace App\Repositories;


use App\Paper;

class PaperRepository
{
    /**
     * @var Paper
     */
    protected $paper;

    /**
     * PaperRepository constructor.
     * @param Paper $paper
     */
    public function __construct(Paper $paper)
    {
        $this->paper = $paper;
    }

    public function getBioPapersByName()
    {
        return $this->paper->all()->where('name','Biology');
    }


    public function getQuestionsbyPaperID($id)
    {
        return $this->paper->find($id)->with('questions.choices')->first()->questions;
    }
}