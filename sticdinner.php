<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

<title>STIC Dinner | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/touchTouch.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

<style type="text/css">

html {
overflow-y: scroll
}
.justifiedGallery {
width: 100%;
margin-bottom: 10px
}
.justifiedGallery .jg-image {
position: absolute;
display: inline-block;
vertical-align: top;
margin-left: 0
}
.justifiedGallery .jg-image img {
border: none;
display: none
}
.justifiedGallery .jg-image a {
text-decoration: none
}
.justifiedGallery .jg-image-label {
white-space: normal;
font: normal 12px arial;
background: #000;
color: #fff;
position: absolute;
left: 0;
right: 0;
padding: 5px 5px 10px 8px;
text-align: left;
opacity: 0;
filter: alpha(opacity=0)
}
.justifiedGallery .jg-loading-img {
margin: auto;
width: 50px;
height: 50px;
background: url(../img/loading.gif) no-repeat center center
}
.justifiedGallery .jg-loading {
margin: auto;
width: 50px;
height: 50px;
background-color: white;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px
}
.justifiedGallery .jg-row {
position: relative;
white-space: nowrap;
overflow: hidden;
margin-bottom: 4px
}

	body{
		background-color: #a4e7f055;
	}
	
	.about-us-title{
		font-size: 4rem;
		opacity: 0.6;
	}
	.about-us-text{
		color: #fff;
		font-weight: medium;
		font-size:1.3rem;
		margin-bottom: 20px;
	}
	.line-break{
		width:80%;
		border: 0;
		height: 10px;
		background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
	}
	#about-us{
    padding-top:60px;
        margin-top:0px;
		background-image: linear-gradient(90deg, #67B26F 0%, #4CA2CD 100%);
	}

	
</style>

</head>


<body >
		
<?php require 'components/header.php'; ?>
<?php require 'components/back_to_top.php'; ?>


<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12  justify-content-center">
            <h1 class="about-us-title"><span class="fa fa-comments"></span> STIC Dinner</h1>
            </div>

            <div class="col-12 ml-auto">
            <p class="about-us-text">
			The STIC Dinner or “Student-Teacher Interaction Dinner” is an event conducted annually for the first-year students. With music and dinner to accompany them, the students get a great opportunity to freely converse with their professors and get more familiar with them. This endeavor is to bridge the student-teacher gap and to encourage friendly bonding between the two.             </div>

        </div>

    </div>

</div>

<div class="container">
<div class="row">
		<h1 class="my-4 mx-2" style="font-size: 60px;">Few Glimpses of the event</h1>
	</div>
	</div>


<div class="container-fluid" id="gallery">
<div class="row arrow-box justify-content-center" style="text-align: center;">
			<a class="arrow-up-2" href="#gallery">
				<span class="left-arm-2"></span>
				<span class="right-arm-2"></span>
				<span class="arrow-slide"></span>
			</a>
			</div>
	<style>
		
		.thumbnaili{
			object-fit: cover !important;
			width:300px !important;
			height:auto;
			border-radius: 10px;
			margin:175px 10px 10px 10px !important
		}
		.thumbnail{
			object-fit: cover !important;
			width: 100%;
			height:auto;
			border-radius: 20px;
		}
		.slick-next{
			margin-right:40px;
			width: 80px !important;
			height: 80px !important;
		}
		.slick-prev{
			margin-left:40px !important;
			width: 80px !important;
			height: 80px !important;
			z-index: 100000 !important;
			font-size: 40px !important;
		}
		.slick-prev::before{
			font-size: 40px !important;
		}
		.slick-next::before{
			font-size: 40px !important;
		}
		.slick-dots li button::before {
			font-size: 12px !important;
		}
		
		.slick-dots{
			position: relative !important;
		}
		
		.slick-current{
		object-fit: cover !important;
		display: block;
		width:700px !important;
		height:auto;
		border-radius: 10px;
		transition: height 0.5s ease-in-out !important;
		margin: 10px !important;
		}
		.t
		.thumb-div{
			display: block !important;
			text-align: center !important;
		}
		.img-link{
			margin-bottom:10px;
		}

		#loc-1{
			background-image: linear-gradient(180deg, #000000 0%, #323232 100%);
			padding:10px;
			padding-top: 30px;
			padding-bottom: 30px;
			border-radius:40px;
			color: #fff !important;
		}

		@media (max-width: 700px){
			.thumbnaili{
			object-fit: cover !important;
			width:200px !important;
			height:auto;
			border-radius: 10px;
			margin:50px 10px 10px 10px !important
		}
		.slick-current{
			object-fit: cover !important;
			display: block;
			width:300px !important;
			height:auto;
			border-radius: 10px;
			transition: height 1s, width 1s ease-in-out;
			margin: 10px !important;
		}

		}

	</style>
<br>


	<div class="row justify-content-center your-class align-middle">
	<?php
		for($i=1; $i<20; $i=$i+1){
			//echo '<a class="col-12 col-md-4 col-lg-3" href="images/op_delhidarshan/'.$i.'.JPG" >';
			echo '<img class="thumbnaili" src="images/op_sticd/'.$i.'.jpg" alt="BSW STIC Dinner" />';
			//echo '</a>';
		}
		?>
			
	</div>

	<div class="row arrow-box justify-content-center" style="text-align: center; margin-top: 100px;">
			<a class="arrow-up-2" href="#journey">
				<span class="left-arm-2"></span>
				<span class="right-arm-2"></span>
				<span class="arrow-slide-2"></span>
			</a>
	</div>

	<br><br><br>

</div>

<div class="container" style="padding-right: 40px; padding-left: 40px;" id="journey">
	


	<div class="row">
		<h1 class="my-4" style="font-size: 60px;">About the event</h1>
		<p style="font-size:1.2rem">
		STIC dinner was conceptualized with the belief that for an efficient learning experience, both parties, students and teachers must freely express their feedback of one another. In lecture halls, due to a large number of students in one class never really allows free interaction to take place. However, this is made possible at the STIC dinner!
<br>The STIC dinner is a two-day event. The first day is graced by students belonging to groups 1-20 and their respective professors. The second day is for students belonging to groups 21-40 and their professors. To ensure the event activities are conducted smoothly, we have put in place a per-student pass system. 

	</div>

	<div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6 align-middle" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/op_sticd/15.jpg" alt="BSW Delhi Darshan" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Activities throughout the event</h2>
		The event begins by a performance by the music club, where all get to see an amazing collaboration between vocalists and instrumentalists. Followed by this, all see students and teachers showing off their skills such as singing, dancing, etc. The BSW host presents a set of fun questions to teachers encouraging them to share their fun college memories. Several other activities throughout the event make it an entertaining and memorable night!   		</div>
	</div>

	<div class="row my-4">
	<div class="col-12 col-md-6 d-sm-block d-md-none align-middle" style="width: 98%;">
			<img class="thumbnail" src="images/op_sticd/14.jpg" alt="BSW Delhi Darshan" />
		</div>

		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Interaction between professors and the students</h2>
		BSW sees the purpose of STIC dinner being solved when teachers openly 
share their life experiences with students, while also taking an active interest 
in the student’s life and vice-versa. Along with enhancing the student-teacher 
relationship, the larger purpose of effective learning from one another is
encouraged through these interactions!
		</div>

		<div class="col-12 col-md-6 d-none d-md-block" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/op_sticd/14.jpg" alt="BSW Delhi Darshan" />
		</div>
	</div>

	<div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/op_sticd/19.jpg" alt="BSW Delhi Darshan" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Conversations over food</h2>
		BSW also provide dinner for both professors and students. Informal conversations over food make students more comfortable while talking to the professor in the lecture hall. 	</div>


</div>
</div>



<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/touchTouch.jquery.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script>
	$(document).ready(function(){
		$('.your-class').slick({
			accessibility: true,
			autoplay: true,
			variableWidth: true,
			swipeToSlide: true,
			centerMode:true,
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: true,
			focusOnSelect: true,
			arrows: true,
			responsive: [
				{
				breakpoint: 768,
				settings: {
					arrows: true,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3
				}
				},
				{
				breakpoint: 480,
				settings: {
					arrows: true,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
				}
			]
		});
	});
</script>

</body>
</html>