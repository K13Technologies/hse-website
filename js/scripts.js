//// Initiliaze Foundation ////

 $(document).foundation();

///////////////////////
//// Smooth Scroll ///
/////////////////////

    $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });


$(document).ready(function() {

    $(window).scroll(function() {
      var scrolledY = $(window).scrollTop();
      $('#header').css('background-position', 'left ' + ((scrolledY)) + 'px');
      $('.hp2').css('background-position', 'left ' + ((scrolledY)) + 'px');
    }); 

    $('#usercalc').keyup(function() {
        var dInput = parseInt(this.value);
        var users = dInput;
        if(dInput == ""){
        console.log("Not a number");
        }else{
            if(dInput <= 10){
                $("#totalcost").html("Free!");
                console.log(total);
            }
            else if(dInput <= 99){
                var total = users * 12;
                $("#totalcost").html("$" + total);
                console.log(total);
            }else if(dInput >= 100 && dInput <= 249){
                var total = users * 10;
                $("#totalcost").html("$" + total);
                console.log(total);
            }else if(dInput >= 250 && dInput <= 499){
                var total = users * 8;
                $("#totalcost").html("$" + total);
                console.log(total);
            }else if(dInput >= 500){
                $("#totalcost").html("Contact us for Enterprise Edition costs.");
            }
        }
    });

    
    function validateEmail(email) { 
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        //console.log(re.test(email));
        return re.test(email);
    }

    $(".trial").on('click', function () {
    _kmq.push(['trial button', 'clicked']);
    //alert('Coming soon. This feature will be available in 5 business days.');
    //return false;
    }); 

    $("#contact_submit").on('click', function () {
        var info = ($("form").serializeArray());
        console.log(info);
        var fullname = info[0].value + " " + info[1].value;
        var firstname = info[0].value;
        var lastname = info[1].value;
        var email = info[2].value;
        var validEmail = validateEmail(email);
        var phone = info[3].value;
        var company = info[4].value;
        var interest = info[5].value;
        var question = info[6].value;
        var form_data={
            name: fullname,
            firstname: firstname,
            lastname: lastname,
            email: email,
            phone: phone,
            company: company,
            interest: interest,
            question: question
        }
        var error = '';
        console.log(validEmail);
        $("#first_name").removeClass("ferror");
        $("#last_name").removeClass("ferror");
        $("#email").removeClass("ferror");
        $("#company").removeClass("ferror");
        if(firstname == ""){
            error += "Please enter your first name."
            $("#first_name").addClass("ferror");
            $("#contact_response").html(error);
            $("#contact_response").addClass("ferror");
        }       
        if(firstname != "" && lastname == ""){
            error += "Please enter your last name."
            $("#last_name").addClass("ferror");
            $("#contact_response").html(error);
            $("#contact_response").addClass("ferror");
        }
        if(firstname != "" && lastname != "" && email == ""){
            error += "Please enter your email address."
            $("#email").addClass("ferror");
            $("#contact_response").html(error);
            $("#contact_response").addClass("ferror");
        }

        if(firstname != "" && lastname != "" && email != "" && validEmail == false ){
            error += "Please check that you have entered a valid email address"
            $("#email").addClass("ferror");
            $("#contact_response").html(error);
            $("#contact_response").addClass("ferror");
        }

        if(firstname != "" && lastname != "" && email != "" && validEmail == true && company == ""){
            error += "Your company name is missing. "
            $("#company").addClass("ferror");
            $("#contact_response").html(error);
            $("#contact_response").addClass("ferror");
        }
        if(error == ""){
            console.log("sending email");
            $.ajax({
                          url: "email.php",
                          data: form_data,
                          dataType: 'json',
                          success: function(data)
                          {
                              console.log("success");
                              $("#contact_response").html("Thank you " + fullname + " your email was sent successfully.");
                              $("#contact_response").removeClass("ferror");
                              $("#contact_response").addClass("fsuccess");
                         }
                    });
        }
        return false;
    });

});
