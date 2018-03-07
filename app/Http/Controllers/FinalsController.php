<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidate;
use App\Models\Criterion;
use App\Models\Judge;
use App\Models\Round;
use App\Models\Tabulator;
use App\Models\User;

class FinalsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
    	$criterion = Criterion::where('round_id', 2)->get();
        // $candidates = Candidate::all();

        return view('finals')->withCriterion($criterion);
    }

    public function start (Request $request) {
        $getCriteria = $request->criteria_no;
        
        $criterion = Criterion::find($getCriteria);
        $candidates = Candidate::where('isWinner', 1)->get();
        // dd($criterion);
        return view('finalstart', compact('criterion', 'candidates'));
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
                "round_no"     => 2,
                "score"        => $request->candidate[$key]
            ];
        } 

        // $getOldValue = User::select('submitted_criteria')->get();
        // dd($getOldValue);
        // User::Update(["submitted_area" => $request->criteria_no]);
        Tabulator::Insert($dataset);
        \Alert::success('Successfully Submitted')->flash();
        return redirect()->to('/finals');
    }
}
