
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 

<style type="text/css">

#nav{
	z-index: 3;
}

		@font-face {
			font-family: 'neue_montrealitalic';
			src: url('fonts-new/neuemontreal-italic-webfont.woff2') format('woff2'),
				url('fonts-new/neuemontreal-italic-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;

		}

		@font-face {
			font-family: 'neue_montrealmedium';
			src: url('fonts-new/neuemontreal-medium-webfont.woff2') format('woff2'),
				url('fonts-new/neuemontreal-medium-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;

		}

		@font-face {
			font-family: 'neue_montrealregular';
			src: url('fonts-new/neuemontreal-regular-webfont.woff2') format('woff2'),
				url('fonts-new/neuemontreal-regular-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;

		}

		body{
			font-family: 'Montserrat', sans-serif !important;
		}

		h1,h2,h3,h4,h5,h6{
			font-family: 'neue_montrealmedium' !important;
		}

		#userText{
			background-color: #000 !important;
			width: 100% !important;
		}




	.navbar-nav a{
		color:#fff;
		font-family: 'neue_montrealmedium';
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
        font-weight: 600;
        font-size: 1.2rem;
		text-shadow: 0.5px 0.5px 0.5px #2222226b;
		background-image: linear-gradient(currentColor,white);
		background-position: 0% 100%;
		background-repeat: no-repeat;
		background-size: 0% 2px;
		transition: background-size .3s;
	}
	.navbar-nav a:hover{ 
		color:#fff;
		background-size: 100% 2px;
	}


.navbar .nav-link .dropdown-toggle{
		color:#fff !important;
        text-decoration: none;
        background-color: transparent !important;
        -webkit-text-decoration-skip: objects !important;
        font-weight: 600 !important;
        font-size: 1.2rem !important;
		text-shadow: 0.5px 0.5px 0.5px #2222226b !important;
		background-image: linear-gradient(currentColor,white) !important;
		background-position: 0% 100% !important;
		background-repeat: no-repeat !important;
		background-size: 0% 2px !important;
		transition: background-size .3s !important;
	}
	
	.navbar .nav-link .dropdown-toggle:hover{ 
		color:#fff !important;
		background-size: 100% 2px !important;
	}

	.navbar-toggler{
    	color: #fff;
	}

	.nav-colored{ 
		background-image: linear-gradient(90deg, #67B26F 0%, rgba(76,162,205,0.61) 100%);
		border: none;
		margin-top:0;
	}

	.nav-transparent { 
		background-color:transparent;
		transition: linear;
	}

@media (min-width: 992px){
	ul.navbar-nav.nav{
		margin-left: -147.4px;
	}
}


	@media (max-width: 992px){
		.dropdown-menu{
			font-family: 'neue_montrealregular' !important;
			background: transparent !important;
			border: none !important;
		}
		.dropdown-item:active, .dropdown-item:hover, .dropdown-item:focus{
			font-family: 'neue_montrealregular' !important;
			background-color: #00000088 !important;
			border: none !important;
			color: #FFFFFF !important;
			border-radius:10px !important;
		}
	}
	@media (min-width: 992px){
		.dropdown-item{
			font-family: 'neue_montrealregular' !important;
		}
		.dropdown-item, .dropdown-item:focus, .dropdown-item:hover {
		font-family: 'neue_montrealregular' !important;
		color: #16181b;
		text-decoration: none;
	}

	.dropdown-item:focus, .dropdown-item:hover {
		font-family: 'neue_montrealregular' !important;
    background-color:transparent !important;
}

.dropdown-item:focus, .dropdown-item:hover {
	font-family: 'neue_montrealregular' !important;
    color: #16181b;
    text-decoration: none;
    background-color: transparent !important;
}
		
		.dropdown-menu .dropdown-toggle:after{
			font-family: 'neue_montrealregular' !important;
			font-size: 12px !important;
			font-weight:normal !important;
			background: #00000088 !important;
			border-top: .3em solid transparent;
		    border-right: 0;
		    border-bottom: .3em solid transparent;
		    border-left: .3em solid;
		}

		.dropdown-menu {
			font-family: 'neue_montrealregular' !important;
			border-radius:10px !important;
			margin-left:0px; margin-right: 0px;
			background: #00000088 !important;
			border:none !important;
			font-weight: normal !important;
		}

		.dropdown-menu li{
			font-family: 'neue_montrealregular' !important;
			position: relative;
			font-weight: normal !important;
		}
		.dropdown-menu li:hover{
			font-family: 'neue_montrealregular' !important;
			color: #000 !important;
			position: relative;
			font-weight: normal !important;
		}
		.nav-item .submenu{ 
			font-family: 'neue_montrealregular' !important;
			display: none;
			position: absolute;
			left:100%; top:-7px;
			font-weight: normal !important;

		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
			font-weight: normal !important;
		}
		.dropdown-menu > li:hover{ background-color: #000000; width: 100%;  }
		.dropdown-menu > li:hover > .submenu{
			display: block;
		}
		

	
	}
</style>

<html>
<body>

		<div class="container" id='nav'>

		<nav class="navbar navbar-expand-lg mr-auto fixed-top nav-colored " id="myNav">

		<a class="navbar-brand" href="index.php">
			<img src="images/bsw_logo.png" width="147.4" height="40" alt="">
		</a>
		<button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
			<span class="fa fa-bars fa-lg"></span>
		</button>
		
		<div class="collapse navbar-collapse justify-content-center" id="main_nav" id="nav-align-handle">

			<ul class="navbar-nav nav ">

				<li class="nav-item active"> 
					<a class="nav-link" href="./freshers/index.php"><span class="fa fa-external-link-square"></span>  Freshers'20 </a>
				</li>
				
				<li class="nav-item ">
					<a class="nav-link" href="about_us.php">About Us</a>
				</li>


				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						What We Do
					</a>
					<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Mentorship <small><span id="right-drop-arrow">&#9658;</span></small></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="academic_mentorship.php">Academic Mentorship</a></li>
							<li><a class="dropdown-item" href="alumni_mentorship.php">Alumni Mentorship</a><li>
							<li><a class="dropdown-item" href="language_mentorship.php">Language Mentorship </a></li>
							<li><a class="dropdown-item" href="mental_health.php">Mental Health Mentorship &amp; Counselling</a></li>
						</ul>
					</li>
					<li><a class="dropdown-item" href="#">Operations <small><span id="right-drop-arrow">&#9658;</span></small></a>
						<ul class="submenu dropdown-menu">
							<li><a class="dropdown-item" href="orientation.php">Freshers Orientation</a></li>
							<li><a class="dropdown-item" href="events.php">Events</a></li>
							<li><a class="dropdown-item" href="scoops.php">SCOOPS</a></li>
							<li><a class="dropdown-item" href="career_counselling.php">Career Counselling</a></li>
							<!-- <li><a class="dropdown-item" href="scoops.php">SCOOPS</a></li>
							<li><a class="dropdown-item" href="workshops.php">Workshops</a></li> -->
						</ul>
					</li>
					<li><a class="dropdown-item" href="convergenz.php">Speranza</a></li>
					</ul>
				</li>


				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						Resources
					</a>
					<ul class="dropdown-menu">

						<li><a class="dropdown-item" href="question_papers.php">Question Papers</a></li>

						<li>
							<a class="dropdown-item" href="#">Internet &amp; Email <small><span id="right-drop-arrow">&#9658;</span></small></a>
							<ul class="submenu dropdown-menu">
								<li><a class="dropdown-item" href="email_config.php">Email Configuration</a></li>
								<li><a class="dropdown-item" href="wifi_config.php">Internet Setup</a></li>
							</ul>
						</li>

						<li><a class="dropdown-item" href="diary.php">Diary </a></li>

						<li><a class="dropdown-item" href="booklets.php">Booklets</a></li>

						<!-- <li><a class="dropdown-item" href="newsletter.php">Newsletter </a></li> -->

						<li>
							<a class="dropdown-item" href="#">Medical Facilities <small><span id="right-drop-arrow">&#9658;</span></small></a>
							<ul class="submenu dropdown-menu">
								<li><a class="dropdown-item" href="health_insurance.php">Health Insurance</a></li>
								<li><a class="dropdown-item" target="_blank" href="forms/wheelchair.pdf">Wheelchair Form</a></li>
							</ul>
						</li>



						<li>
							<a class="dropdown-item" href="softwares.php">Softwares</a>
						</li>

						<li>
							<a class="dropdown-item" href="links.php">Quick Links</a>
						</li>

						<li>
							<a class="dropdown-item" href="forms.php">Forms</a>
						</li>

						<li>
							<a class="dropdown-item" href="emergency_contacts.php">Emergency Contacts</a>
						</li>

						<li><a class="dropdown-item" href="bsw_loans.php">BSW Loans</a></li>

					</ul>
				</li>


				<li class="nav-item dropdown">
					<!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						Highlights
					</a> -->
					<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="delhidarshan.php">Delhi Darshan</a></li>
					<li><a class="dropdown-item" href="convergenz.php">Speranza</a></li>
					<li><a class="dropdown-item" href="sticdinner.php">STIC Dinner</a></li>
					</ul>
				</li>

				<li class="nav-item ">
					<a class="nav-link" href="faq.php">FAQs</a>
				</li>

				<li class="nav-item ">
					<a class="nav-link" href="structure.php">Contact Us</a>
				</li>

				
				

			</ul>


		</div>

		</nav>


		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


<script type="text/javascript">


	$(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
	});


const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const $submenu = $(".dropdown-menu .submenu");
const showClass = "show";
 
$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
		$this.find($dropdownMenu).addClass(showClass);
		$this.find($submenu).removeClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
	
	

$(document).ready(function() {

	$('#navbar-toggler').click(function(){
		if ($('#navbar-toggler').children('span').hasClass('fa-bars'))
		{
                $('#navbar-toggler').children('span').removeClass('fa-bars');
                $('#navbar-toggler').children('span').addClass('fa-times');
			}else if ($('#navbar-toggler').children('span').hasClass('fa-times'))
			{
                $('#navbar-toggler').children('span').removeClass('fa-times');
                $('#navbar-toggler').children('span').addClass('fa-bars');
            }
    
	});
	console.log("icon changed");


   
	

	if ($(window).width() < 992) {
	  	$('.dropdown-menu a').click(function(e){
	  		// e.preventDefault();
	        if($(this).next('.submenu').length){
	        	$(this).next('.submenu').toggle();
	        }
	        $('.dropdown').on('hide.bs.dropdown', function () {
			   $(this).find('.submenu').hide();
			})
		  });
		  return false;
	}

}); 


</script>



		




