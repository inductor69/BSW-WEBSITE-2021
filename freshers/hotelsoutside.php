<html>
<head>
  <title>List of Hotels near IIT Delhi | BSW</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style2.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.5/scrollreveal.min.js"></script>
  <script>
     window.sr = ScrollReveal({ duration: 3000 });
  </script>
  <style>
  table, th, td {
    border: 2px solid black;
}
th, td {
    padding: 5px;
}
  </style>
</head>
<body style="font-family: 'Nunito';">
<!--Header-->
<?php include 'header_freshers.php'; ?>

  <div class="container-fluid blockacad" >
  <div class="row" id='anim'>

 
<div id="firstlink"></div>

<h2 id="objh" style="text-align:center; color: rgb(221, 11, 56); font-weight: 900; margin-top: 6%;margin-bottom: 5%;font-size: 40px;"><strong>List of Hotels near IIT-Delhi</strong></h2>
<b>Important Instructions</b>
<ul>
<li>This list is only for your reference and we do not take any responsibility of the rates provided or the service.</li>
<li>Neither IIT Delhi nor BSW has any tie up with these hotels and the list has been posted here just for students' convinience. Please don't ask for any discounts by using the name of BSW or IIT.</li>
<li>We would suggest you to use 'Oyo rooms' or any other app to get more competitive rates. You are free to bargain further for the rates as you wish.</li>
</ul>

<h2><center><b><a href = "https://docs.google.com/spreadsheets/d/1cx42VNjmDzTWYPBacRAarWmqAdyMO_6bLgywOyRagx4/edit?usp=sharing" target="_blank">Click Here</a></b> for list of hotels near IIT Delhi.</center></h2>

</div>
</div>
  <?php include 'footer_freshers.php'; ?>

  <script>
 
  sr.reveal('#anim');
sr.reveal('.well-lg');
</script>
<script type="text/javascript">$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      },1200, function(){
        window.location.hash = hash;
      });
    }
  });
});
        </script>

        
</body>
</html>