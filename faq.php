<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>FAQs | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style type="text/css">

body{
        background-color: rgba(68,215,182,0.18) !important;
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

    .faq-option{
        background-color:purple;
        color:#fff;
        border-radius:20px;
        width:90%;
        height: 200px;
        padding:10px;
    }

    #pills-tabContent{
        font-size:16px;
    }
    .rotate{
     -moz-transform:rotate(180deg);
     -webkit-transform:rotate(180deg);
     -o-transform:rotate(180deg);
     -ms-transform':rotate(180deg);
     transform:rotate(180deg);
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

            <div class="col-12 my-4 justify-content-center">
            <h1 class="about-us-title"><span class="fa fa-question-circle"></span> FAQs</h1>
            <p class="about-us-text">Some of the most frequently asked questions by the student community answered by the BSW team. </p>
            </div>

        </div>

    </div>

</div>


<div class="container-fluid">
<ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-home" aria-selected="true">General</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-overview-tab" data-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="false">Overview</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-cad-tab" data-toggle="pill" href="#pills-cad" role="tab" aria-controls="pills-cad" aria-selected="false">Course Add & Drop</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-cwa-tab" data-toggle="pill" href="#pills-cwa" role="tab" aria-controls="pills-cwa" aria-selected="false">Course Withdraw & Audit</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-dr-tab" data-toggle="pill" href="#pills-dr" role="tab" aria-controls="pills-dr" aria-selected="false">Degree Requirements</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-hu-tab" data-toggle="pill" href="#pills-hu" role="tab" aria-controls="pills-hu" aria-selected="false">HU Category</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-ma-tab" data-toggle="pill" href="#pills-ma" role="tab" aria-controls="pills-ma" aria-selected="false">Minor Area</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-grade-tab" data-toggle="pill" href="#pills-grade" role="tab" aria-controls="pills-grade" aria-selected="false">Grades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-ast-tab" data-toggle="pill" href="#pills-ast" role="tab" aria-controls="pills-ast" aria-selected="false">Assistantship</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-ngu-tab" data-toggle="pill" href="#pills-ngu" role="tab" aria-controls="pills-ngu" aria-selected="false">Non Graded Units</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-intern-tab" data-toggle="pill" href="#pills-intern" role="tab" aria-controls="pills-intern" aria-selected="false">Internships</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade show active" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">

                                    <div class="panel panel-default" style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; margin-bottom: 10px;">

                                                    <a data-toggle="collapse" href="#collapse1">
                                                    <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. When can I contact the BSW representatives/ secretaries? 
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq1"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse1" class="panel-collapse collapse ">
                                                        <div class="panel-body" style="padding:10px;" style="padding: 20px;">You can contact any rep or secy
                                                            at any time regarding any problem through the contact details given in the
                                                            Contact Us page.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse2">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Can I be a part of BSW in any form?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq2"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse2" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Yes. BSW exists solely for student welfare and if you
                                                            have any idea/suggestion for it, you are welcome to join the family and work
                                                            for it.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse3">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Are there any benefits which the BSW provides me?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq3"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse3" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Besides all the loans, grants and scholarships given
                                                            through the caution money, BSW has brought about many deals and discounts at
                                                            SDA market, Greenpark, Priya etc. for IITD students which can be gotten by
                                                            displaying your ID card.<br>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse4">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What are the swimming facilities in and around the campus?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq4"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse4" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">IIT Delhi has Olympic Size swimming pool. Other swimming
                                                            pools near our campus are:<br>
                                                            a. JNU swimming pool<br>
                                                            b. DDA Munirka<br>
                                                            c. DDA Saket
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse5">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What are the timings of BSW bus services?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse5" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Mon-Fri 7:50am, 8:00am, 8:05 am ; 8:50am, 9:00am, 9:05
                                                            am
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse6">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What is DISCO ?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse6" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">DISCO- Everyone is curious to know what happens in it,
                                                            yet, nobody wants to be in one. It is the Disciplinary Committee, which is
                                                            called upon only when you have messed up things real bad(and got caught).
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse7">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What is proctoral team?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse7" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">A group of professors who can turn up in your hostel
                                                            rooms any time for any sort of inspection should they have any suspicions on
                                                            you.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse8">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What are the timings of library and Ex-Hall?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse8" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Ex-hall is open 24X7. Library will be open 24x7 w.e.f
                                                            January 1, 2015.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse9">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Can we move in/out of the campus any time?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse9" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Yes. You live in a free country and a free campus. You
                                                            are free to move in and out whenever you wish to. But from 1am- 6am,
                                                            entry/exit is only through Main Gate.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse10">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Are girls allowed in boys hostel? and vice-versa?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse10" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">No. IIT Delhi is one of the strictest institutes in
                                                            India when it comes to this. No girl can enter beyond the visitor's room in
                                                            a boy's hostel and vice-versa. Only on one day(the house day) can a girl
                                                            have complete access in some boys hostel. For entering the girls' hostels,
                                                            its either the house day(Complete access) or the informals(limited access)
                                                            held annually.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse11">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. When can we apply for department change?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse11" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">a. At the end of 1st year, after the end-sem exams, the
                                                            forms are released in the internal web. You will be notified about it.<br>
                                                            b. Also at the end of third year you can change from btech to dual degree
                                                            course in same branch.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse12">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Canteens/restaurants in/near the campus?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse12" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">a. In campus - <br>
                                                            Insti Area- Cafe Coffee Day (CCD), Lipton, Amul, Nescafe, Canteen and Staff
                                                            canteen(in Synergy Building)<br>
                                                            Boys Hostel Area - Lipton, Tea Halt (in hostels), night canteen, Coca Cola
                                                            stand in SAC area, Mother Diary outlets (in Kumaon and near Nilgiri Hostel),
                                                            Southy outlet and Canteen<br>
                                                            Girls Hostel Area - Night canteens, Mother Daiwhatry (near Girls Hostel gate)
                                                            <br>
                                                            b. Outside -<br>
                                                            SDA complex (opposite main gate)<br>
                                                            Sassi da dhaba (outside hostel gate)<br>
                                                            Green Park Market (1.5kms from main gate)<br>
                                                            Hauz Khas Village (2kms from main gate).<br>
                                                            Essex (outside Girls Hostel gate)<br>
                                                            South indian restaurants - Southy (opposite Aravali Hostel), Govardhan (500m
                                                            from Girls Hostel gate, along aurobindo marg), Naivaidyam (Hauz Khas
                                                            Village)
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse13">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Which is the metro station nearest to IIT?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse13" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">As of now, Hauz Khas metro station is the metro station
                                                            nearest to IIT Delhi. But hopefully within a couple of years, a metro
                                                            station will prop-up near IITD Hostel gate (Part of Phase-3 Delhi Metro
                                                            Project- 2013 deadline- hopefully it will not be extended by more than a
                                                            year).
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse14">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. How to reach IIT campus?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse14" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">For all those who cannot reach google maps:<br>
                                                            From New Delhi Railway station- Metro to Hauz Khas then auto. OR Pre-paid
                                                            taxi from railway station(beware of thugs) OR bus route- 781 - 507
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse15">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What is proxy limit and what happens once it is squished?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse15" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">For all queries related to internet, proxy, softwares
                                                            available for students' usage, Wifi settings, refer
                                                            http://www.cc.iitd.ac.in/CSC/ . Nothing substitutes original.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse16">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. How can I be allowed to stay in hostel during vacations?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse16" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Students are not allowed to stay in hostel during
                                                            vacations unless they have beforehand informed the warden/care-taker about
                                                            their stay. They will be permitted only in case they are doing a course/
                                                            project/internship within the binding of the institute.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse17">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What is I grade?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse17" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">If you are unable to complete the entire requirement for
                                                            a course due to extraordinary circumstances (e.g. absence from major test or
                                                            final evaluation of project), you may request for I grade provided you
                                                            satisfy attendance requirements. Apply to the Head of the Department.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse18">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Am I allowed to bring my bike/car to campus?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse18" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">No. No student residing within the campus is allowed to
                                                            use a motorised vehicle(Not even a moped) within the campus. It would result
                                                            in the immediate cancellation of the hostel seat, strict disciplinary action
                                                            and a fine of Rs. 5000(for 2-wheelers) and Rs.10000(for 4-wheelers). Too
                                                            much for a vehicle. Go Green. Go cycling.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse19">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What Medical facilities are available near the campus?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse19" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Hospital in campus open 24hrs. If facilities are
                                                            insufficient here, you are referred to AIIMS/Safdargunj. Ambulance is
                                                            available on campus anytime. Just contact the nearest security guard and he
                                                            will make sure the ambulance is right there within no time.
                                                            Also, there are a lot of Private Hospitals near IITD. You may ask the
                                                            ambulance to take you there instead if things are serious and cannot wait to
                                                            reach AIIMS. Do not worry about the hospital fee as it is covered by your
                                                            Medical Insurance.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse20">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What to do if I-Card is lost ?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse20" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Go to the UG section & a new I-card would be made after
                                                            a fine of Rs. 500.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse21">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Nearby movie theatres
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse21" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">a. PVR Priya<br>
                                                            b. PVR Anupam<br>
                                                            c. PVR Saket<br>
                                                            d. Select City Walk
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse22">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What is GCL ?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse22" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">General computing lab. It is open 24 hrs for CS students
                                                            only.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse23">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What to do if I-Card is lost ?. Where to get pens, registers,
                                                                calculators and lab coats from?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse23" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">SCOOPS</div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse24">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Where to go for books?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse24" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">There is a Book Camp to be organised by BSW in a few
                                                            days where you can get books in subsidized prices. Or you can go to Ber
                                                            Sarai for books or you can always ask your seniors.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse25">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Where to get things like soap shampoo etc from ?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse25" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Shops in neelkanth (near girls' hostel), Shops in
                                                            Kailash and Himadri
                                                            Gupta store (near boys' hostel)
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse26">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What is ODC ?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse26" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">It is the internal LAN facility in most of the hostels
                                                            for easy sharing of data without the loss of your proxy.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse27">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. How to get a medical booklet and what is the use of it?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse27" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Go to the UG section with a photo except the lunch time
                                                            and ask for the booklet... it is used as a record for your medical
                                                            conditions and without that medical certificate won't be given.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse28">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. What is a medical certificate, what is the use and how to get it?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse28" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">It is a proof signed by the doctor of the medical reason
                                                            of your leave. If you have a medical certificate, then you can be allowed to
                                                            give reminors and remajors only. To get it, go to the iitd hospital that day
                                                            only and get it checked by the doctor.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse29">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. Are we allowed to go anywhere in the IIT campus?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse29" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Yes, you are allowed to go anywhere with your ID card.
                                                            Except anywhere risky, or if restricted then not allowed.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse30">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q. In case of stress issues, where should we go to treat with them?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse30" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">Well, first of all you should go to your appointed
                                                            mentors and discuss with them your problems. If still not solved then you
                                                            can go to the Student Counseling Service(SCS) office and contact Dr. Rupa
                                                            Murgai. Also attend the SCS workshops to be organised for further help.
                                                        </div>
                                                    </div>
                                                </div>
  </div>

  <div class="tab-pane fade" id="pills-overview" role="tabpanel" aria-labelledby="pills-profile-tab">

                                                <div class="panel panel-default"
                                                                         style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse31">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 What are the total credits as per the new system?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse31" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b> The total number of credits required for a four year course have been decreased from 180 to 145-155 depending upon the degree requirements formulated by each department.
                                                                <br>For dual degree, the requirements are typically B Tech. requirements + M Tech requirements - (about 10 credits).
                                                                <br>Apart from this, there are 15 non-graded units to be completed compulsorily as a degree requirement.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse32">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 What are the graded credits?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse32" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b> The credits which add up to give your CGPA are called graded credits. The break-up of the graded credits is as follows:-
                                                                <br>a. <b>Departmental credits</b>: 65-80 credits which include a minimum of 10 credits for elective courses.
                                                                <br>b. <b>Outside Department requirement</b> which further has the following components:-
                                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;1. <b>Basic Sciences (BS)</b>: 22 credits. It includes courses from Mathematics, Physics, Chemistry and Biology departments. These courses are compulsory for all undergraduate students.
                                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;2. <b>Engineering Arts and Sciences (EAS)</b>: 18 credits - consisting of courses of Electrical Engineering, Computer Science and Mechanical Engineering fundamentals along with a course on Environmental Science.
                                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;3. <b>Humanities and Social Sciences (HUSS)</b>: 15 credits of undergraduate electives from Humanities and Social Sciences. It includes 200 level courses (4 credits) and 300 level courses (3 credits).To be eligible for a 300 level course, a student needs to complete 2 courses at 200 level in Humanities category.
                                                                <br><br>The above add up to a total of 55 credits. In addition to the above requirements, a maximum of 15 credits have been allocated for departments to specify programme specific requirements of Basic Sciences and Engineering Arts and Sciences Courses, called Program – Linked courses.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse33">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 What are the non-graded units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse33" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b> These units do not add to your CGPA but have to be earned as a compulsory part of degree requirement. The break-up of the non-graded units is as follows:-
                                                                <br>1. Introduction to Engineering and the programme: 2 units
                                                                <br>2. Language and Writing skills: 2 units
                                                                <br>3. NCC/NSO/NSS: 2 units
                                                                <br>4. Professional Ethics and Social Responsibility: 2 units
                                                                <br>5. Communication Skill/Seminar: 2 units
                                                                <br>6. Design/Practical Experience: 5 units
                                                                <br><br>For more details, please refer to the <b>'NON-GRADED UNITS'</b> section.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse34">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.4 What are capability linked opportunities?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse34" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b> 1. A student who completes all 1st year courses (34 credits) with CGPA 7.0 or above will be allowed to register for additional credits from 3rd semester onwards.
                                                                <br>2. A student can register for up to 26 credits/semester provided:
                                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;a)	The student has cleared all courses he has registered so far.
                                                                <br>&nbsp;&nbsp;&nbsp;&nbsp;b)	His/her CGPA is 7 or above
                                                                <br>3. If he/she has cleared 20*N credits (N is the total semesters spent) but might not meet the above requirements, then he can register for 24 credits/semester at maximum.
                                                                <br>4. A student registering for 26 credits in each semester can complete a maximum of 190 credits. A student registering for 24 credits in each semester can complete a maximum of 178 credits. Given that the graduation requirement is 145-155 credits, this amounts to 23-45 additional credits in four years.
                                                                <br>5. A student can make use of these extra credits to opt for either of the following or both of: minor/interdisciplinary area specialization or parent departmental specialization each of which is worth 20 credits.
                                                                <br>6. Students can choose either or both of above. The student may not opt for either of them but can do additional credits through open choice of courses and these shall be indicated in the transcript.
                                                                <br>7. The 10 open category credits may also be used for departmental specialization and/or minor area.</p>

                                                        </div>
                                                    </div>
                                                </div>

</div>
  
  
  <div class="tab-pane fade" id="pills-cad" role="tabpanel" aria-labelledby="pills-cad-tab">
  <div class="panel panel-default"
                                                                         style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse35">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 What are the minimum and maximum number of credits that can registered for?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse35" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Register for a minimum of 15 credits and a maximum of 26 credits in a semester, subject to a maximum of 7 lecture courses. 26-28 credits can be done in two semesters subject to a few restrictions.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse36">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 Can I register for 28 credits while doing Major Project?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse36" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>No this is not allowed.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse37">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 Are there any special restrictions on the number of credits that a student can register for?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse37" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The registration of any student will be limited to 1.25 times the average earned credits of the previous two registered semesters, subject to a minimum of 15 credits and a maximum of 26 credits.
                                                                <br>In the 9th and 10th semesters, Dual Degree students will normally register for a minimum of 12 credits and a maximum of 22 credits per semester.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse38">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.4 Will non-departmental courses of 700 and 800 level qualify as OC?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse38" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Yes they will. Just make sure that you have the eligibility to do a 700 or 800 level course.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse39">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.5 Up to what limit are HU courses counted in OC?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse39" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>One can do any number of HU course towards OC credits. They should be above the mandatory 15 credits to be done in HU category.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse40">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.6 Can mini project be done when someone is registered for BTP or MTP in the same semester?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse40" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Yes.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse41">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.7 What is the maximum number of Lecture courses that can be done in a semester?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse41" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Student can do maximum 7 'L' (Lecture) in a semester.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse42">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.8 Are the ‘V’ courses with course structure (1-0-0) counted as Lecture courses?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse42" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Yes they are counted as Lecture course.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse43">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.9 How many times can I do 28 credits during my degree?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse43" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>28 Credits can be done in maximum two semesters.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse44">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.10 Can I do more than one HUL course in a semester and get them counted towards HU credits?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse44" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Seats in HU courses are usually limited. Subject to availability of seats, this may be allowed or disallowed in a given semester.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse45">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.11 What is the minimum number of Lecture credits that one can register in a semester?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse45" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Minimum 9 "lecture credits" must be registered in every semester.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse46">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.12 What are the requirements for registering for a Mini Project and Independent Study?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse46" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>For taking a mini project course, one has to have minimum 6.5 CGPA and 65 earned credits. And for taking an independent study course, one has to have minimum 7.5 CGPA and 65 earned credits.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse47">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.13 What are the Pre-requisite earned credits for special courses?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse47" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Independent Study: 65
                                                                <br>Mini Project: 65
                                                                <br>Minor Project (Dual Degree): 100
                                                                <br>B. Tech. Major Project Part 1: 100
                                                                <br>M. Tech. Major Project Part 1 (Dual Degree /Integrated M. Tech.): 135
                                                                <br>Practical Training (summer): 30 (at the time of registration), 45 (before joining)
                                                                <br>Practical Training (semester): 60 (at the time of registration), 75 (before joining)</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse48">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.14 Are PG students allowed to register for 100-400 level courses?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse48" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>No. These are core and elective courses for UG programmes. These courses are not open to any PG student.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse49">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.15 Can UG students register for 700-800 level courses?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse49" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>If no pre-requisite is specified for 700 and 800 level courses, a UG student needs to earn 75 and 100 credits to register for 700 and 800 level courses, respectively.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse50">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.16 Can a 700 level course be done without fulfilling the criteria of 75 credits?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse50" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Normally, No.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse51">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.17 Are 500 level courses only for M.Sc. students?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse51" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Yes. These courses are not open to other UG or PG students.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse52">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.18 Is registration in an overlapping course as an alternative to a core course allowed?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse52" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>No.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse53">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.19 What needs to be done for registration validation?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse53" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Before the first day of classes, every student is required to be present on campus and validate his/her registration by logging in at the website. The updated registration record will be available on the website.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse54">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.20 What is the consequence of non-validation of registration?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse54" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>If a student does not login for validating registration, he/she can’t add or drop courses.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse55">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.21 Can a Special Module Course 'V' be registered for if the pre-requisite course is being done at the time of registration?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse55" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Normally, No.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse56">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.22 After adding courses, when we will know whether we got the course or not?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse56" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The UG section runs checks typically once a day to check for vacancies in courses. Add-drop happens on a first come – first serve basis only.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse57">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.23 How many Mini Projects can a student take outside his/her department?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse57" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student can do maximum of 1 Mini Project outside his/her department.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse58">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.24 Will Biology and Environment courses be floated every semester? Can we do these courses whenever we like during our degree tenure?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse58" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Yes, but seats will be limited to students for whom the course is scheduled in that semester. Students are advised not to switch the semester of these courses as per their convenience since the logistics for these large courses do not allow the flexibility.</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default"
                                                     style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse58">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.24 Will Biology and Environment courses be floated every semester? Can we do these courses whenever we like during our degree tenure?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse58" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Yes, but seats will be limited to students for whom the course is scheduled in that semester. Students are advised not to switch the semester of these courses as per their convenience since the logistics for these large courses do not allow the flexibility.</p>

                                                        </div>
                                                    </div>
  
                                                </div>
</div>

<div class="tab-pane fade" id="pills-cwa" role="tabpanel" aria-labelledby="pills-cwa-tab">
<div class="panel panel-default"
                                                                         style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse59">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 What is the minimum number of credits earned to be eligible to audit a course?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse59" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Minimum 85 credits should be earned in order to be eligible to audit a course.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse60">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 Can Minor Area courses be audited?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse60" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>If aiming for a minor area, the courses contributing to the minor degree must not be audited.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse61">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 Can I audit the credits in addition to the total credit requirement?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse61" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The 8-credit limit on audit courses applies within graduation requirements. Credits in addition to the total credit requirement for the completion of a degree are auditable.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse62">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.4 Who sets up the audit pass criteria and when?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse62" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The course instructor/coordinator has the right to set an audit pass criteria but this should be done at the beginning of the semester and conveyed to the students properly.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse63">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.5 Are there any restrictions on the Audit facility?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse63" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>(a) <b>B. Tech. (4-year) programme</b>: A maximum of 8 credits from the elective courses in any category out of the total credits required for B. Tech. degree may be completed on audit basis.
                                                                <br>(b) <b>Dual-degree programme</b>: A maximum of 8 credits from the elective courses in any category may be completed on audit basis from the UG part of the programme.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse64">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.6 Can dual degree students audit Program Electives (PE)?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse64" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>No. M. Tech. courses cannot be audited.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse65">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.7 Can a HM category course be audited?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse65" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Undergraduate elective courses include DE, HM and OC. Any of these courses can be audited subject to the above mentioned restrictions.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                     
</div>

<div class="tab-pane fade" id="pills-dr" role="tabpanel" aria-labelledby="pills-dr-tab">

<div class="panel panel-default" style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse66">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 Is there any CGPA requirement to be eligible for obtaining the respective degree?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse66" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student must obtain a minimum Cumulative Grade Point Average (CGPA) of 5 to be eligible for award of the B.-Tech. degree and 5.5 for the Integrated M. Tech. degree. The minimum CGPA requirement for M. Tech. part of dual degree programme is 6.0. Exceptions are dealt according to special rules given in course of study.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse67">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 Is there some provision for those who can’t obtain the stipulated credits required for the degree?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse67" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>If a student has earned at least two-thirds of the valid credits for the degree for which he/she is registered, then he/she can apply for the award of a diploma.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse68">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 What is the procedure of mentioning the distribution of our OC, DE and PEs to the UG section and settle the degree requirement issues?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse68" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>At any point in time, a student can check his/her status of graduation requirements using the “Advisement” report on the campus ERP. Discrepancies should be sorted in time and shortfall categories completed, to ensure graduation.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    
<div class="tab-pane fade" id="pills-hu" role="tabpanel" aria-labelledby="pills-hu-tab">           


                                    <div class="panel panel-default"
                                                                         style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse69">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 How many credits do I have to do in HU category?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse69" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>In total you have to do 15 credits in HU category (including 1 credit for HUN)</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse70">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 Which courses can be done in HU category?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse70" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>It includes 200 level courses (4 credits) and 300 level courses (3 credits). To be eligible for a 300 level course, a student needs to complete 2 courses at 200 level in Humanities category. Some courses of the Department of Management Studies are also included in this category.  These courses would be equivalent to 200-level HU courses in terms of allotment rules.</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse71">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 Are HUL 700,800 level courses counted towards HM or do they fulfil the OC requirements?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse71" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>They fulfil OC requirement.</p>

                                                        </div>
                                                    </div>
                                                </div>

</div>

<div class="tab-pane fade " id="pills-ma" role="tabpanel" aria-labelledby="pills-ma-tab">

                   
                            <div class="panel panel-default"
                                                                         style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse72">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 Can a student do multiple minor degrees/departmental specialization/interdisciplinary specialization?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse72" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Yes. Up to 2 such Proficiency linked options are possible.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse73">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 What is the complete list of departments offering minor area and the courses which need to be done?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse73" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Please wait for courses of study. This is a long list.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse74">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 Is there an upper limit on the maximum number of students who can enroll for a minor area in a particular department? If yes, what is the criteria for selecting them?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse74" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Each minor area specifies its own limits, and will be listed in the courses of study.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse75">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.4 I have done a course, which is an overlapping course with an optional course for minor degree. Will the course be considered valid for my minor degree requirement?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse75" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>If any course of a minor area overlaps with any core course (DC or PC category courses) or elective course (DE or PE category courses) of the student’s programme, then credits from this course will not count towards the minor area credit requirements, though this course may contribute towards satisfying the core requirement of the minor area. In such a case, the requirement of 20 credits must be completed by taking other courses of the minor area.</p>

                                                        </div>
                                                    </div>
                                                </div>
</div>

<div class="tab-pane fade " id="pills-grade" role="tabpanel" aria-labelledby="pills-grade-tab">

                                    <div class="panel panel-default"
                                                                         style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse76">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 What is the basis for awarding grades?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse76" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The process of awarding grades is not based upon fitting performance of the class to some statistical distribution. The course coordinator and associated faculty for a course formulate appropriate procedure to award grades that are reflective of the student’s performance vis-a-vis instructor’s expectation.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse77">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 Do 'E' &amp; 'F' grades stay permanently on the grade card?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse77" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>‘E’ and ‘F’ grades secured in any course stay permanently on the grade card. These grades are not counted in the calculation of the CGPA; however, these are counted in the calculation of the SGPA.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse78">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 How is an 'E' grade different from 'F' grade?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse78" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Apart from a higher SGPA, an ‘E’ grade in a course makes a student eligible to repeat the course in the summer semester, if the course is offered (only for undergraduate students).</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse79">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.4 What is an 'I' grade?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse79" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>An ‘I’ grade denotes incomplete performance in any L (lecture), P (practical), V (special module) category courses. It may be awarded in case of absence on medical grounds or other special circumstances, before or during the major examination period.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse80">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.5 What is the time limit for award of 'I' grade?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse80" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Requests for I-grade should be made at the earliest but not later than the last day of major tests. The student should complete all requirements within the first week of the next semester.
                                                                <br>The request is to be made to Dean (Academics). A student may be considered for award of I grade in a course only if attendance in the course is 75 %.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse81">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.6 Does the 'I' grade remain permanently on the grade sheet?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse81" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Upon completion of all course requirements, the ‘I’ grade is converted to a regular grade (A to F, NP or NF). ‘I’ grade does not appear permanently in the grade card.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse82">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.7 What is the 'X' grade?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse82" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The ‘X’ grade is awarded for incomplete work in Independent Study, Mini Project, Minor Project, or Major Project Part 1 and Part 2, based on the request of the student. On completion of the work, X grade can be converted to a regular grade within the first week of the next semester. Otherwise, the student will be awarded ‘X’ grade on a permanent basis and it will appear in his/her grade card. Further, the student will be required to register for the course in the next semester. The credits of the course will be counted towards his total load for the semester. In case of Major Project Part 1, the student will not be permitted to register for Major Project Part 2 simultaneously as Major Part 1 is a pre-requisite for Major Project Part 2. A student can be awarded ‘X’ grade only once in a course, other than the summer semester.</p>

                                                        </div>
                                                    </div>
                                                </div>
</div>

<div class="tab-pane fade " id="pills-ast" role="tabpanel" aria-labelledby="pills-ast-tab">

                                    <div class="panel panel-default"
                                                                         style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse83">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 What are the eligibility criteria for Assistantship for Dual Degree?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse83" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Student should have earned 135 credits. Only those students who have qualified GATE / have CGPA more than 8.0 will be eligible for this assistantship.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse84">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 What are the work hours that a student has to put in for TA-ship?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse84" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The student will be required to provide 8 hours of assistance per week besides his normal academic work.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse85">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 How many days leave is a student receiving TA-ship eligible for?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse85" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student receiving assistantship will be eligible for total of 30 days leave during the 14-month period.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse86">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.4 Is a student receiving TA-ship entitled to mid-semester breaks or vacations?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse86" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>He/she will not be entitled to mid-semester breaks, winter and summer vacations.</p>

                                                        </div>
                                                    </div>
                                                </div>
</div>

<div class="tab-pane fade" id="pills-ngu" role="tabpanel" aria-labelledby="pills-ngu-tab">

                            <div class="panel panel-default" style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse87">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 What is the expected amount of work per non-graded unit?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse87" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>For earning 1 unit a student typically needs to work for 2-3 hours per week (28-42 hours per semester) in on-campus activities. In case of project/design/internship activities, the student engagement expected is typically 20 man-days of work per non-graded unit.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse88">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 Can partial units be awarded?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse88" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>No partial/fractional units can be awarded. The student would need to repeat/complete the work to the satisfaction of the evaluating faculty member/committee to become eligible for award of the units.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse89">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 Can an activity be evaluated for more than one component?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse89" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A single activity cannot be evaluated for more than one purpose.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse90">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.4 How do I earn Introduction to Engineering and Programme units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse90" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>To earn these units, a student needs to undergo a course on Introduction to Engineering (NIN 100) in their first semester and a course on Introduction to their respective programme/Department in their third semester (XXN101/111).</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse91">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.5 What is the criteria of evaluation in Introduction to Engineering and Programme units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse91" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Attendance would be one of the main criteria for evaluation. Apart from this, active participation and quiz based evaluation etc. would also be used as a basis to decide S or Z grade.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse92">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.6 How can I earn Language and Writing Skills units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse92" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>This component is administered in the form of two courses, each of one unit:<br>
                                                                NLN100 Language and Writing Skills – I in the first semester<br>
                                                                NLN101 Language and Writing Skills – II in the second semester<br><br>
                                                                Assessment of a student towards S grade in each of these courses would typically be on the basis of attendance, participation and performance in the exercises. A student could also be prescribed self-learning exercises or additional practice sessions during vacations as requirement for securing S grade. Student’s involvement, during regular semester, would typically be two hours per week.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse93">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.7 How and till when can one earn NCC/NSO/NSS units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse93" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student is required to choose one of NCC/NSO/NSS by during his/her first semester. A student is typically expected to complete the 100 hours of activities in one of these three options by the end of the fourth registered semester or the summer after the fourth semester, failing which he/ she would not be allowed to register for the fifth semester.<br>
                                                                This component is administered in the form of three courses:
                                                            </p><ol><li>NCN100 – NCC</li>
                                                                <li>NPN100 – NSO</li>
                                                                <li>NSN100 – NSS</li></ol><p></p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse94">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.8 What activities would be included to complete the 2 units of the PESR non-graded component?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse94" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student is required to complete this non-graded component through activities divided into three courses:<br>
                                                                1. NEN100 Professional Ethics and Social Responsibility - I <br>
                                                                2. NEN101 Professional Ethics and Social Responsibility - II<br>
                                                                3. ONE of the following three courses<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;a. NEN201 PESR Internships<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;b. NEN202 PESR Workshops<br>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;c. NEN203 PESR Projects</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse95">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.9 Till when can PESR units be earned?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse95" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student is required to complete this non-graded component in the first six registered semesters of the undergraduate programme.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse96">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.10 Please elaborate what is to be done in NEN100 and NEN101 courses?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse96" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>NEN100 and NEN101 involve interactive sessions of a group of about 20 students with a faculty mentor in the first and second semesters respectively. The student will earn one unit by getting S grade in both these courses.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse97">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.11 What is the criterion for selection into NEN201, NEN 202 or NEN203 courses?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse97" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student can choose to register for any one of these three courses after getting S grade in both NEN100 and NEN101. By completing the requirements in NEN201/NEN202/NEN203, a student can earn one more unit under PESR resulting in completion of the degree requirements for this non-graded component.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse98">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.12 What work is to be undertaken in NEN201 PESR internships?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse98" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>It would involve engagement with communities/NGOs OUTSIDE IITD involving technical or non-technical work or internship with the CSR unit of an industry involving field work during summer/winter vacations.
                                                            </p><ul>
                                                                <li>For residential internship/camp with an organisation: 6-8 days of stay in the camp.</li>
                                                                <li>For non-residential internship: 20 working days of internship.</li>
                                                            </ul><p>
                                                                Prior approval of PESR committee specifying the type and length of the internship/camp is required. S grade to be awarded only for full duration. No credit for attending the internship for less number of days than that specified in approval.</p><p></p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse99">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.13 What work is to be undertaken in NEN202 PESR workshops?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse99" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>It would involve participation in intense ON-CAMPUS workshops approved by Dean Academics, of 3-8 days duration, conducted by professional resource persons, with special emphasis on themes related to PESR. These activities can be undertaken during mid semester breaks, summer or winter vacations.<br>
                                                                It requires completion of either a single workshop of at least 6 days’ duration OR two workshops of at least 3 days’ duration. <br>
                                                                S grade will be awarded only for attending the workshop for full duration. No credit for attending the workshop for less number of days.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse100">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.14 What work is to be undertaken in NEN203 PESR Projects?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse100" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>It would involve taking up on-campus projects under the guidance of a faculty mentor, related to any of the topics relevant to PESR during semester/summer/winter vacation/mid-semester break.<br>
                                                                It would require prior approval of project proposal by PESR committee clearly specifying deliverables and work share of each student if group project. S grade would be awarded only after completion of the project deliverables identified in the proposal - It must involve at least 50 hours of work by each student.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse101">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.15 Who would be responsible for monitoring the activities undertaken under NEN201, NEN202 or NEN203 courses?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse101" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>There would be PESR committee which would be responsible for approving the type and length of internship, project or workshops. S grade would be awarded only after successful completion of the internship, project deliverables or attending the workshop for full duration. Incomplete work would invite penalty and increase in the hour requirement for S grade.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse102">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.16 What about overlapping PESR activities for earning NSS hours, design credits etc.?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse102" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Many of the activities listed above for NEN201/ 202/ 203 are also activities  that can be taken up by students either under NSS or for earning Design units through co-curricular project-based activities, such as the SURA or DISA. Some of the technical projects may also be registered under Minor/ Mini/ Major projects towards earning graded credits.  In this regard, the following would be strictly followed:</p><ol type="a">
                                                                <li>In case a project is evaluated for graded credits or for any other non-graded activity, it would not be allowed under NEN203.  A student should submit a certificate to this effect, countersigned by the respective faculty member in charge of the project, as part of the proposal.</li>
                                                                <li>However, additional work which is not evaluated for such projects, either done prior to such projects or done after the completion of such projects, could be considered under NEN203.  In such a case, prior written permission must be taken from the PESR committee, clearly specifying the distinct components of work being submitted for the other graded/non-graded evaluations and for NEN203.</li>
                                                                <li>The workshops organised by NSS and under NEN202 would be generally distinct. Under NEN202, workshops would have minimum duration of 3 days and would be designated as "PESR WORKSHOP". Workshops organized by NSS would not be counted for NEN202 and vice-versa.</li>
                                                                <li>In case a student desires to do internship as part of NSS activities as well as under PESR through NEN201, each of these internships must have distinct time spans and special approval of the PESR Committee as well as NSS Coordinator are required for the same. The same work during an internship cannot be counted for NSS hours as well as for NEN201.</li></ol><p></p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse103">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.17 When can I earn Communication Skills/ Seminar units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse103" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student would be required to earn these units in the 3rd and/or 4th year.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse104">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.18 What activities would be included to complete 2 units of Communication Skills?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse104" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>This component includes two parts. A student needs to secure an S grade in both parts of the communication skills/seminar non-graded component to complete graduation requirements:</p><ol type="i">
                                                                <li>A set of topic specific seminar courses (XXQ30y) introduced by the parent Department of each student. These seminar sessions would be held for two hours per week. Students need to register for at least one such course in his/her parent department for earning one unit.</li>
                                                                <li>The following options are available to complete the remaining 1 unit:<ol type="a">
                                                                        <li>By registering and completing an additional seminar course (XYQ30y) offered by any other department/centre/school.</li>
                                                                        <li>By participating in course seminars of regular courses (regular L courses can have optional seminar component of 2 hours duration every week for a whole semester).  A student should register for NQN301, and the course coordinator would send recommendations for S grades to the Dean Academics, duly moderated by the Moderation Committee of the concerned Department/Centre/School.</li>
                                                                        <li>By successfully undergoing Communication Skills course/workshop as an activity approved by Dean Academics. In order to earn the non-graded units, a student should register for the course NQN301, which would be graded with S on successful completion.</li>
                                                                        <li>By submitting documentary evidence of excellence in debating and/or writing as certified by faculty in-charge of these activities, to the Dean Academics. In all such cases, the student should register for NQN301, and submit documentary evidence. The exhaustive details on such activities are given in the courses of study booklet.</li></ol></li></ol><p>
                                                                A minimum of two such documents certified by the Faculty in charge of the Board/Club, would qualify a student to earn one unit of communication skills/ seminar. A student engagement/effort (including preparations and the actual event) of 28-42 hours would be necessary for the award of one non-graded unit.</p><p></p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse105">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.19 What is the attendance policy of the Seminar courses?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse105" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student must have 100% attendance in the seminars, and should have done a satisfactory task of his /her contribution to the course: the write-up, presentation, etc. before being awarded an S grade. In case of unavoidable absence of up to 3 seminar sessions, appropriate compensation mechanism should be announced by the faculty member at the beginning of the course. For absence beyond 3 sessions, the non-graded units cannot be awarded.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse106">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.20 In what ways can DPE units be earned?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse106" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>DPE units can be earned in multiple ways during the semester as well as during vacations and mid-semester breaks:</p><ul>
                                                                <li>Specialized Elective Courses related to Design and Practical Experience XXD35y (Maximum 2 Units)</li>
                                                                <li>Semester/Summer/Winter Projects under the guidance of IIT Delhi Faculty (Maximum 2 Units)</li>
                                                                <li>Regular Courses with optional DPE Component (Maximum 2 Units)</li>
                                                                <li>Summer Internships (2 Units)</li>
                                                                <li>One-Semester Internship (Maximum 5 Units)</li>
                                                                <li>One Time Design Practical Experience Module (1 Unit)</li></ul><p>
                                                                Please refer to the questions below for more details on each of the above components.</p><p></p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse107">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.21 Specialized Elective Courses related to Design and Practical Experience XXD35y (Maximum 2 Units)
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse107" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Departments/ Centres/ Schools may offer a basket of elective courses that will not have any credits associated with them but will have only DPE units linked to them. On successful completion of such courses the students will earn only DPE units but no graded credits. These courses offered by departments/ Centers/ Schools can be of one unit (28-42 hours of student effort) or two units (56-84 hours of student effort).</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse108">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.22 Semester/Summer/Winter Projects under the guidance of IIT Delhi Faculty (Maximum 2 Units)
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse108" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Some of the  co-curricular activities in the institute that pertain to team based product building such as Robotics, Automobile, iGEM, Aero-modelling etc. can also be considered for earning DPE units. SURA/DISA projects related to design and practical experience too can be brought under this option.  In order to be evaluated for DPE Units in such cases, a student should register for XXD35y Minor Design Project floated by Department XX or NDN35y (Interdisciplinary) Minor Design Project. The Courses XXD351 – XXD355 are Minor Design Projects with 1 non-graded DPE unit, and XXD356 – XXD357 are Minor Design Projects with 2 non-graded units each. Courses NDN351 – 357 also follow a similar definition.<br><br>
                                                                4 weeks (20 working days) project =&gt; 1 DPE unit<br>
                                                                8 weeks (80 working days) project =&gt; 2 DPE units</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse109">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.23 Regular Courses with optional DPE Component (Maximum 2 Units)
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse109" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Departments and faculty offering regular core and elective courses can offer optional design component in their courses at the time of offering the courses. Successful completion of the course will give graded credits to students and at the same time they will be eligible for earning (1 or 2) design units if they successfully complete optional design component.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse110">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.24 Summer Internships (2 Units)
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse110" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Students can undertake a minimum of 40 working days of internship to earn 2 DPE units during summer vacations in Industry, R&amp;D institutions or Universities in India or abroad. This would be administered by the Departmental Committee for DPE, which would also be responsible appointing a faculty supervisor for the internship, and for awarding the Design units. Students can proceed with the internship after the Departmental Committee for DPE approves the same.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse111">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.25 One-Semester Internship (Maximum 5 Units)
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse111" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Students can opt for one semester internship in Industry, R&amp;D institutions or Universities in India or abroad, for a minimum of 100 working days, by appropriately planning for completion of credit requirements for the degree. The student can also opt for a semester break to initiate or work for his/her start up. It is mandatory that the internship is supervised by two mentors, one from the institute (appointed by the DPE Committee of the student’s Department) and another from the host organization.  In case of semester break for a start-up, students will work under the mentorship of a faculty member of the Institute. Students are required to plan well in advance and submit a project proposal in consultation with their supervisors (in case of internship) or faculty mentor (in case of start-ups). Students can proceed with the internship after the Departmental Committee for DPE approves the same.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse112">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.26 One Time Design Practical Experience Module (1 Unit)
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse112" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The module may be offered by an existing or visiting faculty, working professionals from industry, NGO or Freelancers, who would like to engage students in a workshop/course related to design and practical experience. The module can be typically of 28-42 hours duration, and may be offered during mid-semester breaks, winter/summer vacations and even during non-class hours during the semester.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse113">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.27 Who manages DPE units and the approval of activities for DPE units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse113" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>The DPE units are handled by DPE Committees in coordination with T&amp;P. The Departmental DPE Committee, headed by Department DPE Coordinator manages the DPE units in a department. The Institute DPE committee manages the interdisciplinary DPE units. Prior approval from respective DPE committee is essential to earn the DPE units.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse114">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.28 When can I start earning Design and Practical Experience (DPE) Units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse114" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student can start earning DPE units from the first semester itself.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse115">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.29 How many DPE units can be earned at a time?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse115" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student cannot register for more than 2 non-graded DPE units per summer or 3 non-graded DPE units per registered semester in which a student is on regular academic activity. To take part in activities that can result in more than 3 DPE units, a student has to take the semester off from regular courses.</p>

                                                        </div>
                                                    </div>
                                                </div>
</div>

<div class="tab-pane fade" id="pills-intern" role="tabpanel" aria-labelledby="pills-intern-tab">

                                    <div class="panel panel-default" style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse116">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.1 How many internships can I do for design units?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse116" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student can do at most two internships for design units, during his/her stay at IIT Delhi. If any student does more than two internships, the design units will be awarded for the first two registered internships only.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse117">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.2 What formats of internships are allowed?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse117" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>-		Summer internship of 40 days duration, in which a student can earn 2 design units.<br>
                                                                -	Semester-long internship of 100 days duration, in which a student can earn 5 design units.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse118">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.3 When can I go for an internship?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse118" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Summer internships are allowed in the summer after the 4th registered semester of the student or later.  Semester Internships are permitted from the seventh registered semester or later.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse119">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.4 What kind of internships are allowed?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse119" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Internships are permitted in industry, research laboratories or academic institutions involved in research, development and/or technology transfer. Any student opting for semester long internship may also be allowed to work on a start-up. All internships must be approved by the department in advance. In the case of non-industry internships, the work should be research/development/practice oriented, and not classroom course work.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse120">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.5 Who will evaluate my work during an internship?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse120" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>In all cases, for award of non-graded design units, after completion of the internship, the work must be evaluated by the DPE committee of the student’s Department or the Institute level DPE committee as the case may be.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse121">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.6 What are my options to complete DPE units through internships?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse121" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b></p><ul><li>One semester internship, accounting for 5 DPE units.</li>
                                                                <li>One summer internship, accounting for 2 DPE units and 3 DPE units from other activities at IIT Delhi</li>
                                                                <li>Two summer internships, accounting for a total of 4 DPE units, and 1 DPE unit from other activities at IIT Delhi.</li>
                                                                <li>One summer internship accounting for 2 DPE units and one semester internship, accounting for 5 DPE units. However, a maximum of 5 DPE units can be earned by a student through internships.</li>
                                                                <li>No internships: all DPE units can be earned through design/project activities at IIT Delhi.</li></ul><p></p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse122">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.7 Who will handle the administration and correspondence for self-arranged internships?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse122" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Both for self-arranged internships and IIT-arranged internships, administration and correspondence would be handled by the Training and Placement Unit. For self-arranged internships, any documentation regarding the bona fide status of students (while applying for training) will be done by UG section. T&amp;P Unit will process the paperwork of the student once the student submits all departmental approvals and the confirmed offer letter from the company to T&amp;P.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse123">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.8 How do I opt for an internship?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse123" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>Students who would like to opt for training will have to register for one of the three courses: (XX stands for the two-letter Department Course Code)</p><ol type="i">
                                                                <li>XXT200: Summer Internship 1: A summer internship of 40 working days.<br>
                                                                    Pre-requisites: Earned Credits: 30 (at the time of registration), 45 at the end of the July-November semester preceding the summer.</li>
                                                                <li>XXT300: Summer Internship 2: A summer internship of 40 working days, for students who have already done one summer internship.<br>
                                                                    Pre-requisites: XXT200</li>
                                                                <li>XXT400: Semester Internship: A semester internship of 100 working days.<br>
                                                                    Pre-requisites: Earned Credits: 60 (at the time of registration), 75 at the end of the January-April semester preceding the internship.  Semester internships could begin in July or January, typically synchronized with the starting date of the respective semester.</li></ol><p></p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse124">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.9 When do I register for an internship course, to get an internship through T&amp;P?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse124" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>All students opting for internships in summer should register for XXT200 or XXT300 (if opting for second summer internship) during the semester (Ist or IInd semester in the academic year just before internship) in which the student wants to attend the T&amp;P activities.<br>
                                                                Students, who opt for self-arranged internship, do not have to register. However, they must complete the paper-work with T&amp;P before starting the internship.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse125">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.10 Are there any restrictions on me if I opt for an internship through T&amp;P?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse125" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>A student who registers for one of the three internship courses during a semester will not be able to register for any course in the K, L and M slots, and T&amp;P activities will be conducted during the timings of these slots.</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse126">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.11 What will happen if I take up an internship, but don’t go for it?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse126" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>If a student is selected for an internship, he/she is bound to go for that internship. If the student does not take up and complete the internship, he/she will be debarred from all further T&amp;P activities (including further internship opportunities and placement procedure).</p>

                                                        </div>
                                                    </div>
                                                </div><div class="panel panel-default"
                                                           style=" border-radius:20px; background-color:#eee;   margin-bottom: 10px; ">
                                                    <a data-toggle="collapse" href="#collapse127">
                                                        <div class="panel-heading mt-1"
                                                             style=" background: #FFFFFF !important;
box-shadow: 2px 2px 26px 10px rgba(0,0,0,0.08), inset 0 0 9px 8px rgba(152,152,152,0.05) !important;
border: 0 !important;
border-radius: 15px !important;
padding: 10px !important;"
                                                             onmouseover="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;"
                                                             onmouseout="this.style.background='#eee'; this.style.border-radius='20px' color:'#fff';;">
                                                            <h5 class="panel-title">
                                                                Q.12 Does opting for an internship through T&amp;P mean that I will get an internship for sure?
                                                            <span class="float-md-right ml-sm-2 rotate ml-md-0 mt-1 mr-2 fa fa-arrow-up" style="opacity:0.2;" id="arrow-faq"></span></h5>
                                                        </div>
                                                    </a>
                                                    <div id="collapse127" class="panel-collapse collapse">
                                                        <div class="panel-body" style="padding:10px;">

                                                            <p><b>Ans. </b>T&amp;P Unit will try and arrange internships for as many students as it can. T&amp;P procedure for summer internships will begin in January and will continue in February. If T&amp;P Unit is unable to provide internship to a student by the end of February, the student is exempted from the rule of debarring, and can start trying for a self-arranged internship.</p>

                                                        </div>
                                                    </div>
                                                </div>
</div>
</div>
                          



                            <p>For any other query, feel free to contact us or give us your feedback <a href="feedback.php">(Click here to send feedback)</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="" style=" background-color: #eee;">
                        <script>
                            (function () {
                                var cx = '008818568104787890944:hytsecstlmi';
                                var gcse = document.createElement('script');
                                gcse.type = 'text/javascript';
                                gcse.async = true;
                                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(gcse, s);
                            })();
                        </script>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


</body>
</html>