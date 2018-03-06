<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidate;
use App\Models\Criterion;
use App\Models\Judge;
use App\Models\Round;
use App\Models\Tabulator;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $criterion = Criterion::get()->all();
        $candidates = Candidate::get()->all();
        return view('home')->withCriterion($criterion)->withCandidates($candidates);
    }

    public function submit (Request $request) {
        // dd($request);
        $tabulator = new Tabulator;
        
        $dataset = [];

        foreach ($request->candidate as $key => $value) {
            $dataset[] = [
                "judge_no"     => $request->judge_no,
                "criteria_no"  => $request->criteria_no,
                "candidate_no" => $key,
                "round_no"     => 1,
                "score"        => $request->candidate[$key]
            ];
        } 

        // $getOldValue = User::select('submitted_criteria')->get();
        // dd($getOldValue);
        // User::Update(["submitted_area" => $request->criteria_no]);
        Tabulator::Insert($dataset);
        \Alert::success('Successfully Submitted')->flash();
        return redirect()->to('/home');
    }
}
