@extends('layout.single')

@section('body')
	<div class="wrapper onepage-wrapper">
		<section>
			<div class="row">
				<div class="large-6 columns">
					<div id="first-section" class="text-center">
						<h2>SUPIR SIAGA</h2>
						<h3>Siaga Kapanpun, Siaga Dimanapun</h3>
						<a href="" class="button large">DAFTAR</a>
						<p>Ubah perjalanan anda menjadi lebih <strong>aman</strong>, <strong>nyaman</strong> dan <strong>menyenangkan</strong>.</p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="large-12 columns">
					<h2 class="text-center">MENGUBAH PERJALANAN, MENGUBAH MANUSIA</h2>
				</div>
			</div>
			<div class="row">
				<div class="large-8 columns">
					<h3>PILIH KOTA PERJALANAN</h3>
					<div class="row">
						<div class="large-12 columns">
							<div class="row">
								<div class="large-6 columns">
								<label for="">ASAL</label>
									<select name="from" id="">
										<option value="0">JAKARTA</option>
									</select>
								</div>
								<div class="large-6 columns">
								<label for="">TUJUAN</label>
									<select name="from" id="">
										<option value="0">JAKARTA</option>
										<option value="1" selected>BANDUNG</option>
										<option value="2" selected>YOGYAKARTA</option>
										<option value="3">BALI</option>
									</select>
								</div>
							</div>
							<input type="submit" class="button" value="BERANGKAT">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="large-12 columns">
					<h2 class="text-center">LUPAKAN MASALAH, NIKMATI PERJALANAN ANDA</h2>
					<div class="row">
						<div class="large-4 columns" data-equalizer>
							<div id="what-panel" class="panel text-center" data-equalizer-watch>
								<h5 class="text-center">WHAT IS SUPIR SIAGA</h5>
								<p>Asisten pribadi perjalanan anda, merubah cara kita berpergian. Pilih sekali, lupakan sisanya.</p>
								<strong>YOUR TRAVEL IS ON THE FINGER</strong>
							</div>
						</div>
						<div class="large-4 columns">
							<div id="why-panel" class="panel text-center" data-equalizer-watch>
								<h5 class="text-center">WHY WE DO THIS</h5>
								<p>Mengubah perjalanan menjadi sebuah pengalaman yang menyenangkan. Tanpa masalah tambahan, tanpa biaya tidak terduga.</p>
								<strong>SAFE, COMFORTABLE, REASONABLE</strong>
							</div>
						</div>
						<div class="large-4 columns">
							<div id="how-panel" class="panel text-center" data-equalizer-watch>
								<h5 class="text-center">HOW WE CHANGE WORLD</h5>
								<p>Pilih kota dan cara anda berpergian via web atau ponsel, dan ijinkan kami mengatur semuanya untuk anda.</p>
								<strong>WASTE NO MORE TIME</strong>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@stop

@section('js')
<script src="{{asset('assets/vendor/foundation/js/foundation/foundation.equalizer.js')}}"></script>
<script type="text/javascript">
	$(".onepage-wrapper").onepage_scroll();
</script>
@stop