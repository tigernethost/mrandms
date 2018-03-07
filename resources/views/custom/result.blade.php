@extends('backpack::layout')
@section('content')
		<h1 class="text-center">SELECT CRITERIA TO VIEW RESULT</h1>
		<div style="margin-top: 30px;"></div>
			
			<h3 class="text-center">PRELIMINARY</h3>

			<div class="col-sm-4">
					<a href="{{ url('admin/casualwear') }}">
						<div class="card col-sm-12" style="background-color: #FFF; box-shadow: 2px 2px 2px rgba(0, 0, 0, .3); padding-top: 10px; padding-bottom: 10px;">
							<h5 class="card-title">CASUAL WEAR</h5>
						</div>
					</a>
			</div>

			<div class="col-sm-4">
					<a href="{{ url('admin/creativeheaddress') }}">
						<div class="card col-sm-12" style="background-color: #FFF; box-shadow: 2px 2px 2px rgba(0, 0, 0, .3); padding-top: 10px; padding-bottom: 10px;">
							<h5 class="card-title">CREATIVE HEAD DRESS</h5>
						</div>
					</a>
			</div>

			<div class="col-sm-4">
					<a href="{{ url('admin/physique') }}">
						<div class="card col-sm-12" style="background-color: #FFF; box-shadow: 2px 2px 2px rgba(0, 0, 0, .3); padding-top: 10px; padding-bottom: 10px;">
							<h5 class="card-title">PHYSIQUE/BODY PROPORTION</h5>
						</div>
					</a>
			</div>

			<div class="col-sm-4">
					<a href="{{ url('admin/swimwear') }}">
						<div class="card col-sm-12" style="background-color: #FFF; box-shadow: 2px 2px 2px rgba(0, 0, 0, .3); padding-top: 10px; padding-bottom: 10px;">
							<h5 class="card-title">SWIM WEAR</h5>
						</div>
					</a>
			</div>

			<div class="col-sm-4">
					<a href="{{ url('admin/facialbeautylooks') }}">
						<div class="card col-sm-12" style="background-color: #FFF; box-shadow: 2px 2px 2px rgba(0, 0, 0, .3); padding-top: 10px; padding-bottom: 10px;">
							<h5 class="card-title">FACIAL BEAUTY LOOKS</h5>
						</div>
					</a>
			</div>

			<div class="col-sm-4">
					<a href="{{ url('admin/formalwear') }}">
						<div class="card col-sm-12" style="background-color: #FFF; box-shadow: 2px 2px 2px rgba(0, 0, 0, .3); padding-top: 10px; padding-bottom: 10px;">
							<h5 class="card-title">FORMAL WEAR</h5>
						</div>
					</a>
			</div>

		<div class="clearfix"></div>
		<div style="margin-top: 30px;"></div>
			
			<h3 class="text-center">FINALS</h3>

			<div class="col-sm-4">
					<a href="{{ url('admin/intelligence') }}">
						<div class="card col-sm-12" style="background-color: #FFF; box-shadow: 2px 2px 2px rgba(0, 0, 0, .3); padding-top: 10px; padding-bottom: 10px;">
							<h5 class="card-title">INTELLIGENCE</h5>
						</div>
					</a>
			</div>

			<div class="col-sm-4">
					<a href="{{ url('admin/overallimpression') }}">
						<div class="card col-sm-12" style="background-color: #FFF; box-shadow: 2px 2px 2px rgba(0, 0, 0, .3); padding-top: 10px; padding-bottom: 10px;">
							<h5 class="card-title">OVER ALL IMPRESSION</h5>
						</div>
					</a>
			</div>
@endsection