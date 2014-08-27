<div class="row sections">
	<div class="large-6 columns large-offset-3">
		<h3 class="text-center">KOTA <strong>{{strtoupper($city->names)}}</strong></h3>
	</div>
</div>
@foreach($listing as $key => $list)
	<div class="row">
		<div class="large-12 columns">
			<label for="listing_{{$key}}">Pilih {{get_class($list[0])}}</label>
			<select name="" id="listing_{{$key}}" data-value="{{$key}}" data-type="{{get_class($list[0])}}">
			@foreach($list as $l)
				@if(get_class($l) == 'CarRental')
					<option value="{{$l->id}}">{{$l->name}}</option>	
				@elseif(get_class($l) == 'Taxi')
					<option value="{{$l->id}}">{{$l->name}}</option>	
				@endif
			@endforeach
			</select>
		</div>
	</div>
	<div class="row">
		<div id="listing_{{$key}}_content" class="large-12 columns">
					
		</div>
	</div>
	@if($key<count($listing)-1)
		<hr/>
			<h4 class="text-center">~OR~</h4>
		<hr/>
	@endif
@endforeach

@section('js')
	<script type="text/javascript">
	function generateData(){
		var optionDetail ="";
				var dataType = $(this).attr("data-type");
				var dataValue = $(this).attr("data-value");
				var counter = null;
				if(dataType == 'CarRental'){
					counter = ' Hari '
				}else if(dataType == 'Taxi'){
					counter = ' Km '
				}
				var content = [];
				$.getJSON("{{url('api')}}/"+$(this).attr("data-type")+"Detail/"+$(this).val(),function(data){
					$.each(data, function(key, val){
						optionDetail += "<option value='"+val.id+"'>"+val.names+"</option>";

						var contentImg = "<img src='{{url('/')}}/"+val.image+"'>";
						var contentHTML = $("<div>", {
								class: 'large-4 columns',
								html : contentImg
							}).add($("<div>", {
								class: 'large-4 columns',
								html : "<h4 class='text-center sections'>Rp. "+val.price+" / "+counter+"</h4> "
							})).add($("<div>", {
								class: 'large-4 columns',
								html : "<a href='{{url('book')}}/"+dataType+"/single/"+val.id+"' class='button medium sections right'><i class='fi-shopping-cart'></i> BOOKING</a>"
							}))
						content.push(
							$("<div>", {
								id : dataType+"_"+val.id,
								class: 'row',
								html : contentHTML
							})
						);
					});
					$("#listing_"+dataValue+"_content").html(
						$("<select>", {
							id:dataType,
							html: optionDetail
						})
					);
					$("#listing_"+dataValue+"_content").append(
						$.each(content, function(key, val){
							val;
							val.hide();
						})
					);
					$("#"+dataType+"_"+$("select#"+dataType).val()).show();
					$("select#"+dataType).change(function(){
						$("[id^="+dataType+"_]").hide();
						$("#"+dataType+"_"+$("select#"+dataType).val()).show();
					});
				});
	};
		$(document).ready(function(){
			$("select[id^=listing]").each(generateData)
		});
		$("[id^=listing]").change(generateData);
	</script>
@stop