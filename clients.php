<?php
    require_once("vicUtility.php");
    deHeader("VICTECH GLOBAL - Clients|Portfolio","Victech, Web design, application development, clients, portfolio, Enugu, Nigeria", $adjust = false,"Web design / Programming company in Enugu Nigeria");
?>

<body>
      <!-- This is where the content of the webpage started -->
      
            <nav class="navbar navbar-expand-lg navbar-light fixed-top"><!-- the Nav section -->
                    <a class="navbar-brand" href="#">
                    <img src="Images/logo.jpg" width="30" height="30" class="d-inline-block align-top" />
                        <strong><b> VIC-TECH</b></strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item  wow flash">
                        <a class="nav-link" href="index.php"> <i class="fas fa-home"></i>Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item wow active heartBeat">
                        <a class="nav-link" href="clients.php"><i class="fas fa-user-tie"></i>Clients</a>
                        </li>

                        <li class="nav-item  wow shake">
                        <a class="nav-link" href="services.php"><i class="fab fa-servicestack"></i>Services</a>
                        </li>
                        
                        <li class="nav-item  wow swing">
                        <a class="nav-link" href="AboutUs.php"><i class="fab fa-accessible-icon"></i>About Us</a>
                        </li>
                        <li class="nav-item  wow tada">
                        <a class="nav-link" href="Contact.php"><i class="fas fa-phone"></i>Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 form-control-sm" id="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0 btn-sm" type="submit">Search</button>
                    </form>
        </nav>
    
    <div class="container-fluid clientsArea">
        <div class="row">
            <div class="client-Text offset-xs-2 offset-sm-2 offset-lg-5 offset-md-5">
               <span class="wow bounceInLeft"></span> <p class="wow bounceInUp"> Our Clients <i class="fas fa-user-friends"></i></p>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-4 col-lg-4">
                <div class="card client-Card wow bounceInRight" style="width: 18rem ;" id="clientCard1">
                    <img = class="card-img-top rounded-Image" src="Images/Suneng and works.jpg" alt="">    
                    <div class="card-body">
                        <h5 class="card-title card-title-client"> SUNENG AND WORKS LIMITED</h5>
                        <p class="card-text">SUNENG AND WORKS  is a mechanical company which we have exploited using the 
                            our latest web developement and have made impact to the comapny with our latest tech. We can help you actualise
                            your own dreams with this tech. You can view the testimonies <a href="">Here </a>
                        </p>
                        <button class="btn btn-outline-primary"><a href="">Visit site <i class="fas fa-arrow-right"></i></a></button>
                    </div>
                </div>
            </div> 


            <div class="col-md-4 col-lg-4">
                <div class="card client-Card wow zoomInUp" style="width: 18rem ;" id="clientCard1">
                    <img = class="card-img-top rounded-Image img-fluid" src="Images/Megagospelmusic.jpg" alt="">    
                    <div class="card-body">
                        <h5 class="card-title card-title-client"> MegagospelMusic</h5>
                        <p class="card-text">Megagospel Music is a personal blog created by VICTECH Global.
                            it is the first site hosted by Vic-Tech Global. Even though the animation is a kinda poor,
                            the owner of the site appreciates Vic-Tech Gloval for the impact their have made in the blog. The best way to go digital 
                            is globalization. You can take a look at their testimonies.<a href="">Here </a>
                        </p>
                        <button class="btn btn-outline-primary"><a href="">Visit site <i class="fas fa-arrow-right"></i></a></button>
                    </div>
                </div>
            </div> 



            <div class="col-md-4 col-lg-4">
                <div class="card client-Card wow bounceInLeft" style="width: 18rem ;" id="clientCard1">
                    <img = class="card-img-top rounded-Image img-fluid" src="Images/Megagospelmusic.jpg" alt="">    
                    <div class="card-body">
                        <h5 class="card-title card-title-client"> Agro-Tech</h5>
                        <p class="card-text">Megagospel Music is a personal blog created by VICTECH Global.
                            it is the first site hosted by Vic-Tech Global. Even though the animation is a kinda poor,
                            the owner of the site appreciates Vic-Tech Gloval for the impact their have made in the blog. The best way to go digital 
                            is globalization. You can take a look at their testimonies.<a href="">Here </a>
                        </p>
                        <button class="btn btn-outline-primary"><a href="">Visit site <i class="fas fa-arrow-right"></i></a></button>
                    </div>
                </div>
            </div> 



        </div>
    </div>



<?php
    foota();
?>