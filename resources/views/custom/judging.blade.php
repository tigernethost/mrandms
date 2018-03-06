@extends('backpack::layout')
@section('content')

		<h1 class="text-center">Judge</h1>
		<div class="col-sm-4">	
			<select class="form-control" name="" id="">
				<option selected disabled>Select Criteria</option>
				@foreach($criterion as $criteria)
					<option value="{{ $criteria->id }}">{{ $criteria->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="col-sm-2">	
				<select class="form-control" name="" id="">
					<option value="">Select Judge</option>
					@foreach($judges as $judge)
						<option value="{{ $judge->judgeno }}">{{ $judge->fullname }}</option>
					@endforeach
				</select>
		</div>
		
		<div class="container">	
					<table class="table">	
						<thead>
							<th>Candidate No</th>
							<th>Candidate Name</th>
							<th>Rate</th>
						</thead>
						<tbody>	
							<tr>
								<td>123</td>
								<td>Marlon Tandoc</td>
								<td>
									<select name="" id="">
										<option selected disabled>Select Number</option>
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
									</select>
								</td>
							</tr>
						</tbody>
					</table>
		</div>
@endsection