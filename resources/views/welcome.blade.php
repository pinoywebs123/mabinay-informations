<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Mabinay Information System</title>
  <meta charset="utf-8">
  <meta name="View Map Mapport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #9c27b0;
    font-weight: 600;
    margin-bottom: 30px;
    
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-size: contain;
    background-size: cover;
    background-image: url('{{URL::to('images/header.jpg')}}');
    color: #fff;
    padding: 200px 25px;
    background-size: 100% 100%;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #9c27b0;
    opacity: .5;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  .tourist{
    
  }
  .lodging {

  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">Tourist Spot</a></li>
       
       
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="{{url('/auth/login')}}">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
 <!--  <h1>Mabinay City</h1> 
  <p>The place of place hahaha</p>  -->
  
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Mabinay</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
     
     
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<div id="services" class="container-fluid text-cente tourist">
  <h2 class="text-center">Tourist Spot</h2>
  <div class="row">

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
      <img class="card-img-top" width="200px" src="{{URL::to('/homepage/mabinay.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Mabinay Spring Resort</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
            View More
          </button>
        </div>
      </div>

    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/bugsok.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bugsok Falls</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
            View More
          </button>
        </div>
      </div>
      
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/Pandalihan.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Pandalihan Cave</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
            View More
          </button>
        </div>
      </div>
      
    </div>

   
  </div>
  <div class="row" style="margin-top: 40px;">

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/Bulwang.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bulwang Crystal cave</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4">
            View More
          </button>
        </div>
      </div>
      
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/Pinayun.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Pinayun an Peak</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5">
            View More
          </button>
        </div>
      </div>
      
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/Niludhan.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Niludhan falls</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6">
            View More
          </button>
        </div>
      </div>
      
    </div>


  </div>
</div>

<div id="lodging" class="container-fluid text-center lodging">
  <h2>Lodging House List</h2>

  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/relax.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Honey's Relax Inn</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">View Map</a>
        </div>
      </div>
      
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/honey.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Honey's Lodging House</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">View Map</a>
        </div>
      </div>
      
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/echo.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">GRV Eco Lodging House</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">View Map</a>
        </div>
      </div>
      
    </div>

  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/jan.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Jan Paul's Lodginghouse</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">View Map</a>
        </div>
      </div>
      
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem; margin: 0 auto">
        <img class="card-img-top" width="200px" src="{{URL::to('/homepage/pastora.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Pastora Homes </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">View Map Map</a>
        </div>
      </div>
      
    </div>

   

  </div>
 
</div>





<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mabinay. Negros Oriental</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> mabinayinfo@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Alright Reserved &copy; <?php echo date('Y');?></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mabinay Spring Resort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/mabinay.jpg')}}" alt="Card image cap">
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/mabinay2.jpg')}}" alt="Card image cap">
        </center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3932.5523095008234!2d122.93101291428017!3d9.719196480473999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ac707a90a751fb%3A0x2f72df8c5634ddb4!2sMabinay%20Spring%20Resort!5e0!3m2!1sen!2sph!4v1594012168901!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mabinay Spring Resort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/bugsok.jpg')}}" alt="Card image cap">
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/bugsok2.jpg')}}" alt="Card image cap">
        </center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37412.76770434959!2d122.85890645076489!3d9.720857522670242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ac655e3eb8de2d%3A0x693a7abb9ea52ebc!2sBugsok%20Falls!5e0!3m2!1sen!2sph!4v1594012504340!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mabinay Spring Resort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/Pandalihan.jpg')}}" alt="Card image cap">
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/Pandalihan2.jpg')}}" alt="Card image cap">
        </center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7864.922760560651!2d122.89757651689125!3d9.72692825192611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ac701cf69fe4c5%3A0xf959f1ea3f702575!2sPandalihan%20Cave!5e0!3m2!1sen!2sph!4v1594012730755!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mabinay Spring Resort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/Bulwang.jpg')}}" alt="Card image cap">
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/Bulwang2.jpg')}}" alt="Card image cap">
        </center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31466.645059265033!2d122.97030169745379!3d9.652764230075343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ac7bd6f1d960bf%3A0xe964559563c59d07!2sBulwang%20Caves%20Information%20Center!5e0!3m2!1sen!2sph!4v1594012869235!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mabinay Spring Resort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/Pinayun.jpg')}}" alt="Card image cap">
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/Pinayun2.jpg')}}" alt="Card image cap">
        </center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125831.2855662182!2d122.90399104618695!3d9.74677258597425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ac70c43e751d13%3A0x7aac123f089e38d5!2sPinayun%20an%20Peak!5e0!3m2!1sen!2sph!4v1594012980217!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mabinay Spring Resort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/Niludhan.jpg')}}" alt="Card image cap">
          <img class="card-img-top" width="250px" src="{{URL::to('/homepage/Niludhan2.jpg')}}" alt="Card image cap">
        </center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15736.065399320174!2d122.8864034940443!3d9.593858622237638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ac62d74d54c16d%3A0x9f948c6d6b2b27ec!2sNiludhan%20Falls!5e0!3m2!1sen!2sph!4v1594013086471!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

</html>
