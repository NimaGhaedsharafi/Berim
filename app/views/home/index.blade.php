@layout('master')

@section('title')
    {{ $title }}
@endsection

@section("style") 
	{{ HTML::style("css/carousel.css") }}
@endsection

@section('navbar')
	<form class="form-inline loginform pull-left" role="form">
		  <div class="form-group">
		    <label class="sr-only" for="loginEmail">آدرس ایمیل</label>
		    <input type="email" class="form-control" name="loginEmail" placeholder="آدرس ایمیل">
		  </div>
		  <div class="form-group">
		    <label class="sr-only" for="loginPassword">رمز عبور</label>
		    <input type="password" class="form-control" name="loginPassword" placeholder="رمز عبور">
		  </div>
	  	<button type="submit" class="btn btn-default">بیا تو بریم</button>
	</form>

@endsection

@section('content')
<div class="row homediv">
	<div class="col-md-4">
		<span><h2>بریم مکانی برای هماهنگی سریع و راحت برنامه های گروهی شما.</h2></span>
		{{ Form::open(URL::to_route('register'), 'POST', ['role' => 'form']) }}
		  <div class="form-group">
				{{ Form::text("fname", "", ['placeholder' => 'نام', 'class' => 'form-control']) }}
		  </div>
		<div class="form-group">
			{{ Form::text("lname", "", ['placeholder' => 'نام خانوادگی', 'class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::text("email", "", ['placeholder' => 'آدرس ایمیل', 'class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::password("pswd", ['placeholder' => 'رمز عبور', 'class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::select("gender", ['0' => 'زن', '1' => 'مرد'], '', ['class' => 'form-control']) }}
		</div>		
		<div class="checkbox">
		    <label>
		      {{ Form::checkbox("term", 1 , false, ['class' => 'checkbox']) }} <h4>قوانین را قبول دارم</h4>
		    </label>
		</div>	
		 <button type="submit" class="btn btn-primary pull-right "><span class="glyphicon glyphicon-plus"></span> ثبت نامم کن</button>
		{{ Form::close() }}
	</div>
	<div class="col-md-8">

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	{{ HTML::image("upload/editorchoice/shiraz.jpg") }}
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>استارتاپ ویکند شیراز</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>در تاریخ 24 مرداد 1393 با حضور 110 نفر برگذار شد.</span>
                            </h3>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	{{ HTML::image("upload/editorchoice/isfahan.jpg") }}
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>استارتاپ ویکند اصفهان</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>در تاریخ 15 مرداد 1393 با حضور 105 نفر برگذار شد.</span>
                            </h3>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	{{ HTML::image("upload/editorchoice/tehran.jpg") }}
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>استارتاپ ویکند تهران</span>
                            </h2>
                            <br>
                            <h3>
                            	<span>در تاریخ 15 مرداد 1393 با حضور 120 نفر برگذار شد.</span>
                            </h3>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->

	</div>
</div>
@endsection

