<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $explode = explode('.',$file_name);
      $file_ext=strtolower(end($explode));
      
      $extensions= array("jpeg","jpg","png","pdf","txt", "docx", "doc", "xls");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a PDF, DOCX, TXT, JPEG or PNG file.";
          echo "<script>alert('Extension not allowed, please choose a PDF, DOCX, TXT, JPEG or PNG file.')</script>";
      }
      
      if($file_size > 6291456 ){
         $errors[]='File size must be less than 6 MB';
          echo "<script>alert('File size must be less than 6 MB')</script>";
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"New_Intern_Uploads/".$file_name);
         echo "<script>alert('File uploaded Successfully')</script>";
      }else{
        echo "<script>alert('Error uploading file. Please try again. If the problems presists, contact a BSW representative.')</script>";
      }
   }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

<title>Upload Internships | BSW</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<style type="text/css">

html {
overflow-y: scroll
}
.justifiedGallery {
width: 100%;
margin-bottom: 10px
}
.justifiedGallery .jg-image {
position: absolute;
display: inline-block;
vertical-align: top;
margin-left: 0
}
.justifiedGallery .jg-image img {
border: none;
display: none
}
.justifiedGallery .jg-image a {
text-decoration: none
}
.justifiedGallery .jg-image-label {
white-space: normal;
font: normal 12px arial;
background: #000;
color: #fff;
position: absolute;
left: 0;
right: 0;
padding: 5px 5px 10px 8px;
text-align: left;
opacity: 0;
filter: alpha(opacity=0)
}
.justifiedGallery .jg-loading-img {
margin: auto;
width: 50px;
height: 50px;
background: url(../img/loading.gif) no-repeat center center
}
.justifiedGallery .jg-loading {
margin: auto;
width: 50px;
height: 50px;
background-color: white;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px
}
.justifiedGallery .jg-row {
position: relative;
white-space: nowrap;
overflow: hidden;
margin-bottom: 4px
}

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
	.orientation-image{
		object-fit: cover !important;
		display: block;
		margin-bottom:10px;
		width:100%;
		height:100%;
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
            <h1 class="about-us-title">Upload Internship</h1>
            </div>

            <div class="col-12  ml-auto">
            <p class="about-us-text" style="color: #b00a0a;">
            (*All internships will be scrutinised by the Admin)            </p>
            </div>

		</div>
		

	</div>
	

</div>

<div class="container my-4">

Upload details about the internship using the form below.<br>
Allowed file formats are jpeg,  jpg,  png,  pdf,  txt,  docx,  doc and xls. <br>
Details must include Location, Stipend, Deadline to apply for the internship and whether it is full time or part time.

<form class="text-center my-2" action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image" class="my-4" /><br>
                    <input class="btn btn-primary btn-success" type="submit" value="Upload Internship Details" onclick="upload(event)"/>
                    <a href="intern.php" class="btn btn-primary btn-danger">Cancel Upload</a>
                 </form>

	

</div>

<?php require 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript">
</script>

</body>
</html>