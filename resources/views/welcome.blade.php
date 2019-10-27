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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    
    <style>
        .youtubeiconbg { background: #F43846 !important; }
        .linkediniconbg { background: #3AA4F8 !important; }
		.logo { max-width: 300px; }
		.main-area:after { background: none; }
		.main-area { color: #232323 !important; }
		.font-white { color: #232323 !important; }
		.social-btn { color: white !important; }
		.list-heading { color: #232323 !important; }
		#videopopup { padding: 0px; }
		.jquery-modal { padding: 0px; }
		.submit-btn { background-color: #ff3f63 !important; }
		#normal-countdown>div>h3 { color: #52e2fe !important; }
		#normal-countdown { margin-bottom: 60px !important; }
		.modal { width: 92%; background: transparent; max-width: 1000px !important; height:65%; min-height: 300px; }
    </style>
	
</head>
<body>
	
	<div class="main-area center-text" style="background-image:url(images/thecreatiiivesbackgrount.jpg);" >
		
		<div class="display-table">
			<div class="display-table-cell">
				<img class="logo" src="{{ asset('images/logo.png') }}" alt="The creatiiives logo" />
				
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
	
	<div id="videopopup" class="modal">
		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/cgJOspxgIfQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	
	
	<!-- SCIPTS -->
	
	<script src="{{ asset('common-js/jquery-3.1.1.min.js') }}"></script>
	
	<script src="{{ asset('common-js/jquery.countdown.min.js') }}"></script>
	
	<script src="{{ asset('common-js/scripts.js') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

	<script>
		$(document).ready(function () {
			$("#videopopup").modal({
				fadeDuration: 100
			});
		})
	</script>
	
</body>
</html>