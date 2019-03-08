// This is my script file for my company Vic-Tech Global

// This is the wow plugin
new WOW().init();


// This is the owl plugin for the carousel
$(".slideMe").owlCarousel({
    loop:true,
    autoplay:true,
    navigation:true,
    autoplayTimeout:2300,
    slideSpeed: 100,
    paginationSpeed:200,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

// This is for the testimonials 
$(".testimonialCarousel").owlCarousel({
    loop:true,
    navigation:true,
    autoplay:true,
    margin:20,
    autoplayTimeout:2300,
    slideSpeed: 100,
    paginationSpeed:200,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

// This is the script for the Go to Top
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $("#scrolla").fadeIn();
        }else{
            $("#scrolla").fadeOut();
        }
    })
});

$("#scrolla").click(function(){
    $("html,body").animate({scrollTop:0}, 800);
    return false;
})

// The form validation of the contact page


//This function validates the email of the user


var emailInput = document.getElementById('yourEmail');
var confirmEmail = document.getElementById('emailAlert');
var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

function validateEmail(e){
  if(filter.test(emailInput.value)){
    confirmEmail.innerHTML = '';
    confirmEmail.className = 'alert alert-danger hide';
    return true;
  }else  if(emailInput.value == ''){
      confirmEmail.innerHTML = '';
      confirmEmail.className = 'alert alert-danger hide';
      return false
  }else{
      confirmEmail.innerHTML = 'Invalid email address, please check it out again';
      confirmEmail.className = 'alert alert-danger';
      return false
  }
}

if(emailInput.addEventListener){
  emailInput.addEventListener('input', function(e){
    validateEmail(e);
  }, false);
}else{
  emailInput.attachEvent('oninput', function(e){
    validateEmail(e);
  });
}

// This is the end of email validation function




// This function validates the phone number of the user

var phoneNo= document.getElementById('mobileNo');
var phoneNoConfirm = document.getElementById('phoneNoAlert');

function validatePhoneNumber(){
    var regxpression = /^\d{11}$/;
    if(phoneNo.value.match(regxpression)){
      phoneNoConfirm.innerHTML = '';
      phoneNoConfirm.className = 'alert alert-danger hide';
      return true;
    }else if(phoneNo.value == ""){
      phoneNoConfirm.innerHTML = '';
      phoneNoConfirm.className = 'alert alert-danger hide';
      return false;
    }else if(isNaN(phoneNo.value)){
      phoneNoConfirm.innerHTML= 'Invalid mobile number, kindly recheck your input';
      phoneNoConfirm.className = 'alert alert-danger';
    }else if(phoneNo.value.length < 11){
      phoneNoConfirm.innerHTML= 'Not yet complete';
      phoneNoConfirm.className = 'alert alert-danger';
      return false;
    }else{
      phoneNoConfirm.innerHTML= 'Invalid mobile number';
      phoneNoConfirm.className = 'alert alert-danger';
      return false;
    }
}

if(phoneNo.addEventListener){
  phoneNo.addEventListener('input', function(e){
    validatePhoneNumber(e);
  }, false);
}else{
  phoneNo.attachEvent('oninput', function(e){
    validatePhoneNumber(e);
  });
}
// This is where the validation of phone number ends

// Validation of the name of the clients
var clientName= document.getElementById('yourName');
var nameConfirm = document.getElementById('nameAlert');

function validateName(){
    var regxpression = /^[a-zA-Z ]*$/;
    if(clientName.value == ""){
      nameConfirm.innerHTML = '';
      nameConfirm.className = 'alert alert-danger hide';
      return false;
    }else if(clientName.value.match(regxpression)){
        nameConfirm.innerHTML = '';
        nameConfirm.className = 'alert alert-danger hide';
      return true;
    }else{
        nameConfirm.innerHTML= 'Input Your name please';
        nameConfirm.className = 'alert alert-danger';
      return false;
    }
}

if(clientName.addEventListener){
    clientName.addEventListener('input', function(e){
    validateName(e);
  }, false);
}else{
    clientName.attachEvent('oninput', function(e){
    validateName(e);
  });
}

// Validating  the message field

var deMessage= document.getElementById('Message');
var messageConfirm = document.getElementById('MessageAlert');

function validateMessage(){
    var regxpression = /^[a-zA-Z0-9 ]*$/;
    var text = deMessage.value.trim();
    if(text == ""){
        messageConfirm.innerHTML = '';
        messageConfirm.className = 'alert alert-danger hide';
      return false;
    }else if(text.match(regxpression)){
        messageConfirm.innerHTML = '';
        messageConfirm.className = 'alert alert-danger hide';
      return true;
    }else{
        messageConfirm.innerHTML= 'Leave us with a Message please';
        messageConfirm.className = 'alert alert-danger';
      return false;
    }
}

if(deMessage.addEventListener){
    deMessage.addEventListener('input', function(e){
        validateMessage(e);
  }, false);
}else{
    deMessage.attachEvent('oninput', function(e){
        validateMessage(e);
  });
}




// This validates the entire form on submit
var subForm = document.getElementById('subForming');
function validateTheform(e){
 var functToTest = [validateEmail(e), validatePhoneNumber(), validateName(), validateMessage()];
 for(var i = 0;  i < (functToTest.length); i++ ){
   if(functToTest[i] == false){
     e.preventDefault();
   }
 }
   if(validateEmail(e) == false){
    confirmEmail.className = 'alert alert-danger';
    confirmEmail.innerHTML = 'Please, input a valid email address';
   }
   if( validatePhoneNumber() == false){
    phoneNoConfirm.innerHTML = 'Input a valid mobile number';
    phoneNoConfirm.className = 'alert alert-danger';
   }

   if (validateName() == false){
    nameConfirm.innerHTML = 'Kindly input your name';
    nameConfirm.className = 'alert alert-danger';
   }

   if(validateMessage() == false){
     messageConfirm.innerHTML= 'Leave Us with a message please.';
     messageConfirm.className = 'alert alert-danger';
   }
   
}

$('#contactForm').on('submit', function(e){
  validateTheform(e);
})