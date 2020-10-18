<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Delhi Darshan | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>


<style type="text/css">
	html{
		scroll-behavior: smooth !important;
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
	#about-us{
        margin-top:0px;
        background-image: linear-gradient(180deg, #C02425 0%, #F0CB35 100%);	
		}

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
	.dd-text{
		font-size:1.15rem;
	}
	.arrow-up {
	
	 height: 60px;
	 width: 62px;
	 display: block;
	 border: 1px solid #fff;
	 position: relative;
	 cursor: pointer;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 overflow: hidden;
	 border-radius: 40px;
	 padding: 20px;
}
 .arrow-slide {
	 left: 0;
	 top: -100%;
	 width: 100%;
	 height: 100%;
	 background: #fff;
	 position: absolute;
	 display: block;
	 z-index: 0;
}
 .left-arm {
	 position: absolute;
	 z-index: 1;
	 background-color: transparent;
	 top: 19px;
	 left: 3px;
	 width: 20px;
	 display: block;
	 transform: rotate(-45deg);
}
 .left-arm:after {
	 content: "";
	 background-color: #fff;
	 width: 20px;
	 height: 1px;
	 display: block;
	 border-radius: 1px;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 transform-origin: right center;
	 z-index: -1;
}
 .right-arm {
	 position: absolute;
	 z-index: 1;
	 background-color: transparent;
	 top: 19px;
	 left: 17px;
	 width: 20px;
	 display: block;
	 transform: rotate(45deg);
	 border-radius: 2px;
}
 .right-arm:after {
	 content: "";
	 background-color: #fff;
	 width: 20px;
	 height: 1px;
	 display: block;
	 border-radius: 1px;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 transform-origin: left center;
	 z-index: -1;
}
 .arrow-up:hover {
	 transition: all 0.1s;
}
 .arrow-up:hover .left-arm:after {
	 transform: rotate(-10deg);
}
 .arrow-up:hover .right-arm:after {
	 transform: rotate(10deg);
}
 .arrow-up:hover .arrow-slide {
	 transition: all 0.4s ease-in-out;
	 transform: translateY(200%);
}

.arrow-up:active {
	 transition: all 0.1s;
}
 .arrow-up:active .left-arm:after {
	 transform: rotate(-10deg);
}
 .arrow-up:active .right-arm:after {
	 transform: rotate(10deg);
}
 .arrow-up:active .arrow-slide {
	 border-radius: 60px;
	 transition: all 0.4s ease-in-out;
	 transform: translateY(200%);
}

.arrow-box{
	margin-top:60px;
	transform: rotate(180deg);
}
#gallery{
	padding-left: 20px;
	padding-right: 20px;
}

.arrow-up-2 {
	 height: 60px;
	 width: 62px;
	 border-radius: 40px;
	 display: block;
	 border: 1px solid #000;
	 position: relative;
	 cursor: pointer;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 overflow: hidden;
}
 .arrow-slide-2 {
	 left: 0;
	 top: -100%;
	 width: 100%;
	 height: 100%;
	 background: #000;
	 position: absolute;
	 display: block;
	 z-index: 0;
	 border-radius: 60px;
}
 .left-arm-2 {
	 position: absolute;
	 z-index: 1;
	 background-color: transparent;
	 top: 29px;
	 left: 13px;
	 width: 20px;
	 display: block;
	 transform: rotate(-45deg);
}
 .left-arm-2:after {
	 content: "";
	 background-color: #000;
	 width: 20px;
	 height: 1px;
	 display: block;
	 border-radius: 1px;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 transform-origin: right center;
	 z-index: -1;
}
 .right-arm-2 {
	 position: absolute;
	 z-index: 1;
	 background-color: transparent;
	 top: 29px;
	 left: 27px;
	 width: 20px;
	 display: block;
	 transform: rotate(45deg);
	 border-radius: 2px;
}
 .right-arm-2:after {
	 content: "";
	 background-color: #000;
	 width: 20px;
	 height: 1px;
	 display: block;
	 border-radius: 1px;
	 transition: all 0.5s cubic-bezier(0.25, 1.7, 0.35, 1.5);
	 transform-origin: left center;
	 z-index: -1;
}
 .arrow-up-2:hover {
	 transition: all 0.1s;
}
 .arrow-up-2:hover .left-arm-2:after {
	 transform: rotate(-10deg);
}
 .arrow-up-2:hover .right-arm-2:after {
	 transform: rotate(10deg);
}
 .arrow-up-2:hover .arrow-slide-2 {
	 transition: all 0.4s ease-in-out;
	 transform: translateY(200%);
}

.arrow-up-2:active {
	 transition: all 0.1s;
}
 .arrow-up-2:active .left-arm-2:after {
	 transform: rotate(-10deg);
}
 .arrow-up-2:active .right-arm-2:after {
	 transform: rotate(10deg);
}
 .arrow-up-2:active .arrow-slide-2 {
	 transition: all 0.4s ease-in-out;
	 transform: translateY(200%);
}
 
 

	
</style>
<link href="css/touchTouch.css" rel="stylesheet" type="text/css"/>
</head>

<?php require 'components/header.php'; ?>
<?php require 'components/back_to_top.php'; ?>
<body >
<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center ">

            <div class="col-12">
            <img src="images/delhidarshan.svg" class="convergenz-logo">
            </div>

        </div>

        <div class="row justify-content-center ">

            <div class="col-12 about-us-text" style="text-align: center;">
            <p class="dd-text">Delhi Darshan 2019 was organized on the 3rd & 4th of August. It's a tour across Delhi, relishing the beauty of the city with indelible bus-rides. We had  exciting ice-breakers to know our batchmates, and memories to cherish. We visited nearby monuments and tourist spots, and had a day filled with games and fun activities</p>
		


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
			echo '<img class="thumbnaili" src="images/op_delhidarshan/'.$i.'.jpg" alt="BSW Delhi Darshan" />';
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
		<h1 class="my-4" style="font-size: 60px;">Journey</h1>
	</div>

	<div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6 align-middle" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/op_delhidarshan/1.jpg" alt="BSW Delhi Darshan" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Qutub Minar</h2>
		The Qutub Minar is a minaret and "victory tower" that forms part of the Qutb complex, a UNESCO World Heritage Site in the Mehrauli area of Delhi, India. While cherishing the mesmerizing beauty of Qutub Minar, lots of freshers were modelling and making the most of iconic backgrounds!
		</div>
	</div>

	<div class="row my-4">
	<div class="col-12 col-md-6 d-sm-block d-md-none align-middle" style="width: 98%;">
			<img class="thumbnail" src="images/lotus_temple.jpg" alt="BSW Delhi Darshan" />
		</div>

		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Lotus Temple</h2>
		The Lotus Temple is a Baháʼí House of Worship that was dedicated in December 1986.Notable for its flowerlike shape, it has become a prominent attraction in the city.  The highlight of lotus temple is the unique silent prayers it has , which provided a sense of completeness and calm to us.
		</div>

		<div class="col-12 col-md-6 d-none d-md-block" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/lotus_temple.jpg" alt="BSW Delhi Darshan" />
		</div>
	</div>

	<div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/bangla_sahib.jpg" alt="BSW Delhi Darshan" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Gurudwara Bangla Sahib</h2>
		Gurudwara Bangla Sahib is one of the most prominent Sikh gurdwara, or Sikh house of worship, in Delhi and known for its association with the eighth Sikh Guru, Guru Har Krishan, as well as the holy pool inside its complex, known as the "Sarovar." 		</div>
	</div>

	<div class="row my-4">
	<div class="col-12 col-md-6 d-sm-block d-md-none" style="width: 98%;">
			<img class="thumbnail" src="images/cc.jpg" alt="BSW Delhi Darshan" />
		</div>

		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Raj Ghat</h2>
		Raj Ghat is a memorial dedicated to Mahatma Gandhi in Delhi, India. Originally it was the name of a historic ghat of Old Delhi. Close to it, and east of Daryaganj was Raj Ghat Gate of the walled city, opening at RajGhat to the west bank of the Yamuna River.</div>

		<div class="col-12 col-md-6 d-none d-md-block" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/cc.jpg" alt="BSW Delhi Darshan" />
		</div>
	</div>

	<div class="row my-4" id="loc-1">
		<div class="col-12 col-md-6" style="width: 98%;">
			<img class="thumbnail align-middle" src="images/op_delhidarshan/3.jpg" alt="BSW Delhi Darshan" />
		</div>
		<div class="col-12 col-md-6 my-4 " style="font-size:20px;">
		<h2>Lodhi Garden</h2>
		The last stop of our fun filled day ,is the Lodhi Garden. Spread over 90 acres (360,000 m2), it contains, Mohammed Shah's Tomb, Tomb of Sikandar Lodi, Shisha Gumbad and Bara Gumbad, architectural works of the 15th century by Lodis. We had various fun filled activities,games for our freshers to enjoy, and  thus we welcomed themto our ever-growing IITD community!	</div>
	</div>

</div>

<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
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