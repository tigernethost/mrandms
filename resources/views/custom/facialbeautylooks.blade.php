@extends('backpack::layout')
@section('content')
{{-- {{ dd($candidates[12]['vote'][0]->score) }} --}}
	<h1 class="text-center">Facial Beauty Looks</h1>
	<h4 style="margin-top: 40px">Girls</h4>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Candidate Name</th>
				@foreach($judges as $judge)
					<th> {{ $judge->name }}</th>
				@endforeach
			<th> Final Total</th>
			<th> Final Rank</th>
		</thead>
		<tbody>
		@php $counter = 1; @endphp
			@foreach($candidates as $key => $val)
					{{-- {{ var_dump($candidates[$key]['firstname']) }} --}}
					@if($candidates[$key]['gender'] == 'Female')
					<tr>
						<td>{{ $counter ++ }}</td>
						<td>{{ $candidates[$key]['firstname'] }}</td>
						@foreach( $candidates[$key]['vote'] as $k2 => $v )
							<td>{{ $candidates[$key]['vote'][$k2]->score }}</td>
						@endforeach
						<td>{{ $candidates[$key]['total_avg'] }}</td>
					</tr>
					@endif
			@endforeach
		</tbody>


	</table>

	<h4 style="margin-top: 40px;">BOYS</h4>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<th>No.</th>
			<th>Candidate Name</th>
				@foreach($judges as $judge)
					<th> {{ $judge->name }}</th>
				@endforeach
			<th> Final Total</th>
			<th> Final Rank</th>
		</thead>
		<tbody>
		@php $counter = 1; @endphp
			@foreach($candidates as $key => $val)
					{{-- {{ var_dump($candidates[$key]['firstname']) }} --}}
					@if($candidates[$key]['gender'] == 'Male')
					<tr>
						<td>{{ $counter ++ }}</td>
						<td>{{ $candidates[$key]['firstname'] }}</td>
						@foreach( $candidates[$key]['vote'] as $k2 => $v )
							<td>{{ $candidates[$key]['vote'][$k2]->score }}</td>
						@endforeach
						<td>{{ $candidates[$key]['total_avg'] }}</td>
					</tr>
					@endif
			@endforeach
		</tbody>


	</table>

@endsection