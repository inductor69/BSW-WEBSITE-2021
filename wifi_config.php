<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  

<title>Wifi | BSW</title>
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
    #fingerprints{
        width:80%;
        padding-top:20px !important;
        padding-bottom:20px !important;
        background-color: #20c9979e !important;
        color:#444 !important;
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

            <div class="col-12 col-lg-4 justify-content-center">
            <h1 class="about-us-title"><span class="fa fa-wifi"></span> Wifi & Internet</h1>
            </div>

            <div class="col-12 col-lg-8">
            <p class="about-us-text">
            Computer Services Center(CSC) at IIT Delhi has released a high-speed Wifi solution. The details to
                setup Wifi on your devices are given below.
                <br />
                You can track usage for all the connected devices at <a href="https://www.track.iitd.ac.in/">www.track.iitd.ac.in</a><br />
                Please note that each user is permitted at most 8 distinct devices he can use on the IITD Wifi system
                in any 90 days period.
                <br />
                For more details visit:
                <a href="https://www.track.iitd.ac.in">IITD Campus Wifi</a>
                <br/>
                In case of any problem related to Wifi, you can report at <a href="https://">www.sysadm@cc.iitd.ac.in</a>
            </p>
            </div>

        </div>

    </div>

</div>

<div class="container" id="softwares-list">
    <div class="row justify-content-center">
        <div class="col-11" id="fingerprints">
        SHA1 Fingerprint:
        <pre>13:DD:BF:06:B5:04:33:2E:94:81:71:DD:14:E1:26:D7:B6:C0:93:18</pre>
        MD5 Fingerprint:
        <pre>s17:9F:C1:3E:D9:0B:24:E7:2E:DC:41:5C:14:F9:4B:3C</pre>
        
        </div>
        <div class="col-12">
        
            <ul class="list-unstyled">

                <li class="media my-4">
                    <img class="mr-3 software-logo" src="images/macos.svg" alt="MATLAB Logo" width="120" height="120" >
                    <div class="media-body">
                    <h5 class="mt-0 mb-1" >macOS</h5>
                    <ul class="list-unstyled ">
                        <li class="list-unstyled ">&rarr; Click on the IITD-Wifi you want to connect and enter Kerberos username and password</li>
                        <li class="list-unstyled ">&rarr; Again click on Wi-Fi sign and click on open network preferences</li>
                        <li class="list-unstyled ">&rarr; Then choose Wi-Fi and select network name to which you want to connect</a></li>
                        <li class="list-unstyled ">&rarr; Click on advanced > Proxies > Tick automatic proxy configuration and add the URL: http://www.cc.iitd.ernet.in/cgi-bin/proxy.’category’, where 'category' should be one of the following: btech, diit, dual, faculty, integrated, irdstaff, mba, mdes, msc, msr, mtech, pgdip, phd, retfaculty, staff, visitor (for temporary accounts), student (for visiting students) and guest (for short-term visitors).</li>
                        <li class="list-unstyled ">&rarr; Select OK and you are ready to go. Install IITD CA Certificate from CSC Website.
                            &rarr; Please verify the SHA1 and MD5 fingerprints of the IITD CA certificate before installing:
                            </li>
                            </ul>
                    </div>
                </li>

        
                <li class="media my-4">
                    <img class="mr-3 software-logo" src="images/windowsActivate.svg" alt="MATLAB Logo" width="120" height="120" >
                    <div class="media-body ">
                    <h5 class="mt-0 mb-1" >Windows 8 and above</h5>
                    <ul class="list-unstyled ">
                        <li class="list-unstyled ">&rarr; Click on Settings on right pane (Charms bar) > Networks > Wi-Fi > Select the desired IITD-WiFi you want to connect and enter kerberos username and password.</li>
                        <li class="list-unstyled ">&rarr; Verify Thumbprint algorithm: SHA1 and Thumbprint: ff ca da 61 15 4d 3e aa a1 67 e3 65 d3 35 02 31 e8 ec 60 5c.</li>
                        <li class="list-unstyled ">&rarr; Select OK and you are ready to go. <a hreff="http://www.cc.iitd.ernet.in/CSC/index.php?option=com_content&view=article&id=53&Itemid=57">Install IITD CA Certificate from CSC Website, under ‘Proxy for Internet Access’ section.</a></li>
                        <li class="list-unstyled ">&rarr; Please verify the SHA1 and MD5 fingerprints of the IITD CA certificate before installing.</li>
                                <li class="list-unstyled ">&rarr; To use Store and Windows Update service on proxy server:
                                <li class="list-unstyled ">&rarr; First correct the settings of Internet Explorer or Google Chrome as required for internet access:<br />
                        LAN Settings:Tick 'Use automatic configuration script' and add the URL: http://www.cc.iitd.ernet.in/cgi-bin/proxy.’category’, where 'category' should be one of the following: btech, diit, dual, faculty, integrated, irdstaff, mba, mdes, msc, msr, mtech, pgdip, phd, retfaculty, staff, visitor (for temporary accounts), student (for visiting students) and guest (for short-term visitors).</li>
                        <li class="list-unstyled ">&rarr; Open Command Prompt on Administrator Level (right click and select ‘Run as Administrator’).</li>
                        <li class="list-unstyled ">&rarr; Type ‘netsh winhttp import proxy source=ie‘ and its done.</li>
                        <li class="list-unstyled ">&rarr; To recover settings anytime type ‘netsh winhttp reset proxy’. </li>

                        </ul>
                    </div>
                </li>

                <li class="media my-4">
                    <img class="mr-3 software-logo" src="images/win7.svg" alt="MATLAB Logo" width="120" height="120" >
                    <div class="media-body ">
                        <h5 class="mt-0 mb-1" >Windows 7 and Windows Vista</h5>
                        <ul class="list-unstyled ">
                            <li class="list-unstyled ">&rarr; Turn on your Wifi Adapter</li>
                            <li class="list-unstyled ">&rarr; Select Connect to a network option from the menu that appears by right clicking the network icon in the system tray.</li>
                            <li class="list-unstyled ">&rarr; Select IITD_WIFI3 from the list of network available, and Click Connect.</li>
                            <li class="list-unstyled ">&rarr;  Click Enter/select additional log on information.</li>
                            <li class="list-unstyled ">&rarr; Type your Username, Password and Click OK</li>
                            <li class="list-unstyled ">&rarr; Click Enter/select additional log on information.</li>
                            <li class="list-unstyled ">&rarr; Click View Server Certificate.</li>
                            <li class="list-unstyled ">&rarr; Verify Certificate Information Issued to: userm.iitd.ernet.in, Issued by: ccmail07.iitd.ernet.in, and Click Details.</li>
                            <li class="list-unstyled ">&rarr; Verify Thumbprint algorithm: SHA1 and Thumbprint: ff ca da 61 15 4d 3e aa a1 67 e3 65 d3 35 02 31 e8 ec 60 5c. Click OK. </li>
                            <li class="list-unstyled ">&rarr; You will see a screen Connecting to IITD_WIFI3. Click Close to save the network settings.</li>
                            <li class="list-unstyled ">&rarr; You have successfully completed the one-time setup, and connected to IITD_WIFI3 Wireless Network (See network icon in the system tray). </li>
                            <li class="list-unstyled ">&rarr; See the browser setting and install IITD CA Certificate from CSC Website, under <a href="http://www.cc.iitd.ernet.in/CSC/index.php?option=com_content&view=article&id=53&Itemid=57">‘Proxy for Internet Access’ </a> section.</li>
                            <li class="list-unstyled ">&rarr; Please verify the SHA1 and MD5 fingerprints of the IITD CA certificate before installing.</li>

                            </ul>
                    </div>
                </li>

                <li class="media my-4">
                    <img class="mr-3 software-logo" src="images/android.svg" alt="MATLAB Logo" width="120" height="120" >
                    <div class="media-body ">
                        <h5 class="mt-0 mb-1" >Android</h5>
                        <ul class="list-unstyled ">
                            <li class="list-unstyled ">&rarr; Go to Settings > Wi-Fi >Select IITD_WIFI3 (In case of any error tap on plus sign and type SSID as IITD_WIFI3 and select Security as 802.1x EAP.)</li>
                            <li class="list-unstyled ">&rarr; Set EAP method as PEAP, Phase 2 authentication as MsCHAPv2, CA certificate and client certificate as N/A for time being, identity as your IITD user id, anonymous identity as anonymous, and wireless password as your IITD Kerberos password.</li>
                            <li class="list-unstyled ">&rarr; Tick on Show advanced options</li>
                            <li class="list-unstyled ">&rarr;  Select Proxy Settings as Manual</li>
                            <li class="list-unstyled ">&rarr; Enter proxy hostname: proxyXX.iitd.ac.in, where XX is 22 for B.Tech., 62 for M.Tech. and 61 for Ph.D. Enter Port as 3128.
                            <li class="list-unstyled ">&rarr; Click Enter/select additional log on information.</li>
                            <li class="list-unstyled ">&rarr; Click View Server Certificate.</li>
                            <li class="list-unstyled ">&rarr; You should be able to connect. This however is not secure. Once connected, open the browser on your Android device and install <a href="http://www.cc.iitd.ernet.in/CSC/index.php?option=com_content&view=article&id=53&Itemid=57">IITD CA Certificate</a> from CSC Website.</li>

                        </ul>
                    </div>
                </li>


                <li class="media my-4">
                    <img class="mr-3 software-logo" src="images/iOSiPadOS.jpg" alt="MATLAB Logo" width="120" height="120" >
                    <div class="media-body ">
                        <h5 class="mt-0 mb-1" >iOS and iPadOS</h5>
                        <ul class="list-unstyled ">
                            <li class="list-unstyled ">&rarr; Go to Wi-Fi settings and select IITD_WIFI3 from the list of networks available.</li>
                            <li class="list-unstyled ">&rarr; Enter Kerberos username and password.</li>
                            <li class="list-unstyled ">&rarr; Click on ‘i’ button in front of IITD_WIFI3.</li>
                            <li class="list-unstyled ">&rarr;  At the bottom, change the 'HTTP proxy' from off to Auto.</li>
                            <li class="list-unstyled ">&rarr; Add the URL: http://www.cc.iitd.ernet.in/cgi-bin/proxy.’category’, where 'category' should be one of the following: btech, diit, dual, faculty, integrated, irdstaff, mba, mdes, msc, msr, mtech, pgdip, phd, retfaculty, staff, visitor (for temporary accounts), student (for visiting students) and guest (for short-term visitors).</li>
                            <li class="list-unstyled ">&rarr; Select OK and you are ready to go. Install the <a href="http://www.cc.iitd.ernet.in/CSC/index.php?option=com_content&view=article&id=53&Itemid=57">IITD CA Certificate</a> from CSC Website.</li>
                            <li class="list-unstyled ">Please verify the SHA1 and MD5 fingerprints of the IITD CA Certificate before installing.</li>
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