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
                <form action="/submit/start" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="round_no" value="1">
                        <input type="hidden" name="judge_no" value="{{ Auth::user()->judgeno }}">
                        
                        <div class="col-sm-4" style="padding: 0">
                            <label for="criteria_no">Select Criteria</label>
                            <select class="form-control" name="criteria_no" id="criteria_no" required>
                                <option selected disabled value="">Select Criteria</option>
                                @foreach($criterion as $criteria)
                                    <option value="{{ $criteria->id }}">{{ $criteria->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-8">  
                            <label for="criteria_no">Filter</label><br>
                                <button type="submit">Submit</button>
                                {{-- <select class="form-control" name="" id="">
                                    <option value="">Select Judge</option>
                                    @foreach($judges as $judge)
                                        <option value="{{ $judge->judgeno }}">{{ $judge->fullname }}</option>
                                    @endforeach
                                </select> --}}
                        </div>
                        <div class="clearfix"></div>
                        <hr>  
                        

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

