@extends('layout.single')

@section('body')
		<section id="index-first-section">
			<div class="row">
				<div class="large-6 columns">
					<div id="first-section" class="text-center">
						<img src="{{asset('assets/images/supirsiaga.png')}}" alt="">
						<h3>Siaga Kapanpun, Siaga Dimanapun</h3>
						@if(!Auth::check())
						<div class="row">
							<div class="large-6 columns">
								<a href="{{url('register')}}" class="button large alert">DAFTAR</a>
							</div>
							<div class="large-6 columns">
								<a href="{{url('login')}}" class="button large">MASUK</a>
							</div>
						</div>
						@else
						<h4>HI, {{Auth::user()->names}}</h4>
						@endif
						<p>Ubah perjalanan anda menjadi lebih <strong>aman</strong>, <strong>nyaman</strong> dan <strong>menyenangkan</strong>.</p>
					</div>
				</div>
			</div>
		</section>
		<section id="index-second-section">
			<div class="row">
				<div class="large-12 columns sections">
					<h2 class="text-center">MENGUBAH <strong>PERJALANAN</strong>, MENGUBAH <strong>MANUSIA</strong></h2>
				</div>
			</div>
			<div class="row section-content">
				<div class="large-6 columns" id="second-section">
					<h3 class="text-center"><strong>PILIH KOTA</strong></h3>
					<div class="row">
						<div class="large-12 columns text-center">
						<form action="{{url('search')}}" method="POST">
							<div class="row">
								<div class="large-6 columns">
								<label for="from">ASAL</label>
									<select name="from" id="from">
										<option value="1">JAKARTA</option>
									</select>
								</div>
								<div class="large-6 columns">
								<label for="destination">TUJUAN</label>
									<select name="destination" id="destination">
										<option value="1">JAKARTA</option>
										<!-- <option value="2" selected>BANDUNG</option>
										<option value="3" selected>YOGYAKARTA</option>
										<option value="4">BALI</option> -->
									</select>
								</div>
							</div>
							<input type="submit" class="button" value="BERANGKAT">
							</form>
						</div>
					</div>
				</div>
				<div class="large-6 columns">
					
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="large-12 columns">
					<h2 class="text-center sections">LUPAKAN MASALAH, NIKMATI PERJALANAN ANDA</h2>
					<div class="row sections"  data-equalizer>
						<div class="large-4 columns panel" data-equalizer-watch>
							<div id="what-panel" class="text-center">
								<h5 class="text-center">WHAT IS SUPIR SIAGA</h5>
								<p>Asisten pribadi perjalanan anda, merubah cara kita berpergian. Pilih sekali, lupakan sisanya.</p>
								<strong>YOUR TRAVEL IS ON YOUR FINGER</strong>
							</div>
						</div>
						<div class="large-4 columns panel" data-equalizer-watch>
							<div id="why-panel" class="text-center">
								<h5 class="text-center">WHY WE DO THIS</h5>
								<p>Mengubah perjalanan menjadi sebuah pengalaman yang menyenangkan. Tanpa masalah tambahan, tanpa biaya tidak terduga.</p>
								<strong>SAFE, COMFORTABLE, REASONABLE</strong>
							</div>
						</div>
						<div class="large-4 columns panel" data-equalizer-watch>
							<div id="how-panel" class="text-center">
								<h5 class="text-center">HOW WE CHANGE WORLD</h5>
								<p>Pilih kota dan cara anda berpergian via web atau ponsel, dan ijinkan supirsiaga mengatur segalanya untuk anda.</p>
								<strong>WASTE NO MORE TIME</strong>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="large-12 columns">
					<h2 class="text-center sections">SEMUA DI TANGAN ANDA</h2>
					<div class="row sections" data-equalizer>
						<div class="large-3 columns panel text-center" data-equalizer-watch>
							<h4>PERJALANAN TERINTEGRASI</h4>
						</div>
						<div class="large-3 columns panel text-center" data-equalizer-watch>
							<h4>TANPA UANG TUNAI</h4>
						</div>
						<div class="large-3 columns panel text-center" data-equalizer-watch>
							<h4>REKOMENDASI PERJALANAN</h4>
						</div>
						<div class="large-3 columns panel text-center" data-equalizer-watch>
							<h4>SHARING KENDARAAN <br/><small>(DAN BIAYANYA)</small></h4>
						</div>
					</div>
					<div class="row sections" data-equalizer>
						<div class="large-3 columns panel text-center" data-equalizer-watch>
							<h4>TEMAN PERJALANAN TERBAIK</h4>
						</div>
						<div class="large-3 columns panel text-center" data-equalizer-watch>
							<h4>BIAYA YANG JELAS</h4>
						</div>
						<div class="large-3 columns panel text-center" data-equalizer-watch>
							<h4>TIDAK BUANG WAKTU</h4>
						</div>
						<div class="large-3 columns panel text-center" data-equalizer-watch>
							<h4>SARAN UNTUK PERUBAHAN</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
@stop
