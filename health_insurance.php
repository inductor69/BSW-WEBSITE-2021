<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Health Insurance | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


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
    padding-top:60px;
        margin-top:0px;
		background-image: linear-gradient(90deg, #67B26F 0%, #4CA2CD 100%);
	}
    #softwares-list{
        margin-top:40px;
        margin-bottom:40px;
    }
    #softwares-list.media{
        margin: 20px !important;
        background-color:#000 !important;
    }
    #softwares-list .software-logo{
        border-radius: 20px !important;
    }
    .form-preview{
        height:600px;
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

            <div class="col-12 col-lg-4 justify-content-center">
            <h1 class="about-us-title"><span class="fa fa-medkit"></span> Health Insurance</h1>
            </div>

            <div class="col-12 col-lg-7 ml-auto">
            <p class="about-us-text">
            National Insurance Co Ltd with Safeway TPA services are providing health Insurance for IIT
Delhi students for the amount of &#8377;1,00,000 per student. <br>
For all insurance-related query, you may contact Dedicated Help Desk, Detail as under:- <br>
Contact Person: Mr. Harpreet Singh <br>
Mobile No: +91 9810702804 <br>
Venue: Zanskar Hostel, IIT DELHI <br>
Time: Every Thursday 12:00 Noon to 2:00 PM <br>
Given below is the detailed presentation that you should go through to get details about applying for a claim.  <br>
            </p>
            </div>

        </div>

    </div>

</div>

<div class="container" id="softwares-list">
<a href="misc/health_insurance.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-primary my-2" style={display:inline;}><span class="fa fa-download fa-lg"></span> Download Slides</a>
<div class="row justify-content-center">
<div class="card col-12 ">
<embed src="misc/health_insurance.pdf" class="form-preview">

    
    </div>


  

</div>
</div>
<?php require 'components/footer.php'; ?>


<script type="text/javascript">

$(document).ready(function() {
    $('#scrollHorizontal').click();
    console.log("horizontal scrolling enabled");
}); 

 
</script>


</body>
</html>