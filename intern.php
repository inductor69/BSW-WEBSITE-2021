<!doctype html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Internships | BSW</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


   <style type="text/css">

    body
    {
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

    /* /////////////Check css below this, extraa */

      #upload_intern_button {
      display: none;
      position: fixed;
      bottom: 20px;
      left: 30px;
      z-index: 99;
      font-size: 14px;
      border: none;
      outline: none;
      background-color: #d95b86d4 ;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
      }
      
      #upload_intern_button:hover {
      background-color: #555;
      } 
      @media only screen and (max-width : 320px) {
      #upload_intern_button{
      margin:auto;
       font-size: 70%;
      }
      }



ol .list {
    list-style: none;
    width: 600px;
    max-width: 90%;
}

ol .item {
    display: block;
    clear: both;
    counter-increment: list;
    padding-bottom: 4rem;
    font-size: 1.1rem;
    line-height: 1.375;
    position: relative;
    white-space: nowrap;
}

ol .item:before {
    font: bold 2.25rem/1 var(--font-number);
    content: counter(list);
    width: 5rem;
    height: 5rem;
    float: left;
    margin: 0 1.5rem 0.75rem 0;
    color: var(--bg);
    background: var(--highlight1) linear-gradient(to bottom right, var(--highlight1) 25%, var(--highlight2));
    text-shadow: 0 0 2px var(--highlight1);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    shape-outside: ellipse();
    z-index: 1;
}

ol .item:after {
    width: 2.5rem;
    height: 2.5rem;
    position: absolute;
    top: 0;
    left: 0;
    content: "";
    background: var(--highlight1);
    z-index: -1;
    border-top-left-radius: 3px;
}


ol .headline {
    padding: 0rem 0 0 0;
    margin: 0 0 1rem 0;
    font: normal 2rem var(--font-head);
}
ol li{
  white-space: nowrap !important;
}
.intern-info{


   width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
   
    font-family: var(--font);
  
}

.intern-info a{

color: #20AA9D;
}

</style>
</head>

<body>
<?php include 'components/header.php'; ?>
<a href="upload_intern.php"><button id="upload_intern_button" title="Post an Internship?">Want to Post an Internship? Click here</button></a>


    <div id="about-us">
    
        <div class="container">

            
            <div class="row justify-content-center">

                    <div class="col-12 col-lg-4 justify-content-center">
                        <h1 class="about-us-title">Internships Portal</h1>
                    </div>

                    <div class="col-12 col-lg-7 ml-auto">
                        <p class="about-us-text mt-4">
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                 
                        </p>
                    </div>

            </div>

        </div>

    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mt-4 ">
            <h4>Internship and Job Preparation Resources</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <a href="https://drive.google.com/open?id=18KV0Bfkp9efQ3OTL9Hbv3miND2XHq5T9" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 1
            </a>
            <a href="https://drive.google.com/open?id=1WS-CKOjEZ2i2Oj_AUxWTpwez7f9G2sJz" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 2
            </a>
            <a href="https://drive.google.com/open?id=1Jv8X0dxFJuEf_vfkkFkin8vCRmZuC-tU" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 3
            </a>
            <a href="https://drive.google.com/open?id=1fh1QXxcXTS3_x-txcBSYiog4NXEp9Qrp" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 4
            </a>
            <a href="https://drive.google.com/open?id=1LEXZn41-makMUoLpvYbJDDfPq6X_3FPu" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 5
            </a>
            <a href="https://drive.google.com/open?id=1Qcr1inDUL644clzvyXKsNakrhjdJQ2zc" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 6
            </a>
            <a href="https://drive.google.com/open?id=1LqViOWpbKBExPQsR-vtsGNc0R0LChvAz" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 7
            </a>
            <a href="https://drive.google.com/open?id=1OAHZIog2Uj6y_k4My7XVj09PCc3NSbwx" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 8
            </a>
            <a href="https://drive.google.com/open?id=1enEqzJ0_DmOeKf4hPhsaKoLvCjzsuuMI" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 9
            </a>
            <a href="https://drive.google.com/open?id=1vP3lJBR5hws8kaHXtN_xI0N04bg1xPkz" target="_blank" class="col-sm-6 col-md-4 col-lg-2 btn btn-dark mx-1 my-1">
                Resource 10
            </a>      
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mt-4 ">
            <h4>Available Internships</h4>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            
                <div class="btn-group-toggle row col-12 justify-content-center" data-toggle="buttons">

                    
                    <label class="btn btn-secondary active col-sm-4 col-md-3 col-lg-2 mt-2 mx-1">
                        <input type="checkbox" checked autocomplete="off"> Category 1
                    </label>

                    <label class="btn btn-secondary active col-sm-4 col-md-3 col-lg-2 mt-2 mx-1">
                        <input type="checkbox" checked autocomplete="off"> Category 2
                    </label>

                    <label class="btn btn-secondary active col-sm-4 col-md-3 col-lg-2 mt-2 mx-1">
                        <input type="checkbox" checked autocomplete="off"> Category 3
                    </label>

                    <label class="btn btn-secondary active col-sm-4 col-md-3 col-lg-2 mt-2 mx-1">
                        <input type="checkbox" checked autocomplete="off"> Category 4
                    </label>

                    <label class="btn btn-secondary active col-sm-4 col-md-3 col-lg-2 mt-2 mx-1">
                        <input type="checkbox" checked autocomplete="off"> Category 5
                    </label>

                    <label class="btn btn-secondary active col-sm-4 col-md-3 col-lg-2 mt-2 mx-1">
                        <input type="checkbox" checked autocomplete="off"> Category 6
                    </label>

                </div>

                </div>

                
            
            
        </div>
    </div>


      <!-- cd-tab-filter-wrapper -->
      <section class="cd-gallery">
         
      <div class="container">

      
        <div class="row justify-content-center">

        <ul class="list-unstyled list-group-horizontal col-12">

        <div class="row justify-content-center">

            <li class="cat1 col-12 col-lg-4 col-md-6">
                <div class="card mt-4 mb-2">
                  <h5 class="card-header text-center">Machine Learning Intern</h5>
                  <div class="card-body">
                     <h5 class="card-title text-center">Coursera</h5>
                     <hr>
                     <p class="card-text">
                          <div class="flex-container">
                                 <div><img src="images/placeholder_intern.png"  style="height: auto; width: 100%; border-radius: 10px; margin-bottom:10px; " ></div>
                                 <div>
                                     <div class="flex-row">
                                      
                                         <div ><span>Location:</span>Bangalore </div>
                                         <div ><span>Stipend:</span>₹ 5000/- + Certificate/LOR + PPO </div>
                                         <div ><span>Apply By:</span>Today</div>
                                         <div ><span>Type:</span>Full Time </div>
                                        
                                     </div>
                                 </div>
                            </div>
                     </p>
                     <div  style="float: right;">
                                 <button type="button" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#exampleModalCenter">
                           View & Apply
                         </button>
                           </div>
                         <!-- Modal -->
                         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                               </div>
                             </div>
                           </div>
                  </div>
               </div>

            </li>


            <li class="cat1 col-12 col-lg-4 col-md-6">
                <div class="card mt-4 mb-2">
                  <h5 class="card-header text-center">Machine Learning Intern</h5>
                  <div class="card-body">
                     <h5 class="card-title text-center">Coursera</h5>
                     <hr>
                     <p class="card-text">
                          <div class="flex-container">
                                 <div><img src="images/placeholder_intern.png"  style="height: auto; width: 100%; border-radius: 10px; margin-bottom:10px; " ></div>
                                 <div>
                                     <div class="flex-row">
                                      
                                         <div ><span>Location:</span>Bangalore </div>
                                         <div ><span>Stipend:</span>₹ 5000/- + Certificate/LOR + PPO </div>
                                         <div ><span>Apply By:</span>Today</div>
                                         <div ><span>Type:</span>Full Time </div>
                                        
                                     </div>
                                 </div>
                            </div>
                     </p>
                     <div  style="float: right;">
                                 <button type="button" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#exampleModalCenter">
                           View & Apply
                         </button>
                           </div>
                         <!-- Modal -->
                         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                               </div>
                             </div>
                           </div>
                  </div>
               </div>

            </li>


            <li class="cat1 col-12 col-lg-4 col-md-6">
                <div class="card mt-4 mb-2">
                  <h5 class="card-header text-center">Machine Learning Intern</h5>
                  <div class="card-body">
                     <h5 class="card-title text-center">Coursera</h5>
                     <hr>
                     <p class="card-text">
                          <div class="flex-container">
                                 <div><img src="images/placeholder_intern.png"  style="height: auto; width: 100%; border-radius: 10px; margin-bottom:10px; " ></div>
                                 <div>
                                     <div class="flex-row">
                                      
                                         <div ><span>Location:</span>Bangalore </div>
                                         <div ><span>Stipend:</span>₹ 5000/- + Certificate/LOR + PPO </div>
                                         <div ><span>Apply By:</span>Today</div>
                                         <div ><span>Type:</span>Full Time </div>
                                        
                                     </div>
                                 </div>
                            </div>
                     </p>
                     <div  style="float: right;">
                                 <button type="button" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#exampleModalCenter">
                           View & Apply
                         </button>
                           </div>
                         <!-- Modal -->
                         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                               </div>
                             </div>
                           </div>
                  </div>
               </div>

            </li>


            <li class="cat1 col-12 col-lg-4 col-md-6">
                <div class="card mt-4 mb-2">
                  <h5 class="card-header text-center">Machine Learning Intern</h5>
                  <div class="card-body">
                     <h5 class="card-title text-center">Coursera</h5>
                     <hr>
                     <p class="card-text">
                          <div class="flex-container">
                                 <div><img src="images/placeholder_intern.png"  style="height: auto; width: 100%; border-radius: 10px; margin-bottom:10px; " ></div>
                                 <div>
                                     <div class="flex-row">
                                      
                                         <div ><span>Location:</span>Bangalore </div>
                                         <div ><span>Stipend:</span>₹ 5000/- + Certificate/LOR + PPO </div>
                                         <div ><span>Apply By:</span>Today</div>
                                         <div ><span>Type:</span>Full Time </div>
                                        
                                     </div>
                                 </div>
                            </div>
                     </p>
                     <div  style="float: right;">
                                 <button type="button" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#exampleModalCenter">
                           View & Apply
                         </button>
                           </div>
                         <!-- Modal -->
                         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                               <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                 </button>
                               </div>
                               <div class="modal-body">
                                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                               </div>
                             </div>
                           </div>
                  </div>
               </div>

            </li>






                    </div>
                </div>
            </div>
            

      </section>
      <!-- cd-gallery -->
      
  
   
   <?php include 'components/footer.php'; ?>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
          if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 20) {
              document.getElementById("upload_intern_button").style.display = "block";
          } else {
              document.getElementById("upload_intern_button").style.display = "none";
          }
      }
      
      
   </script>
  
</body>
</html>