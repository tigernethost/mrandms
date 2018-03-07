@extends('backpack::layout')
@section('content')
<h1 class="text-center">Summary</h1>
{{-- {{ dd($candidates) }} --}}

<h4 class="text-center">Casual Wear</h4>
<table class="table table-striped table-bordered">
	<thead>
		<th>Candidate No.</th>
		<th>Fullname</th>
		<th>Criteria</th>
		<th>Result</th>
	</thead>
	<tbody>
		@foreach($candidates as $key => $value)
			@if($candidates[$key]->criteria_no == '1')
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

	
	{{-- CREATIVE HEAD DRESS --}}
<h4 class="text-center">Creative Head Dress</h4>
<table class="table table-striped table-bordered">
	<thead>
		<th>Candidate No.</th>
		<th>Fullname</th>
		<th>Criteria</th>
		<th>Result</th>
	</thead>
	<tbody>
		@foreach($candidates as $key => $value)
			@if($candidates[$key]->criteria_no == '2')
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

	{{-- PHYSIQUE --}}
<h4 class="text-center">Physique/Body Proportion</h4>
<table class="table table-striped table-bordered">
	<thead>
		<th>Candidate No.</th>
		<th>Fullname</th>
		<th>Criteria</th>
		<th>Result</th>
	</thead>
	<tbody>
		@foreach($candidates as $key => $value)
			@if($candidates[$key]->criteria_no == '3')
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
		
	{{-- SWIM WEAT=R --}}
<h4 class="text-center">Swim Wear</h4>
<table class="table table-striped table-bordered">
	<thead>
		<th>Candidate No.</th>
		<th>Fullname</th>
		<th>Criteria</th>
		<th>Result</th>
	</thead>
	<tbody>
		@foreach($candidates as $key => $value)
			@if($candidates[$key]->criteria_no == '4')
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

	{{-- Facial Beauty Looks --}}
<h4 class="text-center">Facial Beauty Looks</h4>
<table class="table table-striped table-bordered">
	<thead>
		<th>Candidate No.</th>
		<th>Fullname</th>
		<th>Criteria</th>
		<th>Result</th>
	</thead>
	<tbody>
		@foreach($candidates as $key => $value)
			@if($candidates[$key]->criteria_no == '5')
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


		{{-- FORMAL WEAR --}}
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
			@if($candidates[$key]->criteria_no == '6')
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