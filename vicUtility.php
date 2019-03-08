<?php
  function deHeader($title, $keywords,$adjust, $description){
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo $description ?>" />
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="author" content="Vicman, vicmanthebest@gamil.com" />
        <meta name="copyright" content="VICTECH Global Company" />
        <meta name="topic" content="Web design and programming in Enugu Nigeria" />
        <meta name="designer" content="Vic-Tech Global Comapany Enugu, Nigeria" />
        <meta name="classification" content="Web design and programming" />
        <meta name="summary" content="Web design and programming" />
        <meta name="url" content="" /><!-- Remember to add the url of your website here -->
        <meta name="summary" content="Web design and programming" />
        <meta name="coverage" content="Nigeria" />
        <link href="Css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="Css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="Css/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="Css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="Css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="Css/vicTechDesigns.css" rel="stylesheet" type="text/css"/>
        <title> <?php echo $title ?></title>
    </head>




<?php
  }
?>







<?php
    function foota($adjust = false){
?>
        <a href="javascript:void(0);" title="Go To Top" id="scrolla" style="display:none" class="">
          <span></span>
        </a>
        <div class="container-fluid">
             <div class="row footer1">
               <div class=" col-xs-6 col-sm-6 col-md-4 col-lg-4" >
                  <h4><i class="fas fa-cart-plus"></i> Our Services </h4>
                  <hr>
                  <ul> 
                    <li class="wow jackInTheBox"><a href=""> Web Design/Application</a> </li>
                    <li  class="wow slideInLeft"><a href=""> Mobile/Amdroid Application</a> </li>
                    <li class="wow zoomIn"><a href=""> Web Trianing </a></li>
                    <li class="wow lightSpeedIn"><a href=""> Web security </a></li>
                    <li class="wow bounceInUp"><a href=""> Content Management </a></li>
                  </ul>
                </div>

              <div  class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <h4><i class="fas fa-phone"></i>  Contact Us</h4>
                <hr>
                <dl>
                  <dt class=" wow jackInTheBox"> Head Office: </dt> 
                  <dd class=" wow zoomInUp"><address> No 55 mount street Awkunanaw Enugu</address> </dd>
                  <dt class=" wow zoomInRight"><a href=""> Mobile No :</a></dt>
                  <dd class=" wow zoomInLeft"><a href=""> +2348102764439</dd>
                  <dt class=" wow zoomInDown"><a href="">Email address:</a> </dt>
                  <dd class=" wow zoomIn"><a href=""> info@victechGlobal.com.ng</a></dd>
                </dl>
                    

              </div>

              <div  class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <h4><i class="fas fa-arrow-down"></i>  More</h4> 
                <hr>
                <ul>
                 <li class=" wow bounceInLeft"><i class="fab fa-ussunnah"></i><a href="">  Terms and conditions </a></li>
                 <li class=" wow bounceInRight"> <i class="fas fa-box"></i> <a href=""> Portfolio </a></li>
                 <li class="wow shake"> <i class="fas  fa-graduation-cap"> </i> <a href="">Apply To Learn </a></li>
                  
                </ul>
                    

              </div>
            </div>

          <!-- The social platforms -->
            <div class="row socials">

            <!-- The facebook Icon-->
              <div  class="col-2 col-md-2 col-lg-2">

                <a href=""><i class="fab fa-facebook-square"></i></a>

              </div>

            <!-- The Twittee Icon-->
              <div  class="col-2  col-md-2 col-lg-2">

                <a href=""><i class="fab  fa-twitter"></i></a>

              </div>

            <!-- The linkedIn Icon-->
              <div  class="col-2  col-md-2 col-lg-2">

                <a href=""><i class="fab  fa-linkedin"></i></a>

              </div>

              <!-- The Gmail Icon-->
              <div  class="col-2  col-md-2 col-lg-2">

                <a href=""> <i class="fab  fa-google-plus-square"></i></a>

              </div>

              <!-- The Instagram Icon-->
              <div  class="col-2  col-md-2 col-lg-2">

                <a href=""><i class="fab  fa-instagram"></i></a>

              </div>

              <!-- The facebook-share Icon-->
              <div  class="col-2  col-md-2 col-lg-2">

                <a href=""><i class="far  fa-share-square"></i></a>

              </div>

              

              
            </div>
            <hr>
            <div class="termsAndCon">
                <p> VICTECH GLOBAL © 2019-All RIGHTS RESERVED </P>
            </div>
      </div>


      <script src="Javascript/jquery-3.2.1.min.js"> </script>
      <script src="Javascript/popper.min.js"> </script>
      <script src="Javascript/bootstrap.js"> </script>
      <script src="Javascript/owl.carousel.min.js"> </script>
      <script src="Javascript/wow.min.js"> </script>
      <script src="Javascript/MyScript.js"> </script>
    </body>
  </html>


<?php
    }
?>