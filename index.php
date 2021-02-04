<!DOCTYPE html>
<html>
<head>
	 <!--<meta http-equiv="refresh" content="10">-->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TaniaMEx</title>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent">
<header>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TaniaMEx</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mx-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="#exchange">Exchange</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#rates">Rates</a>
        </li>
        
      
        
        <li class="nav-item">
          <a class="nav-link" href="#discover">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactus">Contact Us</a>
        </li>
      </ul>
        <button class="btn btn-success text-dark" type="submit">Sign in</button>
    </div>
  </div>
</nav>
<div class="mid">
	<video autoplay muted loop>
		<source class="embed-responsive" src="img/1.mp4" type="video/mp4">
	</video>
	<div class="hero text-center">
		<h2 class="text-light display-4 font-weight-bold">TaniaMEx is a Digital solution for Freelancers.</h2>
		<p class="text-light mx-auto">We can help you to Send, Receive, Exchange, accept online payment easily on your personal account.</p>
		<a class="text-dark" href="#">Get Started</a>
	</div>
</div>
</header>

<section class="bg-info" id="exchange">
  <div class="row align-items-center container pt-5 mx-auto">
    <div class="text col-lg-12 col-md-12 col-12  pb-5">
      <h2 style="text-align: center;margin-top: 50px;">Money Exchange </h2>
      <h6 style="text-align: center;">Unlimited Converter</h6>
      <form class="align-items-center container my-5 mx-auto w-50" action="index.php" method="get">
        <div class="form-group">
          <label for="exampleFormControlInput1">Enter Currency BD TK:</label>
          <input type="text" class="form-control" name="input">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Convert to Select Currency:</label>
          <select class="form-control" id="exampleFormControlSelect1" name="dropdown">
            <option value="usd">Us Dollar</option>
            <option value="ero">Euro</option>
            <option value="gbp">British Pound</option>
          </select>
        </div>
        
        <div class="form-group">
          <input style="padding: 5px; border-radius: 5px;" class="btn btn-success" type="submit" name="sbmt" value="Convert">
        </div>
        <div class="form-group">
          
<?php 
if(isset($_GET['sbmt']))
{
  $cc_input = $_GET['input'];
  $cc_dropdown = $_GET['dropdown'];
  if($cc_dropdown == 'usd')
  {
    $output = $cc_input * 0.0117893;
    echo "<h1>" . $output . " Dollar" . "</h1>";
  }else if($cc_dropdown == 'ero')
  {
    $output = $cc_input * 0.00974513;
    echo "<h1>" . $output . " Euro" . "</h1>";
  }else if($cc_dropdown == 'gbp')
  {
    $output = $cc_input * 0.00864463;
    echo "<h1>" . $output . " British Pound" . "</h1>";
  }
}

?>
        </div>
      </form>
  </div>
</section>

<section id="rates" class="rates py-5">
<div class="col mx-auto align-items-center my-5"> 
  <div class="heading text-center pt-5">
    <h2 class="font-weight-bold pb-5 text-light">BD 1TK to Exchange Rates
</h2>
  </div>
  <div class="row mx-auto justify-content-center align-items-center text-center container">
    <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
      <img class="img-fluid w-75" src="img/5.jpg">
      <h5 class="font-weight-bold pt-4">US Dollar</h5>
      <p>0.0117893</p>
    </div>
    <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
      <img class="img-fluid w-75" src="img/6.jpg">
      <h5 class="font-weight-bold pt-4">Euro</h5>
      <p>0.00974513</p>
    </div>
    <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
      <img class="img-fluid w-75" src="img/7.jpg">
      <h5 class="font-weight-bold pt-4">British Pound</h5>
      <p>0.00864463</p>
    </div>
  </div>
</div>
</section>

<section id="discover" class="discovery py-5">
  <div class="row align-items-center container my-5 mx-auto">
    <div class="img col-lg-6 col-md-6 col-12 w-50 pt-2 pb-5">
      <img class="img-fluid" src="img/FAQ.svg">
    </div>
    <div class="text col-lg-6 col-md-6 col-12 w-50 pt-2 pb-5">
      <h2>Frequently Asked Questions</h2>
      <h6>In this section, you can get detailed information about the TaniaMEx system. If after reading this document, you still have any problems or questions about the system, please contact us.</h6>
      
      <h5 onclick="myFunction1()" class="bg-info">What is TaniaMEx? </h5>
      

      <p id="myfirstDIV" style="display: none;" class="bg-warning">TaniaMEx is a simple and fast e-currency exchange for freelance service. You just need to register, and verify. We'll quickly convert transaction for you without charging any additional or hidden fees.</p>

      <h5 onclick="myFunction2()" class="bg-info">How long does it take to process an order? </h5>

      <p id="mysecondDIV" style="display: none;" class="bg-warning">Usually, we take 5 minutes and a maximum of 20 minutes to complete order. If you have any urgency you can contact us over live chat, email, FB fan page inbox, WhatsApp, Skype and imo you can find our contact details in here.</p>

      <h5 onclick="myFunction3()" class="bg-info">What are the required documents for verification? </h5>

      <p id="mythirdDIV" style="display: none;" class="bg-warning">International passport, Driving License or National ID (we only accept local ID cards from EEA countries) selfie verification: selfie you're Real Face withhold your Card</p>
      
    </div>
  </div>
</section>



<footer class="page-footer font-small-stylish-color-dark pt-4 text-light" id="contactus">
  <!-- Grid container -->
  <div class="container text-center text-md-left">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-4 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">TaniaMEx</h5>
         <p>+00000108019 (Whatsapp)</p>
         <p>taniaechanger (Skype)</p> 
         <p>support@taniaechanger.com</p> 
        
      </div>
      <hr class="clearfix w-100 d-md-none">
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Usefull Link</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">About Us</a>
          </li>
          <li>
            <a href="#!">Blog</a>
          </li>
          <li>
            <a href="#!">Affiliate</a>
          </li>
          <li>
            <a href="#!">Testimonials</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
      <hr class="clearfix w-100 d-md-none">
      <!--Grid column-->
      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Support</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Help</a>
          </li>
          <li>
            <a href="#!">News</a>
          </li>
          <li>
            <a href="#!">Terms & Conditions</a>
          </li>
          <li>
            <a href="#!">Privacy Policy</a>
          </li>
        </ul>
      </div>

      <hr class="clearfix w-100 d-md-none">
      <!--Grid column-->
      <div class="col-md-2 mx-auto">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Follow Us</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">fb.tania.com</a>
          </li>
          <li>
            <a href="#!">twt.tania.com</a>
          </li>
          <li>
            <a href="#!">yt.tania.com</a>
          </li>
          <li>
            <a href="#!">in.tania.com</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <hr>
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
  <hr>
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"> &copy; 2021 Copyright:
    <a href="#">tania@gmail.com</a>
  </div>
  <!-- Copyright -->
</footer>


<script>
function myFunction1() {
  var x = document.getElementById("myfirstDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


<script>
function myFunction2() {
  var x = document.getElementById("mysecondDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


<script>
function myFunction3() {
  var x = document.getElementById("mythirdDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>