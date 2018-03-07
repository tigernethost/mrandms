@extends('backpack::layout')
@section('content')
<h1 class="text-center">Finals</h1>


	{{-- INTELLIGENCE --}}
<h4 class="text-center">Intelligence</h4>
<table class="table table-striped table-bordered">
	<thead>
		<th>Candidate No.</th>
		<th>Fullname</th>
		<th>Criteria</th>
		<th>Result</th>
	</thead>
	<tbody>
		@foreach($candidates as $key => $value)
			@if($candidates[$key]->criteria_no == '7')
			<tr>
				<td>{{ $candidates[$key]->candidate_no }}</td>
				<td>{{ $candidates[$key]->fullname }}</td>
				<td>{{ $candidates[$key]->name }}</td>
				<td>{{ $candidates[$key]->result }}</td>
			</tr>
			@endif
		@endforeach
	</tbody>
</table>


	{{-- OVER ALL IMPRESSION --}}
<h4 class="text-center">Over All Impression</h4>
<table class="table table-striped table-bordered">
	<thead>
		<th>Candidate No.</th>
		<th>Fullname</th>
		<th>Criteria</th>
		<th>Result</th>
	</thead>
	<tbody>
		@foreach($candidates as $key => $value)
			@if($candidates[$key]->criteria_no == '8')
			<tr>
				<td>{{ $candidates[$key]->candidate_no }}</td>
				<td>{{ $candidates[$key]->fullname }}</td>
				<td>{{ $candidates[$key]->name }}</td>
				<td>{{ $candidates[$key]->result }}</td>
			</tr>
			@endif
		@endforeach
	</tbody>
</table>
@endsection