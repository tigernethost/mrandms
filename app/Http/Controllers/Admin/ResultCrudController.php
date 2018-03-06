<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Support\Facades\DB;
// VALIDATION: change the requests to match your own file names if you need form validation
// use App\Http\Requests\JudgeRequest as StoreRequest;
// use App\Http\Requests\JudgeRequest as UpdateRequest;
use App\Models\Candidate;
use App\Models\Judge;
use App\Models\Tabulator;
use App\User;

class ResultCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Candidate');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/result');
        $this->crud->setEntityNameStrings('result', 'results');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();
        $this->crud->setListView('custom.result');
        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        
        // $this->crud->removeButton('create');
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->denyAccess(['create', 'update', 'delete']);
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }


    public function casualwear() {

        $newArray = [];

        $judges = User::where('judgeno','>',0)->get();
        // $candidates = Candidate::select('candidates.*', 'tabulator.*')->distinct('tabulator.*')->join('tabulator', 'candidates.candidate_no', '=', 'tabulator.candidate_no')->where('tabulator.criteria_no', '=', '1')->get();
        $candidates = DB::select('SELECT candidates.*, tabulator.score, tabulator.judge_no, tabulator.criteria_no, tabulator.candidate_no, tabulator.round_no FROM candidates INNER JOIN tabulator ON tabulator.candidate_no = candidates.candidate_no AND tabulator.criteria_no = 1');

        $jid = 1;
        // LOOP ALL JUDGES
        $getTotalCandidates = Candidate::get()->all();
        
        foreach ($getTotalCandidates as $key => $value) {
            // var_dump($getTotalCandidates[$key]->firstname);
            $getVote = DB::select('SELECT tabulator.*, candidates.firstname FROM tabulator INNER JOIN candidates ON tabulator.candidate_no = candidates.candidate_no AND candidates.candidate_no = ' . $getTotalCandidates[$key]->candidate_no . ' AND tabulator.criteria_no = 1');

            $total = 0;
            $score = 0;
            foreach ($getVote as $key2 => $value) {
                if((int)$value->score >= 4) {
                    $score += (int)$value->score;
                } else {
                    $score += 4;
                }
                // $score += (int)$value->score;
                $total = $score / count($judges);
            }
            // dd(number_format($total, 2, '.', ' '));

            // var_dump($getTotalCandidates[$key]->firstname);
            $a  = [
                "id" => $getTotalCandidates[$key]->id,
                "firstname" => $getTotalCandidates[$key]->firstname,
                "lastname" => $getTotalCandidates[$key]->lastname,
                "gender" => $getTotalCandidates[$key]->gender,
                "department" => $getTotalCandidates[$key]->department,
                "candidate_no" => $getTotalCandidates[$key]->candidate_no,
                "vote" => $getVote,
                "total_avg" => number_format($total, 2, '.', ' ')
            ];


            array_push($newArray, $a);

        }   
        $candidates = $newArray;

        

        // dd($newArray);
        return view('custom.casualwear',compact('judges','candidates'));
    }




    public function CreativeHeadDress() {

        $newArray = [];

       $judges = User::where('judgeno','>',0)->get();

        $candidates = DB::select('SELECT candidates.*, tabulator.score, tabulator.judge_no, tabulator.criteria_no, tabulator.candidate_no, tabulator.round_no FROM candidates INNER JOIN tabulator ON tabulator.candidate_no = candidates.candidate_no AND tabulator.criteria_no = 2');

        $getTotalCandidates = Candidate::get()->all();
        
        foreach ($getTotalCandidates as $key => $value) {
            // var_dump($getTotalCandidates[$key]->firstname);
            $getVote = DB::select('SELECT tabulator.*, candidates.firstname FROM tabulator INNER JOIN candidates ON tabulator.candidate_no = candidates.candidate_no AND candidates.candidate_no = ' . $getTotalCandidates[$key]->candidate_no . ' AND tabulator.criteria_no = 2');

            $total = 0;
            $score = 0;
            foreach ($getVote as $key2 => $value) {
                if((int)$value->score >= 4) {
                    $score += (int)$value->score;
                } else {
                    $score += 4;
                }
                // $score += (int)$value->score;
                $total = $score / count($judges);
            }
            // dd(number_format($total, 2, '.', ' '));

            // var_dump($getTotalCandidates[$key]->firstname);
            $a  = [
                "id" => $getTotalCandidates[$key]->id,
                "firstname" => $getTotalCandidates[$key]->firstname,
                "lastname" => $getTotalCandidates[$key]->lastname,
                "gender" => $getTotalCandidates[$key]->gender,
                "department" => $getTotalCandidates[$key]->department,
                "candidate_no" => $getTotalCandidates[$key]->candidate_no,
                "vote" => $getVote,
                "total_avg" => number_format($total, 2, '.', ' ')
            ];
            array_push($newArray, $a);
          } 

           $candidates = $newArray;
        // dd($newArray);
        return view('custom.creativeheaddress',compact('judges','candidates'));
    }


    public function physique() {

        $newArray = [];

        $judges = Judge::get()->all();

        $candidates = DB::select('SELECT candidates.*, tabulator.score, tabulator.judge_no, tabulator.criteria_no, tabulator.candidate_no, tabulator.round_no FROM candidates INNER JOIN tabulator ON tabulator.candidate_no = candidates.candidate_no AND tabulator.criteria_no = 3');

        $getTotalCandidates = Candidate::get()->all();
        
        foreach ($getTotalCandidates as $key => $value) {
            // var_dump($getTotalCandidates[$key]->firstname);
            $getVote = DB::select('SELECT tabulator.*, candidates.firstname FROM tabulator INNER JOIN candidates ON tabulator.candidate_no = candidates.candidate_no AND candidates.candidate_no = ' . $getTotalCandidates[$key]->candidate_no . ' AND tabulator.criteria_no = 3');

            $total = 0;
            $score = 0;
            foreach ($getVote as $key2 => $value) {
                if((int)$value->score >= 7) {
                    $score += (int)$value->score;
                } else {
                    $score += 4;
                }
                // $score += (int)$value->score;
                $total = $score / count($judges);
            }
            // dd(number_format($total, 2, '.', ' '));

            // var_dump($getTotalCandidates[$key]->firstname);
            $a  = [
                "id" => $getTotalCandidates[$key]->id,
                "firstname" => $getTotalCandidates[$key]->firstname,
                "lastname" => $getTotalCandidates[$key]->lastname,
                "gender" => $getTotalCandidates[$key]->gender,
                "department" => $getTotalCandidates[$key]->department,
                "candidate_no" => $getTotalCandidates[$key]->candidate_no,
                "vote" => $getVote,
                "total_avg" => number_format($total, 2, '.', ' ')
            ];
            array_push($newArray, $a);
        }   
        // dd($newArray);

         $candidates = $newArray;
        return view('custom.creativeheaddress',compact('judges','candidates'));
    }


    public function swimwear() {

        $newArray = [];

        $judges = User::where('judgeno','>',0)->get();

        $candidates = DB::select('SELECT candidates.*, tabulator.score, tabulator.judge_no, tabulator.criteria_no, tabulator.candidate_no, tabulator.round_no FROM candidates INNER JOIN tabulator ON tabulator.candidate_no = candidates.candidate_no AND tabulator.criteria_no = 4');

        $getTotalCandidates = Candidate::get()->all();
        
        foreach ($getTotalCandidates as $key => $value) {
            // var_dump($getTotalCandidates[$key]->firstname);
            $getVote = DB::select('SELECT tabulator.*, candidates.firstname FROM tabulator INNER JOIN candidates ON tabulator.candidate_no = candidates.candidate_no AND candidates.candidate_no = ' . $getTotalCandidates[$key]->candidate_no . ' AND tabulator.criteria_no = 4');

            $total = 0;
            $score = 0;
            foreach ($getVote as $key2 => $value) {
                if((int)$value->score >= 4) {
                    $score += (int)$value->score;
                } else {
                    $score += 4;
                }
                // $score += (int)$value->score;
                $total = $score / count($judges);
            }
            // dd(number_format($total, 2, '.', ' '));

            // var_dump($getTotalCandidates[$key]->firstname);
            $a  = [
                "id" => $getTotalCandidates[$key]->id,
                "firstname" => $getTotalCandidates[$key]->firstname,
                "lastname" => $getTotalCandidates[$key]->lastname,
                "gender" => $getTotalCandidates[$key]->gender,
                "department" => $getTotalCandidates[$key]->department,
                "candidate_no" => $getTotalCandidates[$key]->candidate_no,
                "vote" => $getVote,
                "total_avg" => number_format($total, 2, '.', ' ')
            ];
            array_push($newArray, $a);
        }   
        // dd($newArray);
         $candidates = $newArray;
        return view('custom.creativeheaddress',compact('judges','candidates'));
    }


    public function facialbeautylooks() {

        $newArray = [];

        $judges = User::where('judgeno','>',0)->get();

        $candidates = DB::select('SELECT candidates.*, tabulator.score, tabulator.judge_no, tabulator.criteria_no, tabulator.candidate_no, tabulator.round_no FROM candidates INNER JOIN tabulator ON tabulator.candidate_no = candidates.candidate_no AND tabulator.criteria_no = 5');

        $getTotalCandidates = Candidate::get()->all();
        
        foreach ($getTotalCandidates as $key => $value) {
            // var_dump($getTotalCandidates[$key]->firstname);
            $getVote = DB::select('SELECT tabulator.*, candidates.firstname FROM tabulator INNER JOIN candidates ON tabulator.candidate_no = candidates.candidate_no AND candidates.candidate_no = ' . $getTotalCandidates[$key]->candidate_no . ' AND tabulator.criteria_no = 5');

            $total = 0;
            $score = 0;
            foreach ($getVote as $key2 => $value) {
                if((int)$value->score >= 10) {
                    $score += (int)$value->score;
                } else {
                    $score += 4;
                }
                // $score += (int)$value->score;
                $total = $score / count($judges);
            }
            // dd(number_format($total, 2, '.', ' '));

            // var_dump($getTotalCandidates[$key]->firstname);
            $a  = [
                "id" => $getTotalCandidates[$key]->id,
                "firstname" => $getTotalCandidates[$key]->firstname,
                "lastname" => $getTotalCandidates[$key]->lastname,
                "gender" => $getTotalCandidates[$key]->gender,
                "department" => $getTotalCandidates[$key]->department,
                "candidate_no" => $getTotalCandidates[$key]->candidate_no,
                "vote" => $getVote,
                "total_avg" => number_format($total, 2, '.', ' ')
            ];
            array_push($newArray, $a);
        }   
        // dd($newArray);
         $candidates = $newArray;
        return view('custom.creativeheaddress',compact('judges','candidates'));
    }

    public function formalwear() {

        $newArray = [];

        $judges = User::where('judgeno','>',0)->get();

        $candidates = DB::select('SELECT candidates.*, tabulator.score, tabulator.judge_no, tabulator.criteria_no, tabulator.candidate_no, tabulator.round_no FROM candidates INNER JOIN tabulator ON tabulator.candidate_no = candidates.candidate_no AND tabulator.criteria_no = 6');

        $getTotalCandidates = Candidate::get()->all();
        
        foreach ($getTotalCandidates as $key => $value) {
            // var_dump($getTotalCandidates[$key]->firstname);
            $getVote = DB::select('SELECT tabulator.*, candidates.firstname FROM tabulator INNER JOIN candidates ON tabulator.candidate_no = candidates.candidate_no AND candidates.candidate_no = ' . $getTotalCandidates[$key]->candidate_no . ' AND tabulator.criteria_no = 6');

            $total = 0;
            $score = 0;
            foreach ($getVote as $key2 => $value) {
                if((int)$value->score >= 4  ) {
                    $score += (int)$value->score;
                } else {
                    $score += 4;
                }
                // $score += (int)$value->score;
                $total = $score / count($judges);
            }
            // dd(number_format($total, 2, '.', ' '));

            // var_dump($getTotalCandidates[$key]->firstname);
            $a  = [
                "id" => $getTotalCandidates[$key]->id,
                "firstname" => $getTotalCandidates[$key]->firstname,
                "lastname" => $getTotalCandidates[$key]->lastname,
                "gender" => $getTotalCandidates[$key]->gender,
                "department" => $getTotalCandidates[$key]->department,
                "candidate_no" => $getTotalCandidates[$key]->candidate_no,
                "vote" => $getVote,
                "total_avg" => number_format($total, 2, '.', ' ')
            ];
            array_push($newArray, $a);
        }   
        // dd($newArray);
         $candidates = $newArray;
        return view('custom.creativeheaddress',compact('judges','candidates'));
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
