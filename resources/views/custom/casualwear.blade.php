@extends('backpack::layout')
@section('content')
{{-- {{ dd($judges) }} --}}
	<h1>Casual Wear</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<th>Candidate Name</th>
				@foreach($judges as $judge)
					<th> {{ $judge->name }}</th>
				@endforeach
			<th> Final Total</th>
			<th> Final Rank</th>
		</thead>
		<tbody>

			@foreach($candidates as $key => $val)
					{{-- {{ var_dump($candidates[$key]['firstname']) }} --}}
					<tr>
						<td>{{ $candidates[$key]['firstname'] }}</td>
						@foreach( $candidates[$key]['vote'] as $k2 => $v )
							<td>{{ $candidates[$key]['vote'][$k2]->score }}</td>
						@endforeach
						<td>{{ $candidates[$key]['total_avg'] }}</td>
					</tr>
			@endforeach
		</tbody>


	</table>


	{{-- <table class="table table-bordered table-striped">
		<thead>
			<th>Candidate Name</th>
				@foreach($judges as $judge)
					<th> {{ $judge->name }}</th>
				@endforeach
			<th> Final Total</th>
			<th> Final Rank</th>
		</thead>
		<tbody>
			@foreach($candidates as $candidate)
				@if($candidate->gender == "Male")
				<tr>
					<td>{{ $candidate->firstname }}</td>
					@foreach($judges as $judge)
							@if($judge->judgeno == $candidate->judge_no)
								<td>{{ $candidate->score }}</td>
							@endif
					@endforeach
				</tr>
				@endif
			@endforeach
		</tbody>

	</table> --}}

@endsection