<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, mega menu examples" />
<meta name="description" content="Navigation  menu with submenu examples for any type of project, Bootstrap 4" />  


<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/w3.css" rel = "stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




<style type="text/css">

	body{
        
	}
	
	.about-us-title{
        margin-left: 10px;
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

    @media (max-width:768px){
        .sidenav{
            display: none;
        }
    }
    /* The sidebar menu */
    .sidenav {
    border-radius:20px;
    height: 100%;
    width:23%; /* Full-height: remove this if you want "auto" height */
    position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    z-index: 1; /* Stay on top */
    top: 62px; /* Stay at the top */
    left: 5px;
    background-color: #616161 !important; /* Black */
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 20px;
    }

    /* The navigation menu links */
    .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 16px;
    color: #fff;
    display: block;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
    color: #f1f1f1;
    }

    .main{
        width:78%!important;
    }

    .breadcrumb{
        margin-top:12px;
        position: sticky;
        top:60px;
        z-index: 100;
        background-color: #616161 !important; /* Black */
        border-radius:10px !important;
        opacity:0.8;
    }

    .w3-card-4{
       /* margin-top:2px;*/
        margin-bottom: 10px;
        border-radius:10px;
        padding:10px;
      }

    .w3-container.w3-light-grey{
        padding:10px;
        border-radius:10px;
        font-size:14px !important;
    }

    .w3-container.w3-light-grey h3{
        padding:10px;
        border-radius:10px;
        font-size:20px !important;
    }

    .w3-button.w3-block.w3-dark-grey{
        border-radius:10px;
    }
    .w3-container.clickable.list-group-item{
        border-radius:10px;
    }

    

	
</style>

</head>


<body >
		
<?php require 'components/header.php'; ?>
<?php require 'components/back_to_top.php'; ?>

<title>Question Papers | BSW</title>

<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center  offset-md-2 justify-content-center">

            <div class="col-12 col-lg-4 ml-4 ">
            <h1 class="about-us-title">Question Papers</h1>
            </div>

            <div class="col-12 col-lg-7 ml-auto justify-content-center">
            <p class="about-us-text my-4">
            BSW is providing previous year Question papers of Minors and Majors to boost
            up your preparation for exams.<br>
            You can also help in increasing our database by giving your Question papers
            and study material to the BSW Representatives, or you can directly upload
            question papers by clicking on Upload.           
            <br>
              <button class="btn btn-primary upbut mt-2 col-6 col-lg-4 mr-2 " id="upload-menu-toggle"> <span class="fa fa-upload"></span> Upload</button>
              <button class="btn btn-secondary upbut mt-2 col-6 col-lg-4 "> <span class="fa fa-cog"></span> Admin</button>
            </p>

            </div>



            <div class="row offset-md-1" id="uploadwala" style="display: none">

              <h4 class="col-12 ml-2">Upload Question Paper or Study Material</h4>
              <p class="col-12 ml-2">You can select multiple files. Only pdf, jpg, jpeg and png files are allowed. Maximum allowed file size is 5 MB.</p>

              <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal col-12">

              <div class="col-12">
                <input type="text" name="course" placeholder="Course name in (e.g. APL100)" required class="my-2 ml-2">
            </div>

                <select name="semester" placeholder="Semester" required class="my-2 ml-2">
                    <option value="Sem1">Sem1(July-Nov)</option>
                    <option value="Sem2">Sem2(Jan-May)</option>
                </select>
		  
                <select name="acad_year" placeholder="Academic Year (2020-21)  " required class="my-2 ml-2">
                    <option value="2017-18">2017-18</option>
                    <option value="2018-19">2018-19</option>
                    <option value="2018-19">2019-20</option>
                    <option value="2016-17">2020-21</option>
                </select>
		          
                <select name="exam" placeholder="Exam" required class="my-2 ml-2">
                    <option value="Minor1">Minor1</option>
                    <option value="Minor2">Minor2</option>
                    <option value="Major">Major</option>
                </select> 



            <input class="btn btn-secondary my-2 ml-2" type="file" title="Select papers to upload" name="papers[]" multiple = 'yes' required  accept=".pdf,.jpg,.jpeg,.png">
            <br>
            <input class="btn btn-primary uploadbut my-2 ml-2" type="submit" value="Confirm Upload">
            <input class="btn btn-danger uploadbut my-2 ml-2" value="Cancel Upload" id="cancel-upload">
            <br>
            <br>
            
            </form>

          <?php
          
          if ($_SERVER["REQUEST_METHOD"] == "POST")
          {
            echo "<h4>Status</h4>";
            $allowed_types = array("pdf", "jpg", "jpeg", "png");
            $coursem = $_POST["course"];
            $semester = $_POST["semester"];
            $acad_year = $_POST["acad_year"];
            $exam=$_POST["exam"];
            for ($i=0; $i<count($_FILES["papers"]["name"]); $i++){
              echo "<strong>".$_FILES["papers"]["name"][$i]."</strong>: ";
              $FileType = strtolower(pathinfo($_FILES["papers"]["name"][$i],PATHINFO_EXTENSION));
              if ($_FILES["papers"]["size"][$i] > 5242880) {
                echo "Maximum allowed file size is 5 MB<br>";
              }
              else if(!in_array($FileType,$allowed_types)) {
                echo "Only PDF, JPG, JPEG, PNG files are allowed.<br>";
              }
              else{
                $j=1;
                $file = str_replace(".".$FileType,"",$_FILES["papers"]["name"][$i]);
                $file = str_replace(strtoupper(".".$FileType),"",$file);
                $file1 = "";
                $course=strtoupper($coursem);
                if ($course != "")
                  $file1 .= str_replace(" ","_",$coursem)."_";
                if ($exam != "")
                  $file1 .= str_replace(" ","",$exam)."_";
                if ($acad_year != "")
                  $file1 .= str_replace(" ","_",$acad_year)."_";
                if ($semester != "")
                  $file1 .= str_replace(" ","",$semester);
                
                $file = $file1;
                $target_file = $file . ".".$FileType;
                $target_dir = "New_QP_Uploads/";
                while (file_exists($target_dir.$target_file)){
                  $target_file = $file . "-".$j.".".$FileType;
                  $j++;
                }
                if (move_uploaded_file($_FILES["papers"]["tmp_name"][$i],$target_dir.$target_file)){
                  chmod ($target_dir.$target_file,0660);
                  echo "Uploaded","<br>";
                  echo "
                    <script>
                        //alert(\"File uploaded, Press OK\");
                        $(\".uploadblock\").removeClass(\"collapse\");
                    </script>
                    
                  ";
                  echo "Thanks for helping us!";

                }
                else
                  echo "Error in uploading file";
              }
              echo "<br>";
            }
            if (empty($_POST["course"])) {
            $courseErr = "Course Name is required";
              } else {
            //$coursem = test_input($_POST["course"]);
              }
            if (empty($_POST["acad_year"])) {
            $acad_yearErr = "Academic Year is required";
              } else {
            //$acad_year = test_input($_POST["acad_year"]);
              }
          }
          function generateRandomString($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
              $randomString .= $characters[rand(0, 9)];
            }
            return $randomString;
          }

          ?>
            </div>
            </div>

        </div>

    </div>

</div>


<div class="container-fluid" id="question-paper-container">

      <div class="row ">

        <div class="col-md-3 sidenav-div">
          <ul class="list-unstyled sidenav">
          <?php
          $coursarrnav = [
              "PTL" => "Polymer Technology",
              "DSP" => "Digital Signal Processing",
              "APL" => "Applied Mechanics",
              "ASL" => "Atmospheric Sciences",
              "SBL" => "Basic Biology",
              "BBL" => "Biotechnology",
              "CML" => "Chemical Engineering",
              "CVL" => "Civil Engineering",
              "COL" => "Computer Science and Engineering",
              "ELL" => "Electrical Engineering",
              "HUL" => "Humanities & Social Sciences",
              "MTL" => "Mathematics",
              "MCL" => "Mechanical Engineering",
              "PYL" => "Physics",
              "PRC" => "Practical Courses",
              "TTL" => "Textile Technology",
              "AML" => "Applied Mechanics",
              "BML" => "Biomedical Engineering",
              "CLL" => "Chemical Engineering",
              "CRL" => "Electronics Research",
              "DSL" => "Design & Development",
              "ESL" => "Energy Studies",
              "ITL" =>
                  "Industrial Tribology, Machine Dynamics and Maintenance Engineering Centre",
              "MCV" => "Mechanical Engineering",
              "MSV" => "Management Studies",
              "MSL" => "Management Studies",
              "PHL" => "Physics",
              "RDL" => "Rural Development and Technology",
              "TXL" => "Textile Technology",
              "VEL" => "Value Education",
              "BEL" => "Bioprocesses",
              "BHL" => "Bioprocesses",
              "CEL" => "Civil Engineering",
              "CHL" => "Chemical Engineering",
              "CYL" => "Practical Chemistry",
              "EPL" => "Physics",
              "EPV" => "Physics",
              "MAL" => "Mathematics",
              "MCP" => "Workshop",
              "MEL" => "Industrial Engineering",
              "SBV" => "Biology",
              "SML" => "Management",
              "EEL" => "Electrical Engineering",
          ];
          chdir("studydatabase");

          $netdeptnav = scandir(".");

          $listnetdeptnav = $netdeptnav;

          $numdeptnav = count($listnetdeptnav);
          for ($n = 2; $n < $numdeptnav; $n++) {
              echo "
                    <li><a href=\"#\" id=\"sideli\" class=\"wonna\" >" .
                  $coursarrnav[$listnetdeptnav[$n]] .
                  " (" .
                  $listnetdeptnav[$n] .
                  ")</a></li>
                    ";
          }
          chdir("../");
          ?>

          </ul>
        </div>

    <div class="col-12 col-md-9  col-md-offset-2 main" >

            <ul class="breadcrumb">
              <form style="display:inline; float:right; width:100%; max-width:400px; border-radius:10px !important;">
                    <input type="text"  class="form-control"   placeholder="Search for any course or department here..." id="merainputdown">
                </form> 
            </ul>


          
          <div class="row cardshaimere"  id="cardsid" >

          <?php
          chdir("studydatabase");
          $netdept = scandir(".");
          $coursarr = [
              "PTL" => "Polymer Technology",
              "TXL" => "Textile Technology",
              "APL" => "Applied Mechanics",
              "ASL" => "Atmospheric Sciences",
              "SBL" => "Biological Sciences",
              "BBL" => "Biotechnology",
              "CML" => "Chemistry",
              "CVL" => "Civil Engineering",
              "COL" => "Computer Science",
              "ELL" => "Electrical Engineering",
              "HUL" => "Humanities & So.Sc.",
              "MTL" => "Mathematics",
              "MCL" => "Mechanical Engineering",
              "PYL" => "Physics",
              "PRC" => "Practical Courses",
              "TTL" => "Textile Technology",
              "AML" => "Applied Mechanics",
              "BML" => "Biomedical Engineering",
              "CLL" => "Chemical Engineering",
              "CRL" => "Electronics Research",
              "DSL" => "Design & Development",
              "DSP" => "Digital Signal Processing",
              "ESL" => "Energy Studies",
              "ITL" => "Industrial Engineering",
              "MCV" => "Mechanical Engineering",
              "MSV" => "Management Studies",
              "MSL" => "Management Studies",
              "PHL" => "Physics",
              "RDL" => "Rural Development & Tech",
              "txl" => "Textile Technology",
              "VEL" => "NRCVEE",
              "BEL" => "Bioprocesses",
              "BHL" => "Bioprocesses",
              "CEL" => "Civil Engineering",
              "CHL" => "Chemical Engineering",
              "CYL" => "Practical Chemistry",
              "EPL" => "Physics",
              "EPV" => "Physics",
              "MAL" => "Mathematics",
              "MCP" => "Workshop",
              "MEL" => "Industrial Engineering",
              "SBV" => "Biology",
              "SML" => "Management",
              "EEL" => "Electrical Engineering",
          ];
          $listnetdept = $netdept;

          $numdept = count($listnetdept);
          for ($k = 2; $k < $numdept; $k++) {
              chdir("$listnetdept[$k]");
              $netcourses = scandir(".");
              $listnetcourses = $netcourses;
              //var_dump($listnetcourses);
              $numcourses = count($listnetcourses);
              echo "
                    <div class=\"col-xs-12 col-sm-4\" id=\"superup\" >
                        <div class=\"w3-card-4 \" style=\"width:100% \">
                        <header class=\"w3-container w3-light-grey\" style=\"text-align: center;\">
                            <h3>" .
                  $coursarr[$listnetdept[$k]] .
                  "<br> (" .
                  $listnetdept[$k] .
                  ") </h3>
                        </header>
                        <div class=\"w3-container clickable\" style=\"height: 250px; overflow: scroll;  text-align: center\" >
                        <br>
                        <div class =\"list-group\" >";
              for ($l = 2; $l < $numcourses; $l++) {
                  echo "
                         <a href=\"coursepage.php?course=" .
                      $listnetcourses[$l] .
                      "\" class=\"list-group-item\">" .
                      $listnetcourses[$l] .
                      "</a>
                    ";
              }
              echo "
                        </div>
                
                        </div>
                        <button class=\"w3-button ".$listnetdept[$k]." w3-block w3-dark-grey viewallbutton" .
                  $k .
                  "\" href=\"#\">View all courses ↓</button>
                      </div>
          
                    </div>
                ";
              chdir("../");
          }
          ?>


        </div>
</div>
<div class="col-12 col-md-9 offset-md-3" >

<?php require 'components/footer.php'; ?>
<?php require 'components/back_to_top.php'; ?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



<script>

$(document).ready(function(){
  
  
  $("#merainputdown").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    
    $("#cardsid .col-sm-4").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });

    $(".sidenav-div #sideli").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });

  $(".w3-card-4 button ").click(function(){
            if($(this).text() == "Contract ↑"  )
            {
                $(this).parent().children(".clickable").height("250px");
                $(this).text("View all courses ↓");
            }
            else{
                $(this).parent().children(".clickable").height("auto").css('min-height', '250px');
                $(this).text("Contract ↑"); 
            }
         
        });

});


    

</script>

<script>
$(document).ready(function(){
  
  $("#merainput").on("keyup", function() {

    var value = $(this).val().toLowerCase();

    $("#cardsid .col-sm-4").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);  
    });

    $(".sidenav #sideli").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); 
    });

    

});
</script>


<script>

$(document).ready(function(){

  $('#upload-menu-toggle').click(function(){
      $('#uploadwala').show();
      $('#upload-menu-toggle').prop('disabled', true);

  })

  $('#cancel-upload').click(function(){
      $('#uploadwala').hide();
      $('#upload-menu-toggle').prop('disabled', false);
  })

});

$(".wonna").click(function(){
      var nopes =  $(this).text().toLowerCase().substr(0,4);

      $("#cardsid .col-sm-4").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(nopes) > -1);
    });

    
    $(".clickable").height("auto");
    
    $(".w3-card-4 button").text("All courses above");
    });
</script>

</body>
</html>