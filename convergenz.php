<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Convergenz | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

<style type="text/css">

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
		font-size:1rem;
		margin-bottom: 20px;
	}
	#about-us{
        margin-top:0px;
        background-image: linear-gradient(270deg, #ED3338 0%, #4CA2CD 100%);	}
    .convergenz-logo{
        margin-top:60px;
        height:auto;
        width:100%;
        padding-bottom:40px;
        padding-top:20px;
    }
    .convergenz-event{
        width:100%;
        height:auto;
        display: inline-block;
    }


</style>

</head>


<body >
		
<?php require 'components/header.php'; ?>
<?php require 'components/back_to_top.php'; ?>


<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center ">

            <div class="col-12">
            <img src="images/convergenz_logo.svg" class="convergenz-logo">
            </div>

        </div>

        <div class="row justify-content-center ">

            <div class="col-12 about-us-text">
            <p>Convergenz is the annual youth fest organized by the BSW. It involves
various competitions and events where the student community of IIT Delhi
participates and get to explore the recreational aspect of the college.
Various events which are generally popular among the youth were
organized for the students to enjoy and have fun by getting along with each other. This is also the first exposure to any big event inside the college for
the freshers and several fresher-oriented games and competitions are also organized.
</p>
            </div>

        </div>

    </div>

</div>

<div class="container-fluid" id="gallery">
<div class="row arrow-box justify-content-center" style="text-align: center;">
			<a class="arrow-up-2" href="#gallery">
				<span class="left-arm-2"></span>
				<span class="right-arm-2"></span>
				<span class="arrow-slide-2"></span>
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
		for($i=1; $i<10; $i=$i+1){
			//echo '<a class="col-12 col-md-4 col-lg-3" href="images/op_delhidarshan/'.$i.'.JPG" >';
			echo '<img class="thumbnaili" src="images/op_speranza/'.$i.'.JPG" alt="BSW Convergenz" />';
			//echo '</a>';
		}
		?>

<img class="thumbnaili" src="images/op_speranza/10.png" alt="BSW Convergenz" />
<img class="thumbnaili" src="images/op_speranza/11.png" alt="BSW Convergenz" />
			
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
		<h1 class="my-4" style="font-size: 60px;">Convergenz 2019</h1>
	</div>

	<div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6 align-middle" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/inauguration2.jpg" alt="BSW Delhi Darshan" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Inauguration</h2>
Convergenz 2019 was inaugurated on 13 September 2019 by the esteemed chief guest Sanjeeva Singh, Olympic Archer, Arjuna Awardee and Dronacharya Awardee.		</div>
	</div>

	<div class="row my-4">
	<div class="col-12 col-md-6 d-sm-block d-md-none align-middle" style="width: 98%;">
			<img class="thumbnail" src="images/bandnight.jpg" alt="Convergenz Inauguration" />
		</div>

		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Band Night ft. Zikrr</h2>
        Zikrr which means ‘to mention’, promises to stir up emotions hidden deep within, turning them into a beautiful memory.They live songs and not merely play them, focusing on every note as every word has story to tell. On the first of three pro nights of the fest  we had Zikrr, the sufi rock band that came to IIT Delhi and showed all  the time of their lives.
We all  grooved and danced and had an evening that we will never forget.		</div>

		<div class="col-12 col-md-6 d-none d-md-block" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/bandnight.jpg" alt="BSW Comedy Night" />
		</div>
	</div>

	<div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/comedynight.JPG" alt="BSW Comedy Night" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Comedy Night ft. Nishant Tanwar</h2>
        It Just takes a few drops of humor to add life in a bland and tiresome day.Thus for the second pro night of the fest ,we had one of the best stand up comedians in Country - Nishant Tanwar! The Dogra hall was packed and had a memorable witty evening.</div>
	</div>

	<div class="row my-4">
	<div class="col-12 col-md-6 d-sm-block d-md-none" style="width: 98%;">
			<img class="thumbnail" src="images/jeopardy.jpg" alt="BSW Jeopardy" />
		</div>

		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Jeopardy</h2>
		The one of its kind, Jeopardy is the IITD version of Student of the Year. It involves challenging and gruelling tasks to determine the best of bests!</div>

		<div class="col-12 col-md-6 d-none d-md-block" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/jeopardy.jpg" alt="BSW Jeopardy" />
		</div>
	</div>

	<div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/op_speranza/4.JPG" alt="BSW Guftagoo" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Guftagoo</h2>
		As the word means , guftagoo is an informal talk session with alumni of all sectors, who share their experiences and wisdom  to inspire and guide the future aspirants. It is  an informal
session where students asked various questions related to their preparations and future prospects.</div>
	</div>


<div class="row my-4">
	<div class="col-12 col-md-6 d-sm-block d-md-none" style="width: 98%;">
			<img class="thumbnail" src="images/jeopardy.jpg" alt="IPL Auction" />
		</div>

		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>IPL Auction</h2>
		It is a simulation of the much-hyped IPL auction. Where teams experienced the
thrill of owning and managing their own team. The event had two
rounds first round was an online quiz about cricket. The second round was the real IPL.
Auction simulation, which was managed digitally. The auction was hosted
by one of our representatives. </div>

		<div class="col-12 col-md-6 d-none d-md-block" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/iplauction.jpg" alt="IPL Auction" />
		</div>
	</div>


    <div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/enigma.png" alt="BSW Enigma" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Enigma</h2>
		The art of a magician is to create wonder. If we live with a sense of wonder, our lives become filled with joy. Thus to memorize IITD with his magic ,we had acclaimed magician and illusionist Divyansh Apurva. As expected, everyone was enthralled by his illusions and some of his brilliant tricks.</div>
	</div>


    <div class="row my-4">
	<div class="col-12 col-md-6 d-sm-block d-md-none" style="width: 98%;">
			<img class="thumbnail" src="images/promnight.JPG" alt="Prom ight" />
		</div>

		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Prom Night</h2>
		This evening was dedicated to the students who wanted to know each other better and spend some quality time together. Music as well as some short, quirky games ensured the crowd was always involved. The event was  followed by some rocking music wherein everyone was invited. This marked the end of a very successful Speranza Convergenz-2019. </div>

		<div class="col-12 col-md-6 d-none d-md-block" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/promnight.jpg" alt="Prom Night" />
		</div>
	</div>

    
    </div>


<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
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