<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | BSW</title>
    <!-- google fonts and font awesome -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- css style sheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- bootstrap support links and jquery -->
       <!-- bootsrap links -->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
       <style type="text/css">

html {
    scroll-behavior: smooth;
  }
body{
    font-family: 'Montserrat', sans-serif;
}
/*********navigation bar *************/

.navigation{
    padding: 0px 50px 20px 50px;
    background-image: linear-gradient(to right, #67B26F 0%, rgba(24,86,117,0.62) 100%, rgba(0,0,0,0.95) 100%);
}
@media (max-width:600px){
    .navigation{
        position: relative;
    }
}
#navbar-content {
padding-top: 20px;
}
.logo-img{
    width:150px;
    position: relative;
    top: 10px;
}
#navbar-content ul li {
margin: 0 20px;
}
#navbar-content ul li a {
color: #fff;
font-weight: 600;
font-size: 20px;
}
.blue-button{
	background:  #67B26F;
	border-radius:3px;
    display:inline-block;
    border: 0;
	cursor:pointer;
	color:#ffffff;
	font-size:17px;
    padding:10px 25px;	
    position: relative;
    bottom: 10px;
    font-weight: 500;
}

@media(max-width : 537px){
.logo-img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 200px;
    position: absolute;
    left: 10px;
    top: 5px;
}
}
@media(max-width : 440px){
    .logo-img{
        width: 140px;
    }
    }

/*********** banner area **************/

.banner-area{
    padding: 4% 5%;
    margin-top: 100px;
}

.header h1{
    margin-top: 50px;
    font-size: 45px;
    font-weight: 700;
    margin-bottom: 20px;
}
.header p{
    font-weight: 400;
    font-size: 20px;
    margin-bottom: 40px;
}
.banner-img{
    width: 100%;
    height: 100%;
}
@media(max-width:600px){
    .banner-img{
        margin-top: 30px;
    }
    .banner-area{
        padding-top: 0;
        margin-top: 0;
    }
}

/********** services **********/

.services{
    position: relative;
    padding: 5% 10%;
    margin-bottom: 80px;
    background:  #67B26F;

}
.element-7{
    width: 4%;
    position: absolute;
    left: 0;
    top: 0;
}
.element-3{
    width: 10%;
    position: absolute;
    right: 10px;
    bottom: -140px;
}
@media(max-width: 770px){
    .element-7{
        width: 12%;
    }
    .element-3{
        width: 30%;
    }   
}
.services h1{
    font-weight: 700;
    font-size: 42px;
    margin: 0% 0 5% 0;
}
.services div div  img{
    width: 16%;
}
.services div div{
    margin-bottom: 20px;
    padding-top: 40px;
    padding-bottom: 40px;
}
.services div div h3{
    margin-bottom: 30px;
    font-size: 20px;
    margin: 30px 0;
    font-weight: 500;
}
.services div div p{
    font-size: 14px;
}
.services div div span{
    font-size: 16px;
    font-weight: 500;
}
.service-1 img{
    margin-bottom: 23px;
}
.service-3 img{
    margin-bottom: 23px;
  
}
.service-3{
    background-color: #ddf3f5;
    border-radius: 2%;
}
.service-4 img{
    margin-bottom: 13px;
  
}

/*********** About ************/

.about{
    padding: 7% 6.5%;
}
.about-us-img{
    width: 100%;
}
.about-col{
    padding: 0 50px;
}
.about-col h1{
    margin-top: 50px;
    font-weight: 700;
    font-size: 45px;
}
.about-col p{
    font-weight: 400;
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 60px;
}
.lmbtn{
    padding: 10px 50px;
}

/********** features ***********/

.features{
    background-image: linear-gradient(to right, #00a8cc 10% ,#35B267);
    padding: 3% 10% 1% 10%;
}
.feature{
    margin: 20px 62px;
}
.feature img{
    width: 75%;
    margin-bottom: 50px;
}
.feature-1 img{
    margin-bottom: 40px;
}
.feature-2 img{
    width: 40%;
    margin-bottom: 50px;
}
.feature-3 img{
    margin-bottom: 47px;
}
.feature h1 {
    color: #fff;
    font-weight: 600;
}
.feature p{
    color: #fff;
    font-weight: 500;
}

/********** steps ***********/

.steps{
    position: relative;
    margin-bottom: 100px;
}
.steps h1{
 margin: 80px 0;
 font-weight: 700;
}
.step{
    padding: 5% 4%;
}
.step img{
    width: 30%;
    margin-bottom: 30px;
}
.step-2 img{
   margin-bottom: 40px;
}
.step-5 img{
    margin-bottom: 40px;
 }
.step h3{
    margin-bottom: 20px;
}
.blue-box {
	background:  #67B26F;
 
}
.element-6{
    width: 3%;
    position: absolute;
    right: 0;
    top: 0;
}
.element-5{
    position: absolute;
    width: 15%;
    right: 15%;
    top: -15px;
}

/*********** benefits *************/

.benefits{
    padding: 0% 8% 5% 8%;
    position: relative;
}
.benefits li{
    margin: 20px auto;
}

.benefits h1{
    margin-top: 40px;
    margin-bottom: 40px;
    font-weight: 700;
}

/************ founders and advisors *************/

.founders{
    position: relative;
    padding: 0 10% 0% 10%;
    /* background-image: linear-gradient(to right, #67B26F 0%, rgba(24,86,117,0.62) 100%, rgba(0,0,0,0.95) 100%); */
}
.founder h1{
    margin-top: 30px;
    /* color: #fff; */
    font-weight: 700;
    margin-bottom: 20px;
}
.founder h3{
    /* color: #fff; */
    font-weight: 600;
    margin-bottom: 20px;
}
.phone-numbers{
    font-weight: bold;
    font-size:20px;
    line-height:2rem;
    position: relative;
    top: 30px;
    margin-bottom:80px;

}
.founder p{
    /* color: #fff; */
}
.founder img{
    width: 60%;
}
.founders hr{
    border: 0.2px solid black;
}
.element-3-2{
    width: 10%;
    position: absolute;
    right: 0.1%;
    top: 10%;
}
.element-2{
    width: 4%;
    position: absolute;
    left: 0;
    top: 53%;
}
.advisor{
    margin-bottom: 20px;
}
.advisory-board{
    /* color: #fff; */
    padding: 5% 0;
    font-weight: 700;
}
.advisor img{
    width: 100%;
}

.advisor-3{
    background-color: #393e46;
}

/*********** faqs **************/

.faqs h1{
    margin-top: 40px;
    margin-bottom: 40px;
    font-weight: 700;
}
.question{
    padding: 5% 0 3% 0;
}
.green-question{
    background:  #67B26F;
}

/*********** footer **************/

.footer{
    padding: 1% 0 1px 0; 
    background-image: linear-gradient(to right, #67B26F 0%, rgba(24,86,117,0.62) 100%, rgba(0,0,0,0.95) 100%);
}
.footer p{
    color: #fff;
}


</style>
</head>
<body>

    <!-- navigation bar -->
    <nav class="navigation navbar navbar-light navbar-expand-lg fixed-top">
      <a href="http://bsw.iitd.ac.in/" class="navbar-brand"><img class="logo-img" src="images/bsw_logo.png" alt="logo of housewise"></a>
      <button  class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="ml-auto navbar-nav mt-2 mt-lg-0">
          <li class="nav-item ml-auto">
            <a href="#academic-platforms" class="nav-link" id="nav-link-1">Academic Platforms</a>
          </li>
          <!-- <li class="nav-item ml-auto">
            <a href="#video-tutorials" class="nav-link nav-link-2" id="nav-link-2">Video Tutorials</a>
          </li> -->
          <li class="nav-item ml-auto">
            <a href="#counselling" class="nav-link nav-link-2" id="nav-link-3">Counselling</a>
          </li>
          <li class="nav-item ml-auto">
            <a href="#time-table" class="nav-link nav-link-4" id="nav-link-4">Time Table</a>
          </li>
          <li class="nav-item ml-auto">
            <a href="#resources" class="nav-link nav-link-5" id="nav-link-5">Resources</a>
          </li>
          <li class="nav-item ml-auto">
            <a href="#FAQS" class="nav-link nav-link-6" id="nav-link-6">FAQ's</a>
          </li>  
        </ul>
      </div>
     </nav>
     <!-- navigation bar end -->

     <!-- banner area -->
     <div class="container-fluid banner-area">
       <div class="row">
         <div class=" col-lg-6">
           <div class="header">
               <h1>Welcome, Freshers!</h1>
               <p>We know the thought of this online semester is tickling your heads. Let us
                    help you with the many queries that you might have, be it academics or otherwise.
                     We have tried to address almost all important questions regarding the online mode of this
                      semester on this webpage.</p> 
                      <br>
                 <a  href="#academic-platforms"><button class="blue-button">Start Exploring</button></a>
               <br>
            </div>   
         </div>
         <div class=" col-lg-6">
           <img class="banner-img" src="images/main building.jpg" alt="">
         </div>
       </div>
     </div>
     <!-- banner area end -->

         <!-- steps -->
    <div class="container-fluid steps" id="academic-platforms">
        <h1 class="text-center">Academic Platforms</h1>
        <div class="row justify-content-center">
          <div class=" col-sm-12 col-md-6 col-lg-4 blue-box step step-1 text-center">
            <img src="assets/icon-step-1.png" alt="">
            <h3>Webmail </h3>
            <p>Webmail is a mailing platform developed by the CSC IIT Delhi.
                 Here you will get all the official mails from professors, deans etc 
                 and can contact them with this.</p>
                 <br>
                 <iframe width="320" height="240" src="https://drive.google.com/file/d/1qK9incfUsmSYWLPSbp_OatgAG5rhQ5iM/preview" style="position: relative; top: 27px; margin-bottom: 30px">
                </iframe>
          </div>
          <div class=" col-sm-12 col-md-6 col-lg-4 step step-2 text-center">
            <img src="assets/icon-step-2.png" alt="">
            <h3>Eacademics </h3>
            <p>Eacademics helps with all the Course Registration , Course Audit/Withdrawal , 
                Feedback form for courses, checking final semester CGPA/SGPA etc.</p>
                <iframe src ="https://drive.google.com/file/d/1t1psDW6UQAdQ9jBcmFPrXbT6JDmGLlkm/preview" width="320" height="240" controls style="position: relative; top: 40px;margin-bottom: 40px">
                </iframe>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4 blue-box step step-3 text-center">
            <img src="assets/icon-step-3.png" alt="">
            <h3>Moodle </h3>
            <p>The platform helps most in academics since professors will upload their lecture slides here 
                so that you can access them again. Here you will also be giving/submitting 
                many exams/assignments and get your marks in most of the cases.</p>
                <iframe src = "https://drive.google.com/file/d/1KduT2JcixeXRmD5PoDRl9fH8oHOg-Vlc/preview" width="320" height="240" controls>
                </iframe>
          </div>
          <div class=" col-sm-12 col-md-6 col-lg-4 step step-4 text-center">
            <img src="assets/icon-step-4.png" alt="">
            <h3>Courses of Study </h3>
            <p>Courses of study is what you need, to know anything, it contains all information about
               Grades, Requirements for Department Change, Courses to do in coming years, Courses 
               required for a Minor degree, Credits required to get degree etc. So don't miss this
                important document.

            </p>
            <iframe src = "https://drive.google.com/file/d/1pnhWqRn7356hKf5VNifcqD1P5qx7kRIM/preview" width="320" height="240" controls style="position: relative; top: 30px; margin-bottom: 40px">
            </iframe>
          </div>
          <div class=" col-sm-12 col-md-6 col-lg-4 blue-box step step-5 text-center">
            <img src="assets/icon-step-5.png" alt="">
            <h3>Impartus </h3>
            <p>Accessible through the moodle impartus will be your virtual classroom for this period of online
                 teaching for most of the courses. Also all the recorded lectures will be available here so that
                  you can attend classes in asynchronous mode also.</p>
                  <iframe src = "https://drive.google.com/file/d/1yZe7OEFrb5F0bJfR8UeyWzRJG2d6MXIB/preview" width="320" height="240" controls style="position: relative; top: 40px; margin-bottom: 30px">
                  </iframe>
          </div>
          <div class=" col-sm-12 col-md-6 col-lg-4 text-center step step-6 ">
            <img src="assets/icon-step-1.png" alt="">
            <h3> MS Teams</h3>
            <p> Some classes may be held here depending on the course coordinator so be ready with 
                this platform installed in the laptop.</p>
                <iframe src = "https://drive.google.com/file/d/1QbIjdHfTo0KW8M3SHZkpZm96QXaH3smp/preview" width="320" height="240" controls style="position: relative; top: 125px; margin-bottom: 80px">
                </iframe>
          </div>
        </div>
        <img class="element-5" src="assets/element-5.png" alt="">
        <img class="element-6" src="assets/element-6.png" alt="">
      </div>
      <hr>
      <!-- steps end -->


      <!-- founders and advisors -->
      <div class="container-fluid founders" id="counselling">
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-12 col-lg-6 founder text-center">
            <img src="images/yourdost.png" alt="">
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 founder">
            <h1>Counselling</h1>
            <h3><em>YourDOST</em></h3>
            <p>YourDOST provides an online counseling and emotional support platform designed to foster
                 mental wellness.</p>
                 <br><br>
                 <p class="text-center"><a href="https://yourdost.com" <a href="#"><button class="blue-button">Visit</button></a>
                </a></p>
          </div>
        </div>
        <img class="element-3-2" src="assets/element-3.png" alt="">
        <img class="element-2" src="assets/element-2.png" alt="">
        <br><br>
        <hr>
        <h1 class="text-center advisory-board">Student Counseling Service (SCS)</h1>
        <div class="row justify-content-center advisors">
          <div class="col-sm-12 col-md-12 col-lg-6 advisor advisor-1">
            <p style="line-height:2.5em;">SCS is the in-house counseling service at IITD. Students can set
                up an online-appointment with the counsellors by mailing on 
                iitdcounsellors@gmail.com. For students who feel the need to be in 
                touch with someone immediately, here are the contact numbers of our counsellors, 
                you can call them to discuss any of your concerns freely.</p>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 advisor advisor-2 text-center">
              <div class="phone-numbers">
                <p>Shachi : +91 9811290000</p>
                <p>Aakriti : +91 9871511186</p>
                <p>Krithika : +91 98713 84771</p>
            </div>
          </div>
        </div>
        </div>
        <!-- founders and advisors end -->

        <!-- services -->
        <div class="container-fluid services text-center" id="time-table">
        <h1 class="text-center">Time Table</h1>
        <p>To check out your day-to-day timetable, Semester Schedule or Exam Schedule please visit http://timetable.iitd.ac.in/</p>
        <br><br>
        <div class="text-center">
        <a href="http://timetable.iitd.ac.in/"><button style="background-color: #3b5249;" class="blue-button">Visit</button></a>
        </div>
        </div>
        <!-- services end -->




        <!-- benefits -->
        <div class="container-fluid benefits" id="resources">
        <h1 class="text-center">Resources</h1>
        <p>BSW strives hard towards making your life easier. You'll find all the important
          information that you might need in these coming few months of your journey at IITD, 
          under the Resources tab on our official website, 
          <a href="http://bsw.iitd.ac.in/index.php">http://bsw.iitd.ac.in/index.php</a> , covering:</p>
          <ol>
              <li>
                  Previous year Question papers
              </li>
              <li>
                  BSW Diary and booklet
              </li>
              <li>
                  Forms
              </li>
              <li>
                  Softwares and much more.
              </li>
          </ol>
        </div>
        <!-- benefits end -->

        <!-- FAQ's -->

        <div class="container-fluid faqs" id= "FAQS">
        <h1 class="text-center">Frequently Asked Questions(FAQs)</h1>
        </div>

        <div class="row">
          <div class="col  pricing-coloumn">
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0 text-center">
                    <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#One" aria-expanded="false" aria-controls="collapseOne">
                      Q1). How will our exams be conducted in this online sem?
                    </button>
                  </h5>
                </div>
                <div id="One" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
                    Ans.- Different courses will have different methods for evaluation depending on the course
                    coordinator. You will get to know about the evaluation policy in the first class of each course.                  </div>
                </div>
              </div>
            </div>
              <br>
          </div>
      </div>

      <div class="row">
        <div class="col  pricing-coloumn">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0 text-center">
                  <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Two" aria-expanded="false" aria-controls="collapseOne">
                    Q2). Will our online exams, quizzes be Proctored?
                  </button>
                </h5>
              </div>
              <div id="Two" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
                  Ans.- Again it depends on the course coordinator,if she wishes to she will surely take
               proctored examinations. But even if they don’t, many of them do use plagiarism softwares 
               for evaluation, So BEWARE!!                  </div>
              </div>
            </div>
            <br>
        </div>
    </div>
    </div>

    <div class="row">
      <div class="col  pricing-coloumn">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0 text-center">
                <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Three" aria-expanded="false" aria-controls="collapseOne">
                  Q3). What about labs? Will they be conducted online too?
                </button>
              </h5>
            </div>
            <div id="Three" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
                Ans.- No.You will be provided with take-home assignments or there will be
               live demonstrations with a viva-voce in the end. If nothing of the above mentioned takes place 
               then they would be conducted once you return to the campus. </div>
            </div>
          </div>
          <br>
      </div>
  </div>
  </div>

  <div class="row">
    <div class="col  pricing-coloumn">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0 text-center">
              <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Four" aria-expanded="false" aria-controls="collapseOne">
                Q4). How important submission deadlines really are in online exams?
              </button>
            </h5>
          </div>
          <div id="Four" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
              Ans.-Submission Deadlines are extremely important,taking them lightly will cost you a huge
                penalty or even a straight zero in some cases. Don’t worry additional time around 20-30mins 
                are provided for the submission process but it is highly advisable YOU USE THAT BUFFER TIME
                 FOR SUBMISSION PROCESS ONLY.</div>
          </div>
        </div>
        <br>
    </div>
  </div>
  </div>

  <div class="row">
    <div class="col  pricing-coloumn">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0 text-center">
              <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Five" aria-expanded="false" aria-controls="collapseOne">
                Q5). What is the maximum no. of courses/grades we can audit in an online semester?
              </button>
            </h5>
          </div>
          <div id="Five" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
              Ans.-For a First Year student,the maximum no. of courses he/she can audit is only 1 in each online
               semester. For other than UG First Year students the limit is 1 core course + 2 elective courses.</div>
          </div>
        </div>
        <br>
    </div>
  </div>
  </div>

  <div class="row">
    <div class="col  pricing-coloumn">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0 text-center">
              <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Six" aria-expanded="false" aria-controls="collapseOne">
                Q6). Will I be able to access previous year question papers for all
                courses to get a fair idea about the questions being asked?
              </button>
            </h5>
          </div>
          <div id="Six" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
              Ans.- Yes, we at BSW provide you with a vast question bank from the previous 5-6 yrs for all 
             the courses which is available in resources at our official webpage</div>
          </div>
        </div>
        <br>
    </div>
</div>
</div>

<div class="row">
  <div class="col  pricing-coloumn">
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0 text-center">
            <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Seven" aria-expanded="false" aria-controls="collapseOne">
              Q7). Will I be able to communicate effectively with the prof. regarding any concern in this online
               sem like we used to do in our offline semester?
            </button>
          </h5>
        </div>
        <div id="Seven" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
            Ans.-Yes,every course coordinator selects a class representative for a course who takes in account
             all of your concerns and reports it to the professor in-charge. You may also mail your concern
              directly to the professor via webmail.</div>
        </div>
      </div>
      <br>
  </div>
</div>
</div>

<div class="row">
  <div class="col  pricing-coloumn">
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0 text-center" style="padding-left: 60px; padding-right:60px;">
            <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Eight" aria-expanded="false" aria-controls="collapseOne">
              Q8). I am unable to cope up with the professor's teaching speed and also find it difficult to
               adapt to this new teaching system. Whom should I approach?
            </button>
          </h5>
        </div>
        <div id="Eight" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
            Ans.- It’s pretty normal as almost every fresher struggles to adapt in his/her first few weeks,so 
            the best person to approach is your mentor. BSW assigns every fresher a mentor who would help and
             guide you throughout your first year be it your acads, any other stress, social life,etc.
             If there are any academic related queries you could also approach academic mentors who are again 
             assigned by the BSW for each course.</div>
        </div>
      </div>
      <br>
  </div>
</div>
</div>

<div class="row">
  <div class="col  pricing-coloumn">
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0 text-center" style="padding-left: 60px; padding-right:60px;">
            <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Nine" aria-expanded="false" aria-controls="collapseOne">
              Q9). IITD is known for its campus life apart from studies which help you to relieve from academic
               stress, could we expect the same from this online semester?
            </button>
          </h5>
        </div>
        <div id="Nine" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
            Ans.-Yes, we at BSW will make sure we conduct various fun activities and stress relieving sessions
             regularly throughout the online semester which will surely get you engaged in activities apart
              from studies and help to relieve your stress.</div>
        </div>
      </div>
      <br>
  </div>
</div>
</div>



<div class="row">
  <div class="col  pricing-coloumn">
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0 text-center" style="padding-left: 60px; padding-right:60px;">
            <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Ten" aria-expanded="false" aria-controls="collapseOne">
              Q10). The region where I live has various connectivity issues/I have limited data plan,so couldn’t 
              attend online lectures or download necessary resources. Do IITD have some solution for such 
              situations??
            </button>
          </h5>
        </div>
        <div id="Ten" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
            Ans.-Yes,if any of the above mentioned problems occur in the online semester students are most 
            welcome to come back to the campus and use facilities available in the campus as rooms will also 
            be provided in their respective hostels. </div>
        </div>
      </div>
      <br>
  </div>
</div>
</div>


<div class="row">
  <div class="col  pricing-coloumn">
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0 text-center" style="padding-left: 60px; padding-right:60px;">
            <button class="btn btn-link" id="nameOne" data-toggle="collapse" data-target="#Eleven" aria-expanded="false" aria-controls="collapseOne">
              Q11). I’m recently getting poor marks in quizzes/exams whereas my friends/batchmates are getting
               pretty decent marks, so at times I feel too depressed and lonely and feel that I have no one to
                approach. Whom should I approach?
            </button>
          </h5>
        </div>
        <div id="Eleven" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body text-center" style="padding-left: 60px; padding-right:60px;">
            Ans.- We know these are unusual times and you all have to cope with a lot of uncertainty and stress 
            in your lives. Hope all of you are doing fine but if there’s anything troubling you, we request you 
            get in touch with someone. You are free to approach Student Counselling Service(SCS) or YourDost
             (free service for IITD students) where people are pleased and are keen to help you figuring out 
             solution to relieve your stress.Even if you feel that any of your friends are undergoing 
             depression,do approach them as your name will not come forward and you would remain anonymous.</div>
        </div>
      </div>
      <br>
  </div>
</div>
</div>



</div>

        <!-- footer -->
        <div class="footer">
        <p class="text-center">Copyright © 2020 - BSW IIT Delhi</p>
        <p class="text-center">Website Created and Maintained by : Harisam Sharma</p>
        </div>

        </body>
        </html>