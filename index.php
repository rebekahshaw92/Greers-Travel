<!--<?php
  //if (isset($_POST["submit"])) {
   // $name = $_POST['name'];
   // $email = $_POST['email'];
   // $message = $_POST['message'];
    

   // $from= 'From:Contact from greerstravel.com' . "\r\n" .'Reply-To:' . $email . "\r\n" .'X-Mailer: PHP/' . phpversion();
   // $to = 'sales@greerstravel.com'; 
   // $subject = 'Message from a Contact on greerstravel.com';
    
   // $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
   // if (!$_POST['name']) {
    //  $errorName = 'Please enter your name';
    //}
    
    // Check if email has been entered and is valid
    //if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //  $errorEmail = 'Please enter a valid email address';
   // }
    
    //Check if message has been entered
    //if (!$_POST['message']) {
    //  $errorMessage = 'Please enter your message';
    //}
    //Check if simple anti-bot test is correct
    
    //if(!empty($_POST['website'])) die();

// If there are no errors, send the email
//if (!$errorName && !$errorEmail && !$errorMessage) {
 // if (mail ($to, $subject, $body, $from)) {
   // $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  //} else {
   // $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  //}
//}

//$_POST = array();
 // }

?>-->


<!DOCTYPE html>
<html>
<head>
  <title>Greers Travel Office Ltd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Main stylesheet -->

  <link rel="stylesheet" href="css/style.css">

 <!-- Bootstrap js files -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Google Fonts plugin -->

  <link href="https://fonts.googleapis.com/css?family=Khula|PT+Sans+Caption|Scada" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">


<!-- Main menu -->

<nav class="navbar navbar-inverse navbar-light bg-faded">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>

      <!-- Greers Logo -->
      <a class="navbar-brand" href="#home"> 
        <img src="images/logo.jpg" alt="Logo">
      </a>

    </div>
    <div>

      <!-- Links to each section -->

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
         <li><a href="#home">Home</a></li>
          <li><a href="#aboutus">About Us</a></li>
          <li><a href="#specials">Specials</a></li>
           <li><a href="#links">Links</a></li>
          <li><a href="#contactus">Contact Us</a></li>
          
        </ul>

        <!-- Phone number -->

          <div id="phone">
        <p>Call Now: 028 2564 1311</p>
      </div>


      <!-- Foreign and Cummonwellth Office Link -->

      <div id="advice">
      <strong><p>For the latest travel advice from the
Foreign &amp; Commonwealth Office <a href ="https://www.gov.uk/foreign-travel-advice">Click Here</a> </p></strong>
      </div>


<div class="row">
  

        <!-- Abta Logo -->

<div class="col-lg-3 col-md-3 col-sm-3">
      <div id="abta">
        
<a href ="http://www.abta.com"><img src="images/abta-logo-700x394.gif" target="_blank" alt="Abta Logo"></a>

      </div>
    </div>

      <!-- Advatage Logo -->
      <div class="col-lg-3 col-md-3 col-sm-3">
      <div id="advatage">

<img src="images/The-Advantage-Travel-Partnership.png" alt="Advatage Logo">

</div>
</div>

    <!-- Iata Logo -->
    
<div class="col-lg-3 col-md-3 col-sm-3">
      <div id="iata">

<a href ="http://www.iatatravelcentre.com/about-iata-travel-centre.htm" target="_blank"><img src="images/IATALogo.png" alt="Iata Logo"></a>

    </div>
  </div>
</div>    
</nav>  

<!-- End of Header -->

<!-- Main image Slideshow -->


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/disneyland-1788216_1920.jpg" alt="Chlidern In Swimming Pool">
    </div>

    <div class="item">
      <img src="images/pexels-photo-132037.jpeg" alt="Sunset">
    </div>

    <div class="item">
      <img src="images/aeroplane-1838708_1920.jpg" alt="Sunset">
    </div>

    <div class="item">
      <img src="images/pexels-photo-279574.jpeg" alt="Beach">
    </div>

    <div class="item">
      <img src="images/freerider-skiing-ski-sports-47356-2.jpeg" alt="Man sking">
    </div>

     <div class="item">
      <img src="images/pexels-photo-296357.jpg" alt="Cruise ship">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
</div>

<!-- End of Image Slideshow -->

<!-- About Us Section -->

<div id="aboutus" class="container-fluid">
  <h1>About Us</h1>

   <div class="row">

<!--About Us Text -->

    <div class="col-sm-6">
<div id = "abouttext">

  <p>Greer's Travel was originally established as a shipping office in 1875 to deal with immigration to the USA and Canada. For many years this was the core business and the original family firm survived through two world wars when ship movements were extremely restricted and secretive. A legacy of original certificates of appointment with White Star Line, American Line, Dominion Line, Red Star Line, Shaw Savill and Albion line attests to these shipping origins</p>

  <p>The present Limited Company was formed on 7th July 1964 and today we are still a locally owned, independent travel agency which has previously been voted the provincial and Northern Ireland Travel Agent of the year.</p>

  <p>We are a member of the Consort Travel Group, a Northern Ireland Alliance of Professional, and Independent Travel Agents whose bulk buying power enables us to offer excellent deals on most travel products.</p>

  <p>Book with Confidence. Greer's Travel Office Ltd is a Member of ABTA with membership number 32904. ABTA and ABTA Members help holidaymakers to get the most from their travel and assist them when things do not go according to plan. We are obliged to maintain a high standard of service to you by ABTA's Code of Conduct. For further information about ABTA, the Code of Conduct and the arbitration scheme available to you if you have a complaint, contact ABTA, 30 Park Street, London SE1 9EQ. Tel: 020 3117 0500 or <a href ="http://www.abta.com">abta.com</a></p>

  <p>All the package holidays we sell are covered by a scheme protecting your money if the supplier fails. Other services such as hotels or flights on their own may not be protected and you should ask us what protection is available.</p>


</div>
</div>

<!-- End of About Us Text -->

<!-- Specials and links to facebook post -->

<div id ="specials">

 <div class="col-sm-6" id="facebook">

  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGreers-Travel-Office-Ltd-269450536418210%2F&tabs=timeline&width=500&height=530&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

  </div>

   <div class="col-sm-6" id="facebook2">

  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGreers-Travel-Office-Ltd-269450536418210%2F&tabs=timeline&width=300&height=400&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

  </div>
</div>

</div>
</div>

<!-- End of Specials -->

<div id="video" class="container-fluid">


<iframe  width="540" height="313" src="https://www.youtube.com/embed/Sh2ZiGBQwoM?autoplay=1&loop=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  </div>


</div>

<!-- Contact Details -->

<div id="contactus" class="container-fluid">
  <h1>Contact Us</h1>
  <br>
<div id = "openandfind">
<div class="row">

  <div class="col-sm-3">
<h2>Office Opening Hours</h2>
  
  <p>Mon - Fri: 09.00 - 17.00</p>
 
  <p>Sat: 09.00- 13.00</p>



</div>

<!-- Start of contact form -->

  <div class="col-sm-3">
<h2>Find Us</h2>

      <address>

      Greers Travel Office Limited<br>
      13 Linenhall Street<br>
      Ballymena<br>
      Co. Antrim<br>
      BT43 5AN<br>
      Tel: (028) 2564 1311<br>
      Fax: (028) 2564 4648
      
      </address>


</div>
</div>
</div>

 <!-- <form class="form-horizontal" role="form" method="post" action="#contactus">
  
  <input type="text" id="website" name="website"/>

  <div class="form-group">
 
  <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php //echo htmlspecialchars($_POST['name']); ?>">
              <?php //echo "<p class='text-danger'>$errorName</p>";?>
</div>

<div class="form-group">
  
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php //echo htmlspecialchars($_POST['email']); ?>">
              <?php //echo "<p class='text-danger'>$errorEmail</p>";?>
</div>

<div class="form-group">
  
<textarea class="form-control" id="message" rows="4" name="message" placeholder="Message"><?php //echo htmlspecialchars($_POST['message']);?></textarea>
              <?php //echo "<p class='text-danger'>$errorMessage</p>";?>
</div>


  <div class="form-group">
    
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
           
            </div>

  <div class="form-group">
            
              <?php //echo $result; ?>

            </div>
</div>-->

<!-- End of Contact section -->

<!-- Google Map -->

<div id="findusmap" class="container-fluid">
  
  
  <div id="map"></div>

<script>

      function initMap() {
        var uluru = {lat: 54.863940, lng: -6.277215};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU9LFlzIa0jlPLe0SLtF94GGy5H7nxYDQ&callback=initMap">
    </script>

</div>

<!-- End of Google Map -->


<!-- Links section -->

<div id="links" class="container-fluid">
  <h1>Links</h1>

  <div class="row">

    <div class="col-sm-4">

<h2>Health Requirements</h2>


<a href ="https://travelhealthpro.org.uk/">Travel Health Pro</a>

<br>

<a href ="http://www.nhs.uk/nhsengland/Healthcareabroad/pages/Healthcareabroad.aspx">NHS</a>

</div>



    <div class="col-sm-4">

<h2>US ESTA Application</h2>

<a href ="https://esta.cbp.dhs.gov/esta/">Esta Application</a>

</div>

  <div class="col-sm-4">

<h2>Canadian ETA application</h2>

<a href ="https://onlineservices-servicesenligne.cic.gc.ca/eta/">ETA Application</a>

</div>
</div>

  <div class="row">

  <div class="col-sm-4">

<h2>Insurance Referrals</h2>

<a href ="http://www.blueinsurance.ie/wl/index.asp?AgencyID=651">Blue Insurance</a>

</div>
  <!--<div class="col-sm-4">
<h2>Superbreak Accommodation Search</h2>

<a href ="http://www.superbreak.com/go/IM017">Superbreak</a>


</div>-->
</div>
</div>

<!-- End of Links section -->

</body>

<!-- Footer section -->

<div id="footer" class="container-fluid">

    <div id="Navbar">
      <h2>Help Center</h2>
        <ul class="nav">
          <li><a href="#aboutus">About Us</a></li>
          <li><a href="#specials">Specials</a></li>
          <li><a href="terms.php">Terms</a></li>
          <li><a href="#contactus">Contact Us</a></li>
          
        </ul>
      </div>

    <div id="contact">

      <h2>Contact Us</h2>

      <address>

      Greers Travel Office Limited<br>
      13 Linenhall Street<br>
      Ballymena<br>
      Co. Antrim<br>
      BT43 5AN<br>
      Tel: (028) 2564 1311<br>
      Fax: (028) 2564 4648
      
      </address>

    </div>
 

<div id="footertext">    

  <p>Company Registration Number - NI 006045</p>

  <p>Data Protection Number - Z5120609,  ABTA Number - 32904, IATA Number - 35219634</p>

<p id="copyright"> &copy;  <span id="copyright_span"></span> Greers Travel Office Ltd All Rights Reserved</p>
<p>Designed by <a href="http://rebekahshaw.com"> Rebekah Shaw</a></p>

</div>
</div>

<script type="text/javascript" src="js/javascript.js"></script>
</html>
<!-- End of Footer -->