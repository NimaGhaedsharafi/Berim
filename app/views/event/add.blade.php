@layout('master')

@section('title')
    {{ $title }}
@endsection

@section("script")
	<script type="text/javascript" src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
	{{ HTML::script("js/Map.js") }}
	<SCRIPT LANGUAGE="javascript">
		$(document).ready(function(){
			
			
			// parameters are id , center , zoom
			var M = new Map('map',[29.6130192, 52.532674],13,function(e){
				// run when selected 
				
				var POS = M.getSelectedPoint(); // POS is {X , Y}
				
				//$("#_X").val(POS.X);
				//$("#_Y").val(POS.Y);
				
			});
			
			// for select postion and disable select 
			//M.Select({X:29.6130192, Y:52.532674});
			
			
			
			
		});
		
	</SCRIPT>

@endsection

@section("style") 
	<LINK REL="stylesheet" HREF="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
	{{ HTML::style("css/carousel.css") }}
	{{ HTML::style("css/style.css") }}
@endsection

@section('content')

<div class="row homediv">
	<!-- form -->
	<div class="col-md-4">
		<h2>برنامه بذاریم ...</h2>
		<br />
		<div class="form-group">
			{{ Form::text("subject", "", ['placeholder' => 'موضوع', 'class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::text("dateinv", "", ['placeholder' => 'تاریخ', 'class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::text("timeinv", "", ['placeholder' => 'ساعت', 'class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::textarea("dateinv", "", ['placeholder' => 'بیشتر بنویس', 'class' => 'form-control']) }}
		</div>
		<div class="checkbox">
		    <label>
		      {{ Form::checkbox("term", 1 , false, ['class' => 'checkbox']) }}
		      <h4> فقط دوستان خودم بیان !!! </h4>
		    </label>
		</div>	
		<button type="submit" class="btn btn-primary pull-right "> ثبت کن</button>
		
	</div>
	
	<!-- map -->
	<div class="col-md-8">
		<h2>تو کدوم محل ...</h2>
		<div class="MapClass" id="map" ></div>
	</div>

@endsection

