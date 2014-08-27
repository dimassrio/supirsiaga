@extends('layout.empty')

@section('body')
	<div class="row">
		<div class="large-6 large-offset-3 columns">
			<a href="{{url('/')}}" class="sections"><img src="{{asset('assets/images/SUPIRSIAGA.png')}}" alt=""></a>
			<hr />
			<h5 class="text-center">BERGABUNG DENGAN KAMI</h5>
			<hr />
			<form action="{{url('register')}}" method="post">
				<label for="name">Nama Lengkap</label>
				<input type="text" name="name" id="name">
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				<label for="email">Email</label>
				<input type="text" name="email" id="email">
				<label for="phone">Telepon</label>
				<input type="text" name="phone" id="phone">
				<label for="address">Alamat</label>
				<textarea name="address" id="address" cols="30" rows="10"></textarea>
				<p>By Clicking "Submit, you are agreeing to Supir Siaga Terms and Conditions and Privacy Policy</p>
				<input type="submit" class="button expand" value="DAFTAR">
			</form>
		</div>
	</div>
@stop