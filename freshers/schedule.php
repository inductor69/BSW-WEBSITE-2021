<html>
<head>
  <title>Schedule | BSW</title>
  <meta charset="utf-8"> 
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
  
</head>
<body style="font-family: 'Nunito';">
<!--Header-->
<?php include 'header_freshers.php'; ?>

  <div class="container-fluid blockacad" >
  <div class="row" id='anim'>

 
<div id="firstlink"></div>

<h2 id="objh" style="text-align:center; color: rgb(221, 11, 56); font-weight: 900; margin-top: 6%;margin-bottom: 5%;font-size: 40px;"><strong>Schedule - Orientation</strong></h2>
<center>

<h3>
<b><a href = "#" >UG Orientation for 2018</a></b>
<br><br>
<b><a href = "#" >PG Orientation for 2018</a></b>
</h3>

</center>
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