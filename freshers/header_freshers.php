<style>
body {
  font-family: 'Nunito';
}
.dropdown-submenu {
    position: relative;
}
.bigcontainer{
}
.head {
  font-size: 18px; 
  font-weight: 400;
  color: white;
}
.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
}
.dropdown-submenu:hover .dropdown-menu {
    display: block;
}
#myNavbar a:hover {
  background-color: rgb(221, 11, 56);
}
li a{
  font-size: 18px;

}

</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="bigcontainer">
<nav class="navbar navbar-inverse navbar-fixed-top" style="height:50px;">
<div class="container-fluid" style="padding-top:10px;padding-bottom: 10px; background-color: rgb(8,29,60);">
<div class="navbar-header" style="padding-left:2px  ;">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
<a href="../index.php"><img class="navbar-brand" src="../images/bsw_logo.png"></a></div>
 <div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">


<li style="cursor: pointer;"><a class="dropdown-toggle" data-toggle="dropdown"><span class="head"><span class="fa fa-file-text"></span>&nbsp Orientation</span><span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="ugforms.php">Important Documents</a></li>
  <li><a href="schedule.php">Detailed Schedule</a></li>
  <li><a href="hotelsoutside.php">List of Hotels near IIT-Delhi</a></li>
 

</ul>
</li>
<li><a href="freshers.php#whattobring" name="whattobring"><span class="head"><span class="fa fa-check"></span>&nbsp What to Bring?</span></a></li>
<li style="cursor: pointer;"><a class="dropdown-toggle" data-toggle="dropdown"><span class="head"><span class="fa fa-home"></span>&nbsp Campus Life</span><span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="campuslife_hostels.php">Life in Hostels</a></li>
  <li><a href="campuslife_facilities.php">Facilities at IIT-Delhi</a></li>
  <li><a href="campuslife_studentBodies.php">Students Bodies in IIT-Delhi</a></li>
</ul>
</li>
<li style="cursor: pointer;"><a class="dropdown-toggle" data-toggle="dropdown"><span class="head"><span class="fa fa-thumb-tack"></span>&nbsp Student Center</span><span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="../diary.php">BSW Diary</a></li>
  <li><a href="../newsletter.php">BSW NewsLetter</a></li>
</ul>
</li>
<li><a href="faqs.php"><span class="head"><span class="fa fa-question-circle"></span>&nbsp FAQs</span></a></li>

</li>
<li><a href="../structure.php"><span class="head"><span class="fa fa-phone"></span>&nbsp Contact us</span></a></li>
</ul></div>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</div>
</div>
</nav>
