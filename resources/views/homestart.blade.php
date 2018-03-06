@extends('layouts.app')

@section('content')
{{-- {{ dd(get_defined_vars()) }} --}}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {{-- <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
            </div> --}}

            <h1 class="text-center">PRELIMINARY</h1>
            <div class="row" style="margin-top: 40px;">
                <form action="/submit" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="round_no" value="1">
                        <input type="hidden" name="judge_no" value="{{ Auth::user()->judgeno }}">
                        <input type="hidden" name="criteria_no" value="{{ $criterion->id }}">
                        
                        <div class="col-sm-12" style="padding: 0">
                          <h1 class="text-center">{{ $criterion->name }}</h1>
                        </div>
                        <div class="col-sm-8">  
                            <label for="criteria_no">Filter</label><br>
                            <a href="javascript:void(0)" id="showAll" class="btn btn-primary">Show  All</a>
                            <a href="javascript:void(0)" id="showMale" class="btn btn-primary">Show Male</a>
                            <a href="javascript:void(0)" id="showFemale" class="btn btn-primary">Show Female</a>
                                {{-- <select class="form-control" name="" id="">
                                    <option value="">Select Judge</option>
                                    @foreach($judges as $judge)
                                        <option value="{{ $judge->judgeno }}">{{ $judge->fullname }}</option>
                                    @endforeach
                                </select> --}}
                        </div>
                        <div class="clearfix"></div>
                        <hr>  
                        
                        <table class="table table-striped table-hover" style="margin-top: 30px">   
                            <thead>
                                <th class="text-center">Candidate No</th>
                                <th class="text-center">Profile</th>
                                <th class="text-center">Candidate Name</th>
                                <th class="text-center">Gender</th>
                                <th class="text-center">Department</th>
                                <th class="text-center">Score</th>
                            </thead>
                            <tbody> 
                                @foreach($candidates as $candidate)
                                    <tr id="" class="text-center {{ $candidate->gender }}">
                                        <td style="vertical-align: middle">{{ $candidate->candidate_no }}</td>
                                        <td style="vertical-align: middle"><img src="{{ $candidate->image_file }}" class="img-responsive" style="height: 100px; margin: auto;" alt=""></td>
                                        <td style="vertical-align: middle">{{ $candidate->lastname }}, {{ $candidate->firstname }} {{ $candidate->middlename }}</td>
                                        <td style="vertical-align: middle">{{ $candidate->gender }}</td>
                                        <td style="vertical-align: middle">{{ $candidate->department }}</td>
                                        <td style="vertical-align: middle">
                                            {{-- <select class="form-control" name="candidate[{{ $candidate->candidate_no }}]" id="" required>
                                                <option selected disabled value="">Select Number</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select> --}}
                                            <select class="form-control" name="candidate[{{ $candidate->candidate_no }}]" id="" required>
                                                <option selected disabled value="">Select Criteria</option>
                                                @for($i = 1; $i <= (int)$criterion->highest; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="btn btn-primary pull-right">Submit</button>
                </form>



            </div>
        </div>
    </div>
</div>

@section('custom-script')
    <script>
        $('#showMale').click(function (e) {
            e.preventDefault();
            $('.Male').removeAttr('style');
            $('.Female').css('display', 'none');

            $('#showMale').addClass('active');
            $('#showFemale').removeClass('active');
            $('#showAll').removeClass('active');
        });

        $('#showFemale').click(function (e) {
            e.preventDefault();
            $('.Male').css('display', 'none');
            $('.Female').removeAttr('style');

            $('#showMale').removeClass('active');
            $('#showFemale').addClass('active');
            $('#showAll').removeClass('active');
        });

        $('#showAll').click(function (e) {
            e.preventDefault();
            $('.Male, .Female').removeAttr('style');

            $('#showMale').removeClass('active');
            $('#showFemale').removeClass('active');
            $('#showAll').addClass('active');
        })
    </script>
@endsection
@endsection

