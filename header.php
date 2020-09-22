<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
		<meta charset="utf-8"/>
		
		<link href="style.css" rel="stylesheet"/>
		<link href="css/cstyle.css" rel="stylesheet"/>
		<link href="css/font-awesome.min.css" rel="stylesheet"/>
		
	<!--###############################################################################################################-->		

		
		<script language="javascript" type="text/javascript">
			function clearText(field)
			{
				if (field.defaultValue == field.value) field.value = '';
				else if (field.value == '') field.value = field.defaultValue;
			}
		</script>

		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>


		<script type="text/javascript">
		$(window).load(function() {
		$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2200,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
		});
		});
		</script>
		
	<!--###############################################################################################################-->
		
		<!--
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-xxxxx-x', 'auto');
		  ga('send', 'pageview');
		</script>
		--->
	</head>
	<body>
		<div class="hedarsection template clear">
			<div class="logo clear"> 
				<a href="index.php"><img src="img/My-Logo.png" alt="logo"/></a>
			</div>
			<div class="socile"> 
				<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
				<a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
				<a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
				<a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
				<a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
			</div>
		</div>
		
	<!--###############################################################################################################-->	
		
		<div class="navsection template"> 
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="product.php">Product</a>
					<ul>
						<li><a href="product_one.php">Product one</a></li>
						<li><a href="product_two.php">Product two</a></li>
						<li><a href="product_three.php">Product tree</a></li>
						<li><a href="product_fore.php">Product fore</a></li>
						<li><a href="product_five.php">Product five</a></li>
					</ul>
				</li>
				<li><a href="#">Policy</a>
					<ul>
						<li><a href="#">Ledder</a></li>
						<li><a href="#">Member</a></li>
					</ul>
				</li>
				<li><a href="#">Member</a>
					<ul>
						<li><a href="ragiston.php">Ragiston</a></li>
						<li><a href="login.php">Log in</a></li>
					</ul>
				</li>
				<li><a href="gallery.php">Gallery</a>
					<ul>
						<li><a href="gallery_one.php">Gallery one</a></li>
						<li><a href="gallery_two.php">Gallery two</a></li>
						<li><a href="gallery_three.php">Gallery tree</a></li>
						<li><a href="gallery_fore.php">Gallery fore</a></li>
						<li><a href="gallery_five.php">Gallery five</a></li>
					</ul>
				</li>
			</ul>
		</div>