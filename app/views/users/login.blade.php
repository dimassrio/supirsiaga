@extends('layout.empty')

@section('body')
	<div class="row">
		<div class="large-6 large-offset-3 columns">
			<a href="{{url('/')}}" class="sections"><img src="{{asset('assets/images/SUPIRSIAGA.png')}}" alt=""></a>
			<hr />
			<h5 class="text-center">SELAMAT DATANG PETUALANG</h5>
			<hr />
			<form action="{{url('login')}}" method="POST">
				<label for="username">USERNAME</label>
				<input type="text" id="username" name="username">
				<label for="password">PASSWORD</label>
				<input type="password" id="password" name="password">
				<input type="checkbox" name="remember" id="remember"><label for="remember">REMEMBER ME</label>
				<input type="submit" class="button expand" value="SUBMIT">
			</form>
	</div>
@stop