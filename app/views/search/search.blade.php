@extends('layout.normal')

@section('body')
	<div class="row sections">
		<div class="large-12 columns">
			<h3>BERIKUT REKOMENDASI TERBAIK KAMI</h3>
		</div>
		<div class="row">
			<div class="large-12 columns">
				{{$search_view}}
			</div>
		</div>
	</div>
@stop