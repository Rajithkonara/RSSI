<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\PaperRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param PaperRepository $paper
     */
    public function __construct(PaperRepository $paper)
    {
        $this->paper = $paper;
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.home');
    }

    public function getPapers($id)
    {
        $questions = $this->paper->getQuestionsbyPaperID($id);
//        dd($questions);
        return view('site.bios', compact('questions', 'id'));
    }



    public function getBioPapers()
    {
        $bio = $this->paper->getBioPapersByName();
//        dd($bio);
        return view('site.bio',compact('bio'));
    }

}
