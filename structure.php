<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Structure | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style type="text/css">

a{
    color: white !important;
}
@media (min-width: 992px){
	#offset-card{
		margin-bottom: -300px !important;
        z-index: 2 !important;
	}
}

.card{
    background: #FFFFFF !important;
        box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
        border: 0 !important;
        border-radius: 15px !important;
        padding: 10px !important;
        margin-right: 0 !important;
        margin-left: 0 !important;
}

.card-header{
    background-color: rgba(220,220,220,0.3) !important;
    border: none !important;
    border-radius: 20px !important;
    margin: 10px;
}

.hostel-card-outer{
    background: #FFFFFF66 !important;
        box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.02), inset 0 0 9px 8px rgba(152,152,152,0.02) !important;
        border: 0 !important;
        border-radius: 30px !important;
}

.hostel-inner-card{
    background: #FFFFFF !important;
        box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
        border: 0 !important;
        border-radius: 15px !important;
        padding: 10px !important;
}

	#structure{
        background-color: rgba(68,215,182,0.18) !important;
        
	}
    .{
       
    }
    .text-dark{
        color:#000 !important;
    }
	
	.about-us-title{
		font-size: 4rem;
		opacity: 1;
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
    .card-img-top{
        object-fit: cover;
        height: 120px !important;
        width:120px !important;
        border-radius: 20px !important;
        display: block !important;
        margin-left: auto !important;
        margin-right: auto !important;
        margin-top:20px !important;
        margin-bottom: 20px !important;
    }
    /* .card{
        border-radius: 10px !important;
        text-align: center !important;
        font-size: 16px !important;
        background-color: #fff !important;
        box-shadow: 6px 6px 12px #bbb;
    }
    .card:hover{
        box-shadow: 6px 6px 12px #999;
    } */

    .btn-primary, .btn-success, .btn-info{
        width:100% !important;
    }
    @media (max-width:769px){
        #hostel_button{
            max-width:300px;
        }
    }
    @media (min-width:769px){
        #hostel_button{
            max-width:300px;
        }
    }

	
</style>

</head>

<?php require 'components/header.php'; ?>
<?php require 'components/back_to_top.php'; ?>

<body id="structure">
		



<div id="about-us" style="background: rgba(68,215,182,0.1); text-align: center;">
    
    <br />

    <div class="container" >

        <div class="row justify-content-center">

            <div class="col-12 justify-content-center">
            <h1 class="about-us-title"><span class="fa fa-users"></span><h1 style="font-size: 4rem"> BSW Structure</h1>
            <p> To go directly to Hostel Representatives, <a href="#hostel_reps" style="color: #007bff !important">Click Here</a></p>
            </div>

        </div>

    </div>

</div>

<div id="supervision" style="text-align:center" ></div>
<div class="my-4" style="background: rgba(68,215,182,0.1); padding-top: 20px;">
    
    <br />

    <div class="container " >

        <div class="row justify-content-center" style="text-align: center;">

            <div class="col-12 justify-content-center" style="margin-bottom:40px;"">
            <h1 class="about-us-title" style="font-size:50px;">Supervision</h1>
            </div>

        </div>

    </div>

</div>

<div class="container-fluid mx-2 " id="softwares-list" >



    <div class="row justify-content-center" style="text-align: center;">

        <div class="col-12 col-md-6 justify-content-center">

                <div class="card  my-2 text-dark mx-auto mx-md-4 ml-md-auto" style="max-width:300px;">
                    <img class="card-img-top" src="team2020/members/reetika-khera.jpg" alt="Card image cap">
                    <div class="card-header">Prof. Reetika Khera
                    <br>
                    <em>President</em>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary"  style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:reetika@hss.iitd.ac.in"> reetika@hss.iitd.ac.in</a></button><br>
                        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:01126597319"> 011-26597319</a></button><br>
                        <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> HUSS Department, MS644</button>
                    </div>
                </div>

        </div>
        
        <div class="col-12 col-md-6 justify-content-center">

            <div class="card  my-2 text-dark mx-auto mx-md-4 mr-md-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2020/members/ingole.jpg" alt="Card image cap">
                <div class="card-header">Prof. Pravin P Ingole
                <br>
                <em>Vice President</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:ppingole@chemistry.iitd.ac.in"> ppingole@chemistry.iitd.ac.in</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+911126597547"> +91 11 2659-7547</a></button><br>
                </div>
            </div>

        </div>

    </div>

    <div id="student team"></div>
<div class="my-4" style="background: rgba(68,215,182,0.1); padding-top: 20px; text-align: center" >
    
    <br />

    <div class="container" >

        <div class="row justify-content-center">

            <div class="col-12 justify-content-center" style="margin-bottom:40px;"">
            <h1 class="about-us-title" style="font-size:50px;">Student Team</h1>
            </div>

        </div>

    </div>

</div>

    <div class="row justify-content-center my-4" style="z-index: 1000; text-align: center" >

        <div class="col-12 col-md-6 justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;" id="offset-card">
                <img class="card-img-top" src="team2020/members/Aayush_Sharma.JPG" alt="Card image cap">
                <div class="card-header">Aayush Sharma
                <br>
                <em>General Seceratry</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary mt-1"  style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span> <a href="mailto:25sharmaaayush@gmail.com"> 25sharmaaayush@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span> <a href="callto:+918005875834"> +91 8005875834</a> </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Girnar</button>
                </div>
            </div>

        </div>
        

    </div>


    <div class="row justify-content-center my-4" style="text-align: center;">

        <div class="col-12 col-md-6 justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2020/members/Kartikayan Sharma.jpeg" alt="Card image cap">
                <div class="card-header">Kartikayan Sharma
                <br>
                <em>Deputy General Secretary (Operations)</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:kartikayansharma@gmail.com"> kartikayansharma@gmail.com</a></a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919968431431"> +91 9968431431</a>   </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Karakoram</button>
                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2020/members/Sharut_Gupta.jpeg" alt="Card image cap">
                <div class="card-header">Sharut Gupta
                <br>
                <em>Deputy General Secretary (Mentorship)</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:sharutgupta@gmail.com"> sharutgupta@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919877205405"> +91 9877205405</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Himadri</button>

                </div>
            </div>

        </div>
        

    </div>


    <div class="row" style="text-align: center;">

    <div class="container col-12 col-lg-5 hostel-card-outer my-4" style="padding: 10px">

    <div class="card-header"><h3>Secretaries</h3></div>

    <div class="row justify-content-center  mx-2 col-12" style="padding: 20px;">

        <div class="col-12 col-md-6  justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2020/members/7.jpg" alt="Card image cap">
                <div class="card-header">Prabhpreet Singh Bhatia 
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:yash.prabhpreet@gmail.com"> yash.prabhpreet@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919915438685"> +91 9915438685</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Girnar</button>

                </div>
            </div>

        </div>

        <div class="col-12 col-md-6  justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2020/members/Mihir_Kedia.jpeg" alt="Card image cap">
                <div class="card-header">Mihir Kedia
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:mihirkedia1208@gmail.com"> mihirkedia1208@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+918800908227"> +91 8800908227</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Kumaon</button>

                </div>
            </div>

        </div>
</div>
<div class="row justify-content-center mx-2 col-12" style="padding: 20px;">
        <div class="col-12 col-md-6  justify-content-center">

<div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
    <img class="card-img-top" src="team2020/members/20.jpg" alt="Card image cap">
    <div class="card-header">Franklin Gari
    <br>
    <em>Secretary</em>
    </div>
    <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:franklin02082001@gmail.com"> franklin02082001@gmail.com</a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+918248563561"> +91 8248563561</a>  </button><br>
        <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Jwalamukhi</button>

    </div>
</div>

</div>

<div class="col-12 col-md-6  justify-content-center">

<div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
    <img class="card-img-top" src="team2020/members/Prakhar.jpeg" alt="Card image cap">
    <div class="card-header">Prakhar 
    <br>
    <em>Secretary</em>
    </div>
    <div class="card-body">

                            <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:prakharsharma1999@gmail.com"> prakharsharma1999@gmail.com</a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+917055051155"> +91 7055051155</a>  </button><br>
        <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Aravali</button>

    </div>
</div>

</div>
</div>
</div>




<div class="container col-12 col-lg-5 hostel-card-outer my-4" style="padding: 10px">

    <div class="card-header"><h3>Coordinators</h3></div>

    <div class="row justify-content-center  mx-2 col-12" style="padding: 20px;">

        <div class="col-12 col-md-6  justify-content-center">

        <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2020/members/Tushar Bansal.jpg" alt="Card image cap">
        <div class="card-header">Tushar Bansal
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">

                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:tusharbansal.iitd@gmail.com"> tusharbansal.iitd@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919888554022"> +91 9888554022</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Vindhyachal</button>

        </div>
            </div>

        </div>

        <div class="col-12 col-md-6  justify-content-center">

        <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2020/members/Jayant Tarapure.jpg" alt="Card image cap">
        <div class="card-header">Jayant Tarapure
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">

                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:jayant.prasad1007@gmail.com"> jayant.prasad1007@gmail.com </a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+917619690407"> +91 7619690407</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Nilgiri </button>

        </div>
            </div>

        </div>
</div>
<div class="row justify-content-center mx-2 col-12" style="padding: 20px;">
        <div class="col-12 col-md-6  justify-content-center">

        <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2020/members/Vidushi Toshniwal.jpg" alt="Card image cap">
        <div class="card-header">Vidushi Toshniwal 
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">

                                <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:vidarya99@gmail.com "> vidarya99@gmail.com </a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+918209946497"> +91 8209946497</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Himadri </button>

        </div>
</div>

</div>

<div class="col-12 col-md-6  justify-content-center">

<div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2020/members/Shreyansh_Chanani.jpg" alt="Card image cap">
        <div class="card-header">Shreyansh Chanani
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
                                <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:shreyanshchanani123@gmail.com"> shreyanshchanani123@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+918777688535"> +91 8777688535</a> </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Satpura</button>

        </div>
</div>

</div>
</div>




</div>


</div>

        
        

    </div>






<div class="col-12 col-md-6 col-lg-3 justify-content-center">


    </div>

</div>

<div class="col-12 col-md-6 col-lg-3 justify-content-center">


    </div>

</div>


</div>

    
</div>
<div id="hostel_reps"></div>
<div style="background: rgba(68,215,182,0.1); padding-top: 20px;">
    
    <br />

    <div class="container" style="text-align: center;">

        <div class="row justify-content-center">

            <div class="col-12 justify-content-center" style="margin-bottom:40px;"">
            <h3 class="about-us-title" style="font-size:50px;">Hostel Representatives</h3>
            </div>

        </div>

    </div>

</div>


<div class="container-fluid justify-content-center mx-auto" style="text-align: center;">


<div class="row justify-content-center my-4" style="text-align: center;">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Aravali</h3></div>
        <div class="card-body row">

    <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2020/members/Devansh.jpg" alt="Card image cap">
        <div class="card-header">Devansh</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:devanshpanwar028@gmail.com"> devanshpanwar028@gmail.com </a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919548834345"> +91 9548834345</a>   </button><br>      
        </div>
    </div>

    <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
    <img class="card-img-top" src="team2020/members/Aditya Vimal.jpeg" alt="Generic placeholder image" >
        <div class="card-header">Aditya Vimal</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:adityavimal7042@gmail.com"> adityavimal7042@gmail.com </a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917042516607"> +91 7042516607</a>   </button><br>            </div>
    </div>

    </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Girnar</h3></div>

        <div class="card-body row">

        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2020/members/A Arish Khan.jpg" alt="Card image cap">
        <div class="card-header">A Arish Khan</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:arish250101@gmail.com"> arish250101@gmail.com</a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919407201205"> +91 9407201205</a>   </button><br>            </div>
        </div>


        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2020/members/Ayan_Jain.jpg" alt="Generic placeholder image" >
            <div class="card-header">Ayan Jain</div>
            <div class="card-body">
            <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:ayaen5601@gmail.com"> ayaen5601@gmail.com </a></button><br>
            <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919928118409"> +91 99281184095</a>   </button><br>            </div>
        </div>

    </div>
        </div>
    </div>


</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Himadri</h3></div>
        <div class="card-body row">

        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2020/members/Ashi Jain_.jpg" alt="Card image cap">
        <div class="card-header">Ashi Chakresh Jain</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:ashi102000@gmail.com"> ashi102000@gmail.com </a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919669720741"> +91 9669720741</a>   </button><br>            </div>
        </div>


        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2020/members/Alia Khan.jpg" alt="Generic placeholder image" >
            <div class="card-header">Alia Khan</div>
            <div class="card-body">
            <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:khanalia82939@gmail.com"> khanalia82939@gmail.com </a></button><br>
            <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919873915670"> +91 9873915670</a>   </button><br>            </div>
        </div>

        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Jwalamukhi</h3></div>
                <div class="card-body row">

        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2020/members/Rupesh Taneja.jpg" alt="Card image cap">
        <div class="card-header">Rupesh</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:rupeshtaneja2002@gmail.com"> rupeshtaneja2002@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919306546982"> +91 9306546982</a>   </button><br>            </div>
        </div>


        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2020/members/Rohan Mahala.jpg" alt="Generic placeholder image" >
            <div class="card-header">Rohan Mahala</div>
            <div class="card-body">
            <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:rohanmahala111201@gmail.com"> rohanmahala111201@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918529450516"> +91 8529450516</a>   </button><br>            </div>
        </div>

        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Kailash</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Sanskriti Agrawal.jpg" alt="Card image cap">
<div class="card-header">Sanskriti Agrawal</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:agrawalsanskriti1607@gmail.com"> agrawalsanskriti1607@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919166204789"> +91 9166204789</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Shloka Bhuwalka.jpg" alt="Generic placeholder image" >
    <div class="card-header">Shloka Bhuwalka </div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:shlokabhuwalka@gmail.com "> shlokabhuwalka@gmail.com  </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919727402350"> +91 9727402350</a>   </button><br>            </div>
</div>

        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Karakoram</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Sahil Bohra.jpg" alt="Card image cap">
<div class="card-header">Sahil Bohra</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:sahilbohra4@gmail.com">sahilbohra4@gmail.com
</button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917226892570">+91 7226892570</a></button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Arnav Singh.jpg" alt="Generic placeholder image" >
    <div class="card-header">Arnav Singh</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:arnavsingh.iitd@gmail.com "> arnavsingh.iitd@gmail.com  </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919810060263"> +91 9810060263</a>   </button><br>            </div>
</div>

        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Kumaon</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Shubham Singh Rathore.jpg" alt="Card image cap">
<div class="card-header">Shubham Singh Rathore</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:shubhamoliver23@gmail.com"> shubhamoliver23@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918112253582"> +91 8112253582</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Shubham Jakhar.jpeg" alt="Generic placeholder image" >
    <div class="card-header">Shubham Jakhar</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:shubham3400jakhar@gmail.com"> shubham3400jakhar@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919672061934"> +91 9672061934</a>   </button><br>            </div>
</div>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Nilgiri</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Ramandeep Singh.jpg" alt="Card image cap">
<div class="card-header">Ramandeep Singh</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:ramandeep0827@gmail.com"> ramandeep0827@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918360184122"> +91 8360184122</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Ojas_Srivastava.jpg" alt="Generic placeholder image" >
    <div class="card-header">Ojas Srivastava</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:ojas.srivastava.81.100@gmail.com"> ojas.srivastava.81.100@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918299116630"> +91 8299116630</a>   </button><br>            </div>
</div>

        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Satpura</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Aryan Dixit.jpg" alt="Card image cap">
<div class="card-header">Aryan Dixit</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:aryandixit1729@gmail.com"> aryandixit1729@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917834817826"> +91 7834817826</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Shravan Nawandar.jpeg" alt="Generic placeholder image" >
    <div class="card-header">Shravan Nawandar</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:shrawannawandar3501@gmail.com"> shrawannawandar3501@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917262093972"> +91 7262093972</a>   </button><br>            </div>
</div>

        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Shivalik</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Divyam Kaushik.jpg" alt="Card image cap">
<div class="card-header">Divyam Kaushik</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:ashimak25@gmail.com"> ashimak25@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919953898603"> +91 9953898603</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Nikhil Danwani.jpg" alt="Generic placeholder image" >
    <div class="card-header">Nikhil Danwani</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:nikhildanwani11@gmail.com"> nikhildanwani11@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918287565729"> +91 8287565729</a>   </button><br>            </div>
</div>

        </div>
    </div>

    </div>

</div>


<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Udaigiri</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Somya Maheshwari.jpg" alt="Card image cap">
<div class="card-header">Somya Maheshwari</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:somya0105@gmail.com">somya0105@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917073428707"> +91 7073428707</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Raj Gorhe.jpg" alt="Generic placeholder image" >
    <div class="card-header">Raj Gorhe</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:rajgorhe@gmail.com"> rajgorhe@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918554985701"> +91 8554985701</a>   </button><br>            </div>
</div>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Vindhyachal</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Sanwal Agarwal.jpeg" alt="Card image cap">
<div class="card-header">Sanwal Kumar Agarwal</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:sanwalagarwal0304@gmail.com"> sanwalagarwal0304@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+916387844342"> +91 6387844342</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Devansh Agrawal.jpg" alt="Generic placeholder image" >
    <div class="card-header">Devansh Agrawal</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:devansh.agrawal02@gmail.com"> devansh.agrawal02@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919314197570"> +91 9314197570</a>   </button><br>            </div>
</div>
        </div>
    </div>

    </div>

</div>

<div class="row justify-content-center my-4">

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Zanskar</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/30.jpg" alt="Card image cap">
<div class="card-header">Avi Agrawal </div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:avikuagrawal@gmail.com"> avikuagrawal@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919575891003"> +91 9575891003</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2020/members/Tarun Gaur.jpg" alt="Generic placeholder image" >
    <div class="card-header">Tarun Gaur</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:tarungaur81@gmail.com"> tarungaur81@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+916378181638"> +91 6378181638</a>   </button><br>            </div>
</div>
        </div>
    </div>

    </div>



</div>

</div>
</div>


        

        
<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



</body>
</html>
