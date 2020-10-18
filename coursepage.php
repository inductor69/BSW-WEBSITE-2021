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
		
<?php require 'components/header.php'; 
    $namecourse = $_GET["course"];

    $curr = getcwd();
                            
    $dept = substr($namecourse,0,3);

    if($dept=="CMP" || $dept== "MCP" || $dept=="PYP"){
        $dept="PRC";
      }

?>

<title><?= $namecourse ?> | BSW</title>


<div id="about-us">
    
    <br />

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 justify-content-center style="text-align: center;">
            <h1 class="about-us-title"><?= $namecourse ?></h1>
            <p>Trouble finding anything? <a href="feedback.php">Report it here</a>.</p>
            </div>

        </div>

    </div>

</div>

<div class="container-fluid" id="softwares-list">

<div class="row placeholders ">
              <div class="col-12 col-md-4 minor1"  >
                  
                    <div class="w3-card-4 ">
                      <header class="w3-container w3-light-grey" style="text-align: center">
                        <h3>Minor 1</h3>
                      </header>
                      <div class="w3-container clickable " style="height: 200px; overflow: scroll; min-height: 200px;  text-align: center" >
                      <br>
                        <div class ="list-group" >
                          <?php
                            
                            $dir="studydatabase";
                            chdir("$dir");
                            chdir("$dept");
                            chdir($_GET["course"]);
                            chdir("minor1");

                            $files=scandir(".");
                            $list=$files;

                            $lenminor1 = count($list);

                            if($lenminor1==2){
                              echo "
                                 <script>
                                    document.getElementsByClassName(\"minor1\")[0].style.display = \"none\";
                                 </script>
                              ";
                            }

                            for($x=2;$x<$lenminor1;$x++)
                            {
                                $pdf = $list[$x];
                                $temparr = explode(".",$pdf);
                                $pdfname = $temparr[0];
                                $temparr2 = explode("_",$pdfname);
                                $semdata = $temparr2[3];
                                $yeardata = $temparr2[2];
                                echo "<a href=\"studydatabase/".$dept."/".$namecourse."/minor1/".$pdf."\" class=\"list-group-item\" target='_blank' rel='noopener noreferrer'> ".$semdata." | ".$yeardata."</a>";
                            }

                            ?>
                        </div>
              
                      </div>

                      <button class="w3-button w3-block w3-dark-grey " href="#">Expand ↓</button>
                    </div>
        
                </div>

                <div class="col-12 col-md-4 minor2"  >
                    
                      <div class="w3-card-4 " >
                        <header class="w3-container w3-light-grey" style="text-align: center">
                          <h3>Minor 2</h3>
                        </header>
                        <div class="w3-container clickable" style="height: 200px; overflow: scroll;min-height: 200px;  text-align: center" >
                        <br>
                          <div class ="list-group" >
                          <?php
                            chdir("../");
                            $curr = getcwd();

                            chdir("minor2");
                            $files=scandir(".");
                            $list=$files;

                            $lenminor2 = count($list);
                            if($lenminor2==2){
                              echo "
                                 <script>
                                    document.getElementsByClassName(\"minor2\")[0].style.display = \"none\";
                                 </script>
                              ";
                            }
                            for($x=2;$x<$lenminor2;$x++)
                            {
                                
                                $pdf = $list[$x];
                                $temparr = explode(".",$pdf);
                                $pdfname = $temparr[0];
                                $temparr2 = explode("_",$pdfname);
                                $semdata = $temparr2[3];
                                $yeardata = $temparr2[2];
                                echo "<a href=\"studydatabase/".$dept."/".$namecourse."/minor2/".$pdf."\" class=\"list-group-item\" target='_blank' rel='noopener noreferrer'> ".$semdata." | ".$yeardata."</a>";
                            }
                            ?>
                          </div>
                
                        </div>
                        <button class="w3-button w3-block w3-dark-grey" href="#" id="Minor2-expand">Expand ↓</button>
                      </div>
          
                  </div>

                  <div class="col-12 col-md-4 major"  >
                      
                        <div class="w3-card-4 " ">
                          <header class="w3-container w3-light-grey" style="text-align: center">
                            <h3>Majors</h3>
                          </header>
                          <div class="w3-container clickable" style="height: 200px; overflow: scroll;min-height: 200px;  text-align: center" >
                          <br>
                            <div class ="list-group" >

                            <?php
                            chdir("../");
                            $curr = getcwd();

                            chdir("major");
                            $files=scandir(".");
                            $list=$files;
                            $lenmajor = count($list);
                            if($lenmajor==2){
                              echo "
                                 <script>
                                    document.getElementsByClassName(\"major\")[0].style.display = \"none\";
                                 </script>
                              ";
                            }
                            for($x=2;$x<$lenmajor;$x++)
                            {
                                $pdf = $list[$x];
                                $temparr = explode(".",$pdf);
                                $pdfname = $temparr[0];
                                $temparr2 = explode("_",$pdfname);
                                $semdata = $temparr2[3];
                                $yeardata = $temparr2[2];
                                echo "<a href=\"studydatabase/".$dept."/".$namecourse."/major/".$pdf."\" class=\"list-group-item\" target='_blank' rel='noopener noreferrer'> ".$semdata." | ".$yeardata."</a>";
                            }
                            ?>
                            </div>
                            
                  
                          </div>
                          <button class="w3-button w3-block w3-dark-grey" href="#">Expand ↓</button>
                        </div>
            
                    </div>
                    <?php
                            if($lenmajor==2 && $lenminor1==2 && $lenminor2==2){
                              echo "<a>Sorry! But nothing has been found in the database regarding this course, Come back later sometime.</a>", "<br>";
                            }
                            ?>
          </div>
        </div>
      </div>

</div>
<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
      
        $(".minor1 .w3-card-4 button").click(function(){
            if($(this).text() == "Contract ↑"  )
            {
                $(".minor1 .clickable").height("200px");
                $(this).text("Expand ↓");
            }
            else{
                $(".minor1 .clickable").height("auto");
                $(this).text("Contract ↑"); 
            }
         
        });

        $(".minor2 .w3-card-4 button").click(function(){
            if($(this).text() == "Contract ↑"  )
            {
                $(".minor2 .clickable").height("200px");
                $(this).text("Expand ↓");
            }
            else{
                $(".minor2 .clickable").height("auto");
                $(this).text("Contract ↑"); 
            }
         
        });

        $(".major .w3-card-4 button").click(function(){
            if($(this).text() == "Contract ↑"  )
            {
                $(".major .clickable").height("200px");
                $(this).text("Expand ↓");
            }
            else{
                $(".major .clickable").height("auto");
                $(this).text("Contract ↑"); 
            }
         
        });
        

    });
    </script>

</body>
</html>