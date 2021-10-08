<?php
  $error="";  //check server side form validation to check if the given form don't have any errors
  $success_Message="";
  
  if($_POST){
    if(!$_POST["email"]){
      $error.="Valid Email Address is required<br>";
    }
    if(!$_POST["contactNamePerson"]){
      $error.="Valid contact name required<br>";
    }
    if(!$_POST["contentEmail"]){
      $error.="Valid content field is required<br>";
    }

    if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)===false){
      $error.="Email address is not valid<br>";
    }

    if($error != ""){
      $error = '<div class="alert alert-danger" role="alert"><p><strong>There was a error in your form: </strong></p>'.$error.'</div>';
    }else{
      $to = "sachinsupunthaka96@gmail.com";
      $subject = $_POST["contactNamePerson"];
      $txt = $_POST["contentEmail"];
      $headers = "From: ".$_POST["email"];

      if(mail($to,$subject,$txt,$headers)){
        $success_Message='<div class="alert alert-success" role="alert"><p>Send Successfull: Message delivered within allocated time</p></div>';
    };
    }


  }



?>


<!DOCTYPE html>
<html>
  <head>
    <title>Wasantha Motors</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!---title-icon-->
    <link rel="shortcut icon" href="assets/icon.png" />

    

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!---css file-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!---Using fontAwesome.js-->
    <script
      src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
      data-auto-replace-svg="nest"
    ></script>
  </head>

  <body class="bg-dark" >
    <section id="main">
      <!---navigation-->
      <nav class="navigator">
        <a href="#" class="logo">WASANTHA MOTORS</a>

        <div class="toggle"></div>

        <ul class="menu">
          <li class="active"><a href="#main" >Home</a></li>
          <li><a href="#about" >About</a></li>
          <li><a href="#services" >Services</a></li>
          <li><a href="#products" >Products</a></li>
          <li><a href="#contact" >Contact</a></li>
        </ul>

        <a href="#" class="lang">En</a>
      </nav>

    </section>

      <div class="name">
        <p>Hello</p>

        <h1 class="welcome">
          We are<font color="#dc6b6b"> Wasantha Motors</font>
        </h1>

        <p class="details">
          We are Wasantha Motors. That would like to help you design and give
          the most generous and valuable Service to you
        </p>

        <a href="#" class="gr-btn">Take a Tour</a>
      </div>

      <div class="social">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-skype"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
   

    <section id="about">
      <div class="about-text">
        <h1>About Us</h1>
        <h2>Our Vision</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
          commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
          et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
          felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
          consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
          nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
          venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
          Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
          vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
          vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra
          quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
          laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel
          augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
          rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam
          semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
          blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio
          et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
          faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus
          tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales
          sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit
          cursus nunc,
        </p>

        <button>Read More</button>
      </div>

      <div class="about-model">
        <img src="assets/about-model.png" alt="model" />
      </div>
    </section>

    <section id="services">
      <div class="s-heading">
        <h1>Services</h1>
        <p>Here are some services which we provide you</p>
      </div>

      <div class="s-b-container">
        <div class="s-box">
          <div class="s-b-image">
            <div class="s-type">Machines</div>
            <img src="assets/s1.png" />
          </div>

          <div class="s-b-text">
            <a href="#">
              Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
              libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci
              eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit
              amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
              bibendum sodales, augue velit cursus nunc,
            </a>
          </div>
        </div>

        <div class="s-box">
          <div class="s-b-image">
            <div class="s-type">Engine</div>
            <img src="assets/s1.png" />
          </div>
          <div class="s-b-text">
            <a href="#">
              Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
              libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci
              eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit
              amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
              bibendum sodales, augue velit cursus nunc,
            </a>
          </div>
        </div>

        <div class="s-box">
          <div class="s-b-image">
            <div class="s-type">Axcel</div>
            <img src="assets/s1.png" />
          </div>
          <div class="s-b-text">
            <a href="#">
              Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
              libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci
              eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit
              amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
              bibendum sodales, augue velit cursus nunc,
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="products">
      <h1 class="p-heading">products</h1>

      <div class="p-b-container">
          <div class="p-b-box">
              <div class="text-overlay">
                  <h1>Garage Products</h1>
                  <p>Different Equipments</p>
              </div>

              <img src="assets/w1.jpg" alt="product">
              </div>

              <div class="p-b-box">
                <div class="text-overlay">
                    <h1>Machine Equipments</h1>
                    <p>Different Equipments</p>
                </div>
  
                <img src="assets/w1.jpg" alt="product">
                </div>

          </div>

      </div>
    </section>

    <section id="contact-us-btn">
        <h1>Contact Us for More Insight</h1>

        <a href="#">Contact-us</a>
    </section>

    <section id="contact-form">

      <div id="error"></div>
    
      <form method="POST">
        <div class="contact-left">
          <h1 class="c-l-heading"><font style="border-bottom: 3px solid #b84300;">Write us</font></h1>

          <div class="f-name">

            <h1>Name</h1>
            <input type="text" id="contactNamePerson" name="contactNamePerson" placeholder="Full Name">
          </div>

          <div class="f-email">

            <h1>email</h1>
            <input type="email" id="email" name="email"  placeholder="mywebserver@wap.lk">
          </div>

        </div>



          <div class="contact-right">
            <div class="message">

              <h1>Enter your Message Here</h1>
              <textarea name="contentEmail" id="contentEmail" rows="5" cols="20" placeholder="Write Message..."></textarea>


            </div>

            <button id="submit">Submit</button>


          </div>
      </form>
    </section>

    <section id=footer-nd>
        <!-- Site footer -->
      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <h1 class="text-justify">Wasantha Motors</h1>
          </div>


          <div class="col-xs-6 col-md-2">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>

        <hr>

      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">SachinSupunthajka</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
      </footer>
    </section>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">

      $("form").submit(
        function(event){
          var error = ""; //initialize an empty variable to display error

          if($("#email").val() == ""){
            error+="<p>Email Field is required</br>";
          }

          if($("#contactNamePerson").val() == ""){
            error+="<p>The Contact details field is Required</br>";
          }

          if($("#contentEmail").val() == ""){
            error+="<p>The content is required</br>";
          }

          if (error != "") {
            $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There was a Error in the form: </strong></p>'+error+'</div>');
          }else{
            $("form").unbind("submit").submit();
          }



                  }
      );
    
    
    
    
    </script>

  </body>
</html>
