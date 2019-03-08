<?php
require_once("vicUtility.php");

 deHeader("VIC-TECH GLOBAL - Contact","Victech, Web design, application development,contact,  Nigeria", $adjust = false,"Web design / Programming company in Enugu Nigeria");
?>



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
                        <li class="nav-item wow  tada">
                        <a class="nav-link" href="clients.php"><i class="fas fa-user-tie"></i>Clients</a>
                        </li>

                        <li class="nav-item  wow shake">
                        <a class="nav-link" href="services.php"><i class="fab fa-servicestack"></i>Services</a>
                        </li>
                        
                        <li class="nav-item  wow swing">
                        <a class="nav-link" href="AboutUs.php"><i class="fab fa-accessible-icon"></i>About Us</a>
                        </li>
                        <li class="nav-item  active  wow heartBeat">
                        <a class="nav-link" href="Contact.php"><i class="fas fa-phone"></i>Contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 form-control-sm" id="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0 btn-sm" type="submit">Search</button>
                    </form>
             </nav>
            <!-- This is where the nav ends -->


        <div class="container-fluid">

            <div class="row Contact">
                <blockquote>Contact Us </blockquote>
            </div>

            <div class="row connections">

                    <div class="col-md-6 col-lg-6 deDetails">
                        <dl>
                            <dt>Film  Addrerss</dt>
                            <dd> 55 Mount Street Awkunanaw, Enugu State, Nigeria</dd>
                            <dt>Email</dt>
                            <dd>info@victechglobal.com</dd>
                            <dt>Mobile No</dt>
                            <dd>+2348102764439</dd>
                            <dt>Connect With Us</dt>
                            <dd id="daSocail"><a href=""><i class="fab fa-facebook-square"></i></a> <a href=""><i class="fab  fa-twitter"></i></a> <a href=""><i class="fab  fa-linkedin"></i></a> <a href=""><i class="fab  fa-google-plus-square"></i></a> <a href=""><i class="fab  fa-instagram"></i></a> <a href=""><i class="fab  fa-whatsapp"></i></a></dd>
                        </dl>

                        <img src="Images/Programming4.jpeg" alt="" class="img-fluid" />
                    </div>



            <!-- This is where the form started-->
			<?php
				if(isset($_POST["submitButton"])){
					processForm(); // If the user submits the form, call this function
				}else{
					displayForm(array()); // Display This if the the user loads the page
				}

				function validateFields($fieldName, $missingFields){ // Validating the label i.e putting the red color to show an error.
					if(in_array($fieldName, $missingFields)){
						echo 'class="alert alert-danger"';
					}
				}

				function setValue($fieldName){ // Sets the value of the previous so that user don't need to retype
					if(isset($_POST[$fieldName])){
						echo $_POST[$fieldName];
					}
				}

				function setChecked($fieldName, $fieldValue){
					if(isset($_POST[$fieldName]) and $_POST[$fieldName]== $fieldValue){
						echo 'checked = "checked"';
					}
				}

				function setSelected($fieldName, $fieldValue){
					if(isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue){
						echo 'selected = "selected"';
					}
				}


				function processForm(){
					$requiredFields = array("client_Name","email_Address", "mobile_NO", "KnowUs", "messages"); // The name of the 
					$missingFields = array();

					foreach($requiredFields as $requiredField){ // For each of the required fields,
						if(!isset(($_POST[$requiredField])) or !trim($_POST[$requiredField])){ // If any of them has no value
							$missingFields[] = $requiredField;  // Put them in the missing field array
						}
					}
					if($missingFields){ // if there is any missing field,
						displayForm($missingFields); // display the form with those fields marked error
					}else{
						displayThanks(); // if there is no missing field , display the congrats/ thenks message
					}
				}

				function displayForm($missingFields){
				?>

                    <div class="col-md-6 col-lg-6">
                        <div class="inna4Form">
                            <div class="OuttaForForm">
                                <?php if($missingFields){ ?>
                                <p class="alert alert-danger"> There are some problem with the form you submitted, Kindly rectify and submit again </p>
                                <?php} else{ ?>
                                <p> Please fill in the form, we will get back to you as soon as possible.</p>
                                <?php } ?>

                                <form id="contactForm" method="post">


                                    <!--  The name of the clients -->
                                    <div class="form-group">
                                        <label for="yourName" <?php validateFields("client_Name", $missingFields) ?>> Your Name </label>
                                        <input type="text" class="form-control" id="yourName" name="client_Name" placeholder="Input Your Name please" value="<?php setValue("client_Name") ?>"  />
                                    </div>
                                    <div class="alert alert-danger hide" id="nameAlert"> </div>


                                    <!-- The email field -->
                                    <div class="form-group">
                                        <label for="yourEmail" <?php validateFields("email_Address", $missingFields) ?>> Email </label>
                                        <input type="text" class="form-control" id="yourEmail" name="email_Address"  placeholder="Input a valid email"  value="<?php setValue("email_Address") ?>"/>
                                    </div>

                                    <div class="alert alert-danger hide" id="emailAlert"> </div>


                                                                    
                                    <!-- The mobile Number field field -->
                                    <div class="form-group">
                                        <label for="mobileNo"  <?php validateFields("mobile_NO", $missingFields) ?>> Phone No </label>
                                        <input type="text" class="form-control" id="mobileNo" name="mobile_NO" aria-descibedby="mobiNoHelp" placeholder="Input a valid phone Number" value="<?php setValue("mobile_NO") ?>"  />
                                        <small id="mobiNoHelp" class="form-text text-muted"> Use the format e.g 08022222222 </small>
                                    </div>

                                    <div class="alert alert-danger hide" id="phoneNoAlert"> </div>



                                    <!-- How client got to know us -->
                                    <div class="form-group">
                                        <label for="checked"  <?php validateFields("KnowUs", $missingFields) ?> > How did you get to know us ?</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="KnowUs" value="google" id="google" <?php setChecked("KnowUs", "google") ?> />
                                            <label class="form-check-label" for="google">
                                                Google
                                            </label>  
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="KnowUs" value="Friend" id="Friend" <?php setChecked("KnowUs", "Friend") ?>/>
                                            <label class="form-check-label" for="Friend">
                                                A friend
                                            </label>  
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="KnowUs" value="Advertisement" id="Advertisement" <?php setChecked("KnowUs", "Advertisement") ?> />
                                            <label class="form-check-label" for="Advertisement">
                                                    Advertisement
                                            </label>  
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="KnowUs" value="Others" id="others" <?php setChecked("KnowUs", "Others") ?> />
                                            <label class="form-check-label" for="others">
                                                   Others
                                            </label>  
                                        </div>
                                    </div>


                                    
                                    <!-- The message field -->
                                    <div class="form-group">
                                        <label for="Message" <?php validateFields("messages", $missingFields) ?>>Message </label>
                                        <textarea class="form-control" id="Message" rows="3" name="messages"> <?php setValue("messages") ?></textarea>
                                    </div>

                                    <div class="alert alert-danger hide" id="MessageAlert"> </div>
                                    
                                    <button type="submit" id="subForming" name="submitButton" class="btn btn-outline-primary"> Submit </button>
                                </form>

                            </div>
                        </div>
                        
                        <?php
                            }
                            function displayThanks(){
                        ?>
                            <h1> Wow, I made it to this  extent </h1>

                        <?php
                            }
                        ?>
                    </div>
                
            </div>

        </div>




<!-- This is the footer of the page -->
<?php
    foota();
?>
