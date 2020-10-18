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
                    <img class="card-img-top" src="team2019/members/reetika-khera.jpg" alt="Card image cap">
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
                <img class="card-img-top" src="team2019/members/vicepresident.jpeg" alt="Card image cap">
                <div class="card-header">Prof. Sudip Pattnayek 
                <br>
                <em>Vice President</em>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:sudip@chemical.iitd.ac.in"> sudip@chemical.iitd.ac.in</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+91112659101"> +91 11 2659101</a>8</button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Block-II, 283 (Office)</button>
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
                <img class="card-img-top" src="team2019/members/yogi.jpeg" alt="Card image cap">
                <div class="card-header">Yogendra Singh
                <br>
                <em>General Seceratry</em>
                </div>
                <div class="card-body">
                    <button class="btn" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/yks.11209111" style="color: white;"> @yks.11209111 </button></a><br>
                    <button class="btn btn-primary mt-1"  style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span> <a href="mailto:yks11209111@gmail.com"> yks11209111@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span> <a href="callto:+919711155131"> +91 9711155131</a> </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Vindhyachal</button>
                </div>
            </div>

        </div>
        

    </div>


    <div class="row justify-content-center my-4" style="text-align: center;">

        <div class="col-12 col-md-6 justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/aashiagrawal.jpeg" alt="Card image cap">
                <div class="card-header">Aashi Agarwal
                <br>
                <em>Deputy General Secretary (Operations)</em>
                </div>
                <div class="card-body">
                    <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/aashi.agarwal.3576224" style="color: white;"> @aashi.agarwal.3576224 </a></button><br>
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:aashiagarwal06@gmail.com"> aashiagarwal06@gmail.com</a></a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919690107820"> +91 9690107820</a>   </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Kailash</button>
                </div>
            </div>

        </div>

        <div class="col-12 col-md-6 justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/33.jpg" alt="Card image cap">
                <div class="card-header">Umesh Shahdadpuri
                <br>
                <em>Deputy General Secretary (Mentorship)</em>
                </div>
                <div class="card-body">
                    <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/umesh.shahdadpuri" style="color: white;"> @umesh.shahdadpuri </a></button><br>
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:umeshspuri14@gmail.com"> umeshspuri14@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919811839060"> +91 9811839060</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Girnar</button>

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
                <img class="card-img-top" src="team2019/members/27.jpg" alt="Card image cap">
                <div class="card-header">Aayush Sharma 
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                    <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/profile.php?id=100004418085951" style="color: white;"> Aayush Sharma </a></button><br>
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:sharmaaayushcoolaa@gmail.com"> sharmaaayushcoolaa@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+918005875834"> +91 8005875834</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Girnar</button>

                </div>
            </div>

        </div>

        <div class="col-12 col-md-6  justify-content-center">

            <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
                <img class="card-img-top" src="team2019/members/26.jpg" alt="Card image cap">
                <div class="card-header">Harshit Khanna
                <br>
                <em>Secretary</em>
                </div>
                <div class="card-body">
                    <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/harshit.khanna.1010" style="color: white;"> @harshit.khanna.1010 </a></button><br>
                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:harshitkhanna1010@gmail.com"> harshitkhanna1010@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919406559834"> +91 9406559834</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Aravali</button>

                </div>
            </div>

        </div>
</div>
<div class="row justify-content-center mx-2 col-12" style="padding: 20px;">
        <div class="col-12 col-md-6  justify-content-center">

<div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
    <img class="card-img-top" src="team2019/members/23.jpg" alt="Card image cap">
    <div class="card-header">Kartikayan Sharma
    <br>
    <em>Secretary</em>
    </div>
    <div class="card-body">
    <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/kartikayansharma.99" style="color: white;"><small> @kartikayansharma.99 </small></a></button><br>
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:yks11209111@gmail.com"> kartikayansharma@gmail.com</a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919968431431"> +91 9968431431</a>  </button><br>
        <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Karakoram</button>

    </div>
</div>

</div>

<div class="col-12 col-md-6  justify-content-center">

<div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
    <img class="card-img-top" src="team2019/members/34.jpg" alt="Card image cap">
    <div class="card-header">Siddharth Singh
    <br>
    <em>Secretary</em>
    </div>
    <div class="card-body">
    <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/siddharth.singh.92372446" style="color: white;"> <small>@siddharth.singh.92372446</small> </a></button><br>

                            <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:siddharth1606@gmail.com"> siddharth1606@gmail.com</a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919468841810"> +91 9468841810</a>  </button><br>
        <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Zanskar</button>

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
        <img class="card-img-top" src="team2019/members/25.jpg" alt="Card image cap">
        <div class="card-header">Bilv Patel
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
        <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/heisenberg.1147" style="color: white;"> @heisenberg.1147 </a></button><br>

                                <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:bilvpatel1758@gmail.com"> bilvpatel1758@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+918826077497"> +91 8826077497</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Nilgiri</button>

        </div>
            </div>

        </div>

        <div class="col-12 col-md-6  justify-content-center">

        <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/28.jpg" alt="Card image cap">
        <div class="card-header">Muskan Choudhary
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
        <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.5; border-radius: 10px" disabled ><span class="fa fa-facebook"></span> Muskan Choudhary </button><br>

                    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:muskan.choudhary06@gmail.com"> muskan.choudhary06@gmail.com </a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+917999676445"> +91 7999676445</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Himadri </button>

        </div>
            </div>

        </div>
</div>
<div class="row justify-content-center mx-2 col-12" style="padding: 20px;">
        <div class="col-12 col-md-6  justify-content-center">

        <div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/35.jpg" alt="Card image cap">
        <div class="card-header">Neharika Singhal
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
        <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/neharika.singhal.7" style="color: white;"> @neharika.singhal.7 </a></button><br>

                                <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:neharika98singhal@gmail.com"> neharika98singhal@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+919611519628"> +91 9611519628</a>  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Kailash</button>

        </div>
</div>

</div>

<div class="col-12 col-md-6  justify-content-center">

<div class="card  my-2 text-dark mx-auto" style="max-width:300px;">
        <img class="card-img-top" src="team2019/members/29.jpg" alt="Card image cap">
        <div class="card-header">Nishtha Gupta
        <br>
        <em>Coordinator</em>
        </div>
        <div class="card-body">
        <button class="btn mb-1" style="background-color: #1778F2; color: white; width:100%; opacity: 0.9; border-radius: 10px"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/nishtha.gupta.18" style="color: white;"> @nishtha.gupta.18 </a></button><br>
                                <button class="btn btn-primary" style="opacity:0.8; border-radius:10px"><span class="fa fa-envelope"></span><a href="mailto:nishtha.gupta97@gmail.com"> nishtha.gupta97@gmail.com</a></button><br>
                    <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;"><span class="fa fa-phone"></span><a href="callto:+910995823007"> +91 0995823007</a>9  </button><br>
                    <button class="btn btn-link disabled" style="color: black !important"><span class="fa fa-home"></span> Himadri</button>

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
        <img class="card-img-top" src="team2019/members/6.jpg" alt="Card image cap">
        <div class="card-header">Dipanshu Patidar</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:dkdk5122000@gmail.com"> dkdk5122000@gmail.com </a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917424905782"> +91 7424905782</a>   </button><br>      
        </div>
    </div>

    <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
    <img class="card-img-top" src="team2019/members/21.jpg" alt="Generic placeholder image" >
        <div class="card-header">Prakhar Sharma</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:prakharsharma1999@gmail.com"> prakharsharma1999@gmail.com </a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917055051155"> +91 7055051155</a>   </button><br>            </div>
    </div>

    </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Girnar</h3></div>

        <div class="card-body row">

        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2019/members/12.jpg" alt="Card image cap">
        <div class="card-header">Gaurav Chauhan</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:gauravseema1411@gmail.com"> gauravseema1411@gmail.com </a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+916239961770"> +91 6239961770</a>   </button><br>            </div>
        </div>


        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2019/members/7.jpg" alt="Generic placeholder image" >
            <div class="card-header">Prabhpreet Singh</div>
            <div class="card-body">
            <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:yash.prabhpreet@gmail.com"> yash.prabhpreet@gmail.com </a></button><br>
            <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919915438685"> +91 9915438685</a>   </button><br>            </div>
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
        <img class="card-img-top" src="team2019/members/11.jpg" alt="Card image cap">
        <div class="card-header">Ichha Rathod</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:ichharathod@gmail.com"> ichharathod@gmail.com </a></button><br>
        <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919664114447"> +91 9664114447</a>   </button><br>            </div>
        </div>


        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2019/members/24.jpg" alt="Generic placeholder image" >
            <div class="card-header">Ishita Chawla</div>
            <div class="card-body">
            <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:chawlaishita13@gmail.com"> chawlaishita13@gmail.com </a></button><br>
            <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918375883773"> +91 8375883773</a>   </button><br>            </div>
        </div>

        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Jwalamukhi</h3></div>
                <div class="card-body row">

        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2019/members/20.jpg" alt="Card image cap">
        <div class="card-header">Franklin Gari</div>
        <div class="card-body">
        <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:franklin02082001@gmail.com"> franklin02082001@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918248563561"> +91 8248563561</a>   </button><br>            </div>
        </div>


        <div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
        <img class="card-img-top" src="team2019/members/13.jpg" alt="Generic placeholder image" >
            <div class="card-header">Abhimanyu Singh</div>
            <div class="card-body">
            <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="abhimanyu1867@gmail.com"> abhimanyu1867@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919588354698"> +91 9588354698</a>   </button><br>            </div>
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
<img class="card-img-top" src="team2019/members/22.jpg" alt="Card image cap">
<div class="card-header">Ruchika Kumari</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:kumariruchika885@gmail.com"> kumariruchika885@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918271812751"> +91 8271812751</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/10.jpg" alt="Generic placeholder image" >
    <div class="card-header">Sakshi Bhandari</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:bsak2222@gmail.com"> bsak2222@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919586597182"> +91 9586597182</a>   </button><br>            </div>
</div>

        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Karakoram</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="images/aa.jpg" alt="Card image cap">
<div class="card-header">Aayush Agarwal</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:agarwalaayushindia@gmail.com">agarwalaayushindia@gmail.com
</button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917667063595">+91 7667063595</a></button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/15.jpg" alt="Generic placeholder image" >
    <div class="card-header">Piyush Gupta</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:piyush37gupta@gmail.com"> piyush37gupta@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919425707560"> +91 9425707560</a>   </button><br>            </div>
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
<img class="card-img-top" src="team2019/members/32.jpg" alt="Card image cap">
<div class="card-header">Hardik Tanwar</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:tmkoc2000@gmail.com"> tmkoc2000@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919530368472"> +91 9530368472</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/3.jpg" alt="Generic placeholder image" >
    <div class="card-header">Mihir Kedia</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:mihirkedia1208@gmail.com"> mihirkedia1208@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918800908227"> +91 8800908227</a>   </button><br>            </div>
</div>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Nilgiri</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/2.jpg" alt="Card image cap">
<div class="card-header">Jatin Goel</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:goel.jatin2001@gmail.com"> goel.jatin2001@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919716338929"> +91 9716338929</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/8.jpg" alt="Generic placeholder image" >
    <div class="card-header">Puru Arora</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:puruarora1@gmail.com"> puruarora1@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918448555978"> +91 8448555978</a>   </button><br>            </div>
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
<img class="card-img-top" src="team2019/members/19.jpg" alt="Card image cap">
<div class="card-header">Arvin Goyal</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:arving1908@gmail.com"> arving1908@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919517649345"> +91 9517649345</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/31.jpg" alt="Generic placeholder image" >
    <div class="card-header">Raghav Ajitsaria</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:ajitsaria.raghavr1@gmail.com"> ajitsaria.raghavr1@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917595868183"> +91 7595868183</a>   </button><br>            </div>
</div>

        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Shivalik</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/17.jpg" alt="Card image cap">
<div class="card-header">Ayush Kanodia</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:akanodia11@gmail.com"> akanodia11@gmail.com</a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919451422334"> +91 9451422334</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/4.jpg" alt="Generic placeholder image" >
    <div class="card-header">Siddhant Choudhary</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:sid2001.iitd@gmail.com"> sid2001.iitd@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919935029433"> +91 9935029433</a>   </button><br>            </div>
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
<img class="card-img-top" src="team2019/members/9.jpg" alt="Card image cap">
<div class="card-header">Chirag Maheshwari</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:chiragmahheshwari@gmail.com"> chiragmahheshwari@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+918233957000"> +91 8233957000</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/16.jpg" alt="Generic placeholder image" >
    <div class="card-header">Shikhar Anand</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:anandshikhar99@gmail.com"> anandshikhar99@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917000680741"> +91 7000680741</a>   </button><br>            </div>
</div>
        </div>
    </div>

    </div>

    <div class="col-12 col-md-6  justify-content-center">

    <div class="hostel-card-outer card  my-2 text-dark mx-auto">
        <div class="card-header"><h3>Vindhyachal</h3></div>
        <div class="card-body row">

<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/5.jpg" alt="Card image cap">
<div class="card-header">Gaurav Pande</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:gaurav24061999@gmail.com"> gaurav24061999@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+917219584694"> +91 7219584694</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/18.jpg" alt="Generic placeholder image" >
    <div class="card-header">Yash Jain</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:yash.jain.guwahati@gmail.com"> yash.jain.guwahati@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+919706099045"> +91 9706099045</a>   </button><br>            </div>
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
<img class="card-img-top" src="team2019/members/30.jpg" alt="Card image cap">
<div class="card-header">Bhupender Dhaka</div>
<div class="card-body">
<button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:bhupenderdhaka226@gmail.com"> bhupenderdhaka226@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+916377593404"> +91 6377593404</a>   </button><br>            </div>
</div>


<div class="card  my-2 text-dark mx-auto col-12 col-md-6 hostel-inner-card" style="max-width:300px;" >
<img class="card-img-top" src="team2019/members/1.jpg" alt="Generic placeholder image" >
    <div class="card-header">Sanidhya Jain</div>
    <div class="card-body">
    <button class="btn btn-primary" style="opacity:0.8; border-radius:10px" style="font-size:16px; " id="hostel_button"><span class="fa fa-envelope"></span><a href="mailto:sanidhyaleo10@gmail.com"> sanidhyaleo10@gmail.com </a></button><br>
                <button class="btn btn-success my-1" style="opacity: 0.8; border-radius: 10px;" style="font-size:16px; " id="hostel_button"><span class="fa fa-phone"></span><a href="callto:+916264363313"> +91 6264363313</a>   </button><br>            </div>
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
