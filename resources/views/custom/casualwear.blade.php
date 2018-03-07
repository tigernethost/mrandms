@extends('backpack::layout')
@section('content')
{{-- {{ dd($judges) }} --}}
	<h1 class="text-center">Casual Wear</h1>

	<h3>Girls</h3>
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
				@if($candidates[$key]['gender'] == "Female")
					<tr>
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


	<h3>Boys</h3>
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
				@if($candidates[$key]['gender'] == "Male")
					<tr>
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