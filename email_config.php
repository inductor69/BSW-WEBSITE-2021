<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Email | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
            <h1 class="about-us-title"><span class="fa fa-envelope-o"></span> Email Client Configuration</h1>
            </div>

            <div class="col-12  ml-auto">
            <p class="about-us-text">
            If you want to get rid of logging in again and again into your kerberos id and want to sync your kerberos id with your Android, iOS and iPadOS devices, then just follow the steps given below.<br>
            Syncing your webmail with your phones will provide you a central interface for receiving, composing and sending emails.
            </p>
            </div>

        </div>

    </div>

</div>

<div class="container" id="softwares-list">
    <div class="row">
        <div class="col-12">
        
        <ul class="list-unstyled">

        <li class="media my-4">
            <img class="mr-3 software-logo" src="images/android.svg" alt="MATLAB Logo" width="120" height="120" >
            <div class="media-body ">
            <h5 class="mt-0 mb-1" >Android</h5>
            <ul class="list-unstyled ml-4">
                <li class="list-unstyled ">&rarr; Go to Settings > Accounts > Email</li>
                <li class="list-unstyled ">&rarr; 'E-mail id' is kerberos_id@iitd.ac.in</li>
                <li class="list-unstyled ">&rarr; 'Username' is kerberos_id and 'Password' is your kerberos password</li>
                <li class="list-unstyled ">&rarr;  Choose 'Manual Setup' > 'IMAP Account'</li>
                <li class="list-unstyled ">&rarr; IMAP server : mailstore.iitd.ac.in</li>
                <li class="list-unstyled ">&rarr; Security Type : SSL (Accept all certificates). Click Next.</li>
                <li class="list-unstyled ">&rarr; SMTP server : smtp.iitd.ac.in</li>
                <li class="list-unstyled ">&rarr; Security Type : SSL (Accept all certificates).Click Next</li>
                <li class="list-unstyled ">&rarr; Choose synchronisation frequency and other options as per your choice. Click Next</li>
                <li class="list-unstyled ">&rarr; Set a name for your account. Click Done</li>

                </ul>
            </div>
        </li>

        <li class="media my-4">
            <img class="mr-3 software-logo" src="images/iOSiPadOS.jpg" alt="MATLAB Logo" width="120" height="120" >
            <div class="media-body ">
            <h5 class="mt-0 mb-1" >iOS and iPadOS</h5>
            <ul class="list-unstyled ml-4">
                <li class="list-unstyled ">&rarr; Go to Settings > Mail > Add account > Others > Add Mail Account.</li>
                <li class="list-unstyled ">&rarr; Enter your Name, email id is kerberos_id@iitd.ac.in and password is your kerberos password. Click Next.</li>
                <li class="list-unstyled ">&rarr; Host name of 'incoming mail server': mailstore.iitd.ac.in</li>
                <li class="list-unstyled ">&rarr; Username : kerberos_id</li>
                <li class="list-unstyled ">&rarr; Host name of 'outgoing mail server': smtp.iitd.ac.in</li>
                <li class="list-unstyled ">Click next -> Click continue in the 'pop up window'. </li>
                </ul>
            </div>
        </li>



        </ul>

        </div>
    </div>
</div>
<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



</body>
</html>