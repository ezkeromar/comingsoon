<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>{{__('home.title')}}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	
	
	<link href="{{ asset('common-css/ionicons.css') }}" rel="stylesheet">
	
	
	<link rel="stylesheet" href="{{ asset('common-css/jquery.classycountdown.css') }}" />
		
	<link href="{{ asset('07-comming-soon/css/styles.css') }}" rel="stylesheet">
	
    <link href="{{ asset('07-comming-soon/css/responsive.css') }}" rel="stylesheet">
    
    <style>
        .youtubeiconbg { background: #F43846 !important; }
        .linkediniconbg { background: #3AA4F8 !important; }
    </style>
	
</head>
<body>
	
	<div class="main-area center-text" style="background-image:url(images/countdown-6-1600x900.jpg);" >
		
		<div class="display-table">
			<div class="display-table-cell">
				
				<h1 class="title"><b>{{__('home.comingsoontitle')}}</b></h1>
				<p class="desc font-white">{{__('home.comingsoondescription')}}</p>
				
				<div class="email-input-area">
					<form method="post">
						<input class="email-input" name="email" type="text" placeholder="{{__('home.enteryouremail')}}"/>
						<button class="submit-btn" name="submit" type="submit"><b>{{__('home.notifyus')}}</b></button>
					</form>
				</div><!-- email-input-area -->
							
				<div id="normal-countdown" data-date="2020/01/01"></div>
				
				<ul class="social-btn">
					<li class="list-heading">{{__('home.followus')}}</li>
					<li><a title="Facebook" href="https://www.facebook.com/thecreatiiives"><i class="ion-social-facebook"></i></a></li>
					<li><a title="Twitter" href="https://twitter.com/thecreatiiives"><i class="ion-social-twitter"></i></a></li>
					<li><a title="Linkedin" href="https://www.linkedin.com/in/thecreatiiives/"><i class="youtubeiconbg ion-social-youtube"></i></a></li>
					<li><a title="Instagram" href="https://www.instagram.com/thecreatiiives"><i class="ion-social-instagram-outline"></i></a></li>
					<li><a title="Youtube" href="https://www.youtube.com/channel/UCZ5fcuQ23QUpKqTJPR9NQoQ"><i class="linkediniconbg ion-social-linkedin"></i></a></li>
				</ul>
				
			</div><!-- display-table -->
		</div><!-- display-table-cell -->
	</div><!-- main-area -->
	
	
	<!-- SCIPTS -->
	
	<script src="{{ asset('common-js/jquery-3.1.1.min.js') }}"></script>
	
	<script src="{{ asset('common-js/jquery.countdown.min.js') }}"></script>
	
	<script src="{{ asset('common-js/scripts.js') }}"></script>
	
</body>
</html>