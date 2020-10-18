<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Softwares | BSW</title>
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
        border-radius: 10px !important;
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
          <h1 class="about-us-title">Softwares</h1>
        </div>

        <div class="col-12 col-lg-8">
          <p class="about-us-text">
          Computer Services Center(CSC) at IIT Delhi has made available a bunch of licensed software for its students.
          <br />
            Given below is the list of softwares with the installation instructions and link to download. In case,
            any Microsoft software you need is not available, or need help with the installation instructions for
            any software, you can write an email to <a href="mailto:sysadm@cc.iitd.ac.in">sysadm@cc.iitd.ac.in</a>, <a href="mailto:msgroup@cc.iitd.ac.in">msgroup@cc.iitd.ac.in</a> or you can also
            contact at the CSC Reception.
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
  <img class="mr-3 software-logo" src="images/grammarly.png" alt="Grammarly Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1">Grammarly</h5>
      Grammarly is an automated grammar tutor and revision support tool. A web-based solution, Grammarly works one-on-one with a researcher/student to develop essential writing skills,
reinforce proper revision habits and prevent plagiarism. You can upload drafts of your writing assignments to Grammarly to receive immediate instructional feedback on over 250 points of grammar. An algorithmic and structured approach to text revision ensures that valuable learning moments are seized upon when you proofread your own work.<br>
      Step 1: go to www.grammarly.com/edu  (mandatory to sign up from this URL)<br>
      Step 2: Click on Join Your Organization button, fill up the self-service form. You are requested to use your official email ID xx@iitd.ac.in without mentioning your Deptt/Centre name in the email ID and follow the steps given in the email.<br>
      Step 3: After clicking signup, an activation email will be sent to the user's institutional email ID.<br>

</div>
  </li>

  <li class="media">
    <img class="mr-3 software-logo" src="images/matlab.svg" alt="MATLAB Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1" >MATLAB</h5>
      It is an interactive platform for numerical computation and data visualization, which along with its programming capabilities provides a very useful tool for almost all areas of Science and Engineering. MATLAB allows matrix manipulations, plotting of functions and data, implementation of algorithms, creation of user interfaces, and interfacing with programs written in other languages, including C, C++, Java, and Fortran.       
      <ul class="list-unstyled ml-4">
        <li class="list-unstyled ml-4"><a href="http://repo.iitd.ernet.in/matlab/">Download & Documentation </a></li>
        <li class="list-unstyled ml-4"><a href="http://www.cc.iitd.ernet.in/CSC/index.php?option=com_content&view=article&id=68&Itemid=112">CSC Link : MATLAB DIstribution</a></li>
        </ul>
    </div>
  </li>

  <li class="media my-4">
  <img class="mr-3 software-logo" src="images/ubuntu.svg" alt="MATLAB Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1">UBUNTU</h5>
      It is a computer operating system based on the Debian Linux distribution and distributed as free and open source software, using its own desktop environment.
      <ul class="list-unstyled ml-4">
        <li class="list-unstyled ml-4"><a href="http://repo.iitd.ernet.in/ubuntu-releases/">CSC Link: Ubuntu Download </a></li>
    </ul>
    </div>
  </li>

  <li class="media my-4">
  <img class="mr-3 software-logo" src="images/windowsActivate.svg" alt="MATLAB Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1">Windows Activation</h5>
      The activation procedure for Windows provided by IIT Delhi is as follows:
      <ol>
<li>Open administrator elevated Command Promt ('Admin' or 'Run As Administrator').</li>
<li>Type slmgr /skms ccwds.acad.windows.iitd.ac.in.</li>
<li>Open https://kmsproxy.iitd.ac.in/kms.html and login using your IITD user id and password.</li>
<li>Within the next 30 minutes activate (or reactivate) your Windows OS by using the command slmgr /ato.</li>
<li>You can check the activation expiry date using the command slmgr /xpr.</li>
<li>Logout of your browser window. </li>
</ol>
</div>
  </li>


  <li class="media my-4">
  <img class="mr-3 software-logo" src="images/office365.svg" alt="MATLAB Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1">Microsoft Office 365</h5>
      To use Microsoft Office 365 using the free subscription for IIT Delhi students, <br> Visit <a href="http://www.cc.iitd.ernet.in/CSC/index.php?option=com_content&view=article&id=161%3Amicrosoft-office-365&catid=1%3Alatest-news&Itemid=142">Micrsoft Office 365</a> and follw the steps mentioned there. 
</div>
  </li>

  <li class="media my-4">
  <img class="mr-3 software-logo" src="images/winUpdate.svg" alt="MATLAB Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1">Windows Update System</h5>
      IIT Delhi has implemented the WSUS infrastructure that will help conserve Internet Bandwidth. <br> Visit <a href="http://www.cc.iitd.ernet.in/CSC/index.php?option=com_content&view=article&id=83&Itemid=114">CSC Link : Windows Update Service</a>
</div>
  </li>

  <li class="media my-4">
  <img class="mr-3 software-logo" src="images/dreamspark.svg" alt="MATLAB Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1">Microsoft Dreamspark Softwares</h5>
      Some other popular software development tool under Dreamspark, including SDKs for Kinect and Windows phone, can be downloaded from <a href="http://repo.iitd.ernet.in/winsoft">http://repo.iitd.ernet.in/winsoft</a>.<br />Please write to <a href="mailto:msgroup@cc.iitd.ac.in">msgroup@cc.iitd.ac.in</a> in case you require other Dreamspark software
</div>
  </li>

  <li class="media">
    <img class="mr-3 software-logo" src="images/ms.svg" alt="MATLAB Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1" >Windows Software (Available on INTRANET)</h5>
      It is an interactive platform for numerical computation and data visualization, which along with its programming capabilities provides a very useful tool for almost all areas of Science and Engineering. MATLAB allows matrix manipulations, plotting of functions and data, implementation of algorithms, creation of user interfaces, and interfacing with programs written in other languages, including C, C++, Java, and Fortran.       
      <ul class="list-unstyled ml-4">
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/dotNetFx45_Full_setup.exe">Microsoft .NET Framework 4.5</a></li>
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/Antivirus.exe">Antivirus: ForeFront Endpoint Protection</a></li>
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/office2013x64.exe">Microsoft Office 2013 - 64 Bit</a></li>
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/office2013x86.exe">Microsoft Office 2013 - 32 Bit</a></li>
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/office2010x64.exe">Microsoft Office 2010 - 64 Bit</a></li>
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/office2010x86.exe">Microsoft Office 2010 - 32 Bit</a></li>
        <li class="list-unstyled ml-4">It can also be obtained by instructions in the link:<a href="http://www.cc.iitd.ernet.in/CSC/index.php?option=com_content&view=article&id=116&Itemid=142"> Windows/Office installation and activation</a></li>
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/vs2012ultimate.exe">Visual Studio 2012: Visual Studio 2012 Ultimate</a></li>
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/vs2012pro.exe">Visual Studio 2012 Professional
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/epson.exe">Epson EMP SlideMaker2</a></li>
        <li class="list-unstyled ml-4"><a href="https://internal.iitd.ernet.in/downloads/acobat8.exe">Adobe Acrobat Professional 8.1.2</a></li>
        </ul>
    </div>
  </li>

  <li class="media my-4">
  <img class="mr-3 software-logo" src="images/sw.svg" alt="MATLAB Logo" width="120" height="120" >
    <div class="media-body">
      <h5 class="mt-0 mb-1">Other Software</h5>
      Various versions of Windows (XP, Vista, 7, 8), Microsoft Office, Forefront (antivirus), etc. are present under the link<br />
      <a href="http://msdn.microsoft.com/en-us/library"> List of software under Microsoft campus agreement</a>. 
    Some other software like Abaqus, COMSOL, Ansys and Fluent are available on the link: <a href="http://10.234.12.100/">CAD s/w @ Dell Server.</a></div>
  </li>


        </div>
    </div>
</div>
<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



</body>
</html>