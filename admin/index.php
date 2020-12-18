<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="style.css?v=0.05">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>LOOKIMI-</title>
</head>

<body id="home" class="scrollspy">
  <?php 
  include("../config.php");
  session_start();
  if($_SESSION['status']!="login"){
   header("location:../index.php?pesan=belum_login");
 }
 ?>

 <!-- Navigasi Bar -->
 <div class="navbar-fixed">
  <nav class="pink accent-1">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#home" class="brand-logo">LOOKIMI</a>
        <a href="#" data-target="mobile-Nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#about">About Us</a></li>
          <li><a href="#Clients">Clients</a></li>
          <li><a href="#NewArrivals">New Arrivals</a></li>
          <li><a href="#BestSellers">Best Sellers</a></li>
          <li><a href="#Contact">Contact Us</a></li>
          <li><a href="logout.php"><p class="btn btn-info" onclick="return confirm ('Confirm logout?')" style="background-color:#fa397a !important">Logout</p></a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- SideNav -->
<ul class="sidenav" id="mobile-Nav">
  <li><a href="#about">About Us</a></li>
  <li><a href="#Clients">Clients</a></li>
  <li><a href="#NewArrivals">New Arrivals</a></li>
  <li><a href="#BestSellers">Best Sellers</a></li>
  <li><a href="#Contact">Contact Us</a></li>
</ul>

<!-- Slider -->
<div class="slider">
  <ul class="slides">
    <li>
      <img src="img/slider/7.jpg"> <!-- random image -->
      <div class="caption rightS-align">
        <h3>Fashion as unique as you are!</h3>
        <h5 class="light grey-text text-lighten-3">Quality never goes out of style.</h5>
      </div>
    </li>
    <li>
      <img src="img/slider/8.jpg"> <!-- random image -->
      <div class="caption right-align">
        <h3>Fashion as unique as you are!</h3>
        <h5 class="light grey-text text-lighten-3">Quality never goes out of style.</h5>
      </div>
    </li>
    <li>
      <img src="img/slider/6.jpg"> <!-- random image -->
      <div class="caption center-align">
        <h3>Fashion as unique as you are!</h3>
        <h5 class="light grey-text text-lighten-3">Quality never goes out of style.</h5>
      </div>
    </li>
    <li>
      <img src="img/slider/9.jpg"> <!-- random image -->
      <div class="caption left-align">
        <h3>Fashion as unique as you are!</h3>
        <h5 class="light grey-text text-lighten-3">Quality never goes out of style.</h5>
      </div>
    </li>
  </ul>
</div>


<!-- About Us -->
<section id="about" class="about scrollspy"></section>
<div class="container">
  <div class="row">
    <h3 class="center black-text text-darken-3"> About Us</h3>
    <div class="center light">
      <p>A place for those searching for timeless beauty.
      Launched in 2020, a tumultuous time of a pandemic, we saw how there’s no market that focuses on budding clothing store such as thrift store and starting clothing lines, regardless how much they need it and how great the demand is for slow-paced fashion. We saw the need, hence we created LOOKIMI, a shopping platform specifically made to help connect sellers and buyers that are passionate about slow sustainable and timeless fashion.</p>
      <p>We hoped by creating LOOKIMI, we can help those that are having a hard time finding beautiful and sustainable fashion and those that are having a hard time finding their market, to connect. We believe in bridging both seller and buyer values of :</p>
      <p>Timeless and  Diverse. We believe in beauties that are unaffected by the change of time and trends that fitting for a diverse market with diverse styles.</p>
      <p>Sustainable and Ethical. We believe in caring. Caring about the people and the environment.</p>
      <p>Communication and Community. We believe in connecting people and finding a balance for both of them, bridging minds and opinion to create a sense of community for both.</p>
    </div>
  </div>
</div>

<!-- Clients -->
<div id="Clients" class="parallax-container scrollspy">
  <div class="parallax"><img src="img/slider/10.jpg"></div>

  <div class="container clients">
    <h3 class="center darken black-text">Our Clients</h3>
    <div class="row">
      <div class="col m4 s12 center">
        <img src="img/clients/5.png">
      </div>
      <div class="col m4 s12 center">
        <img src="img/clients/7.png">
      </div>
      <div class="col m4 s12 center">
        <img src="img/clients/8.png">
      </div>
    </div>
  </div>
</div>


<!-- New Arrivals -->
<section id="NewArrivals" class="NewArrivals pink lighten-4 scrollspy">
  <div class="container">
    <div class="row">
      <h3 class="darken center black-text">New Arrivals</h3>
      <div class="col m4 s12">
        <img src="img/portfolio/11.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m4 s12">
        <img src="img/portfolio/1.webp" class="responsive-img materialboxed">
      </div>
      <div class="col m4 s12">
        <img src="img/portfolio/12.jpg" class="responsive-img materialboxed">
      </div>
      <div class="caption center-align">
        <a href="detail1.php">
          <p class="btn" style="background-color: #ff80ab !important">More Information</p>
        </a>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Best Sellers -->
<section id="BestSellers" class="BestSellers scrollspy">
  <div class="container">
    <h3 class="darken center black-text">Best Sellers</h3>
    <div class="row">
      <div class="col m3 s12">
        <img src="img/portfolio/hasil 2.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/newskirt.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/14.webp" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/16.webp" class="responsive-img materialboxed">
      </div>
    </div>
    <div class="row">
      <div class="col m3 s12">
        <img src="img/portfolio/17.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/18.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/19.jpg" class="responsive-img materialboxed">
      </div>
      <div class="col m3 s12">
        <img src="img/portfolio/20.jpg" class="responsive-img materialboxed">
      </div>
    </div>
    <center>
    <a href="detail2.php">
      <p class="btn" style="background-color: #ff80ab !important">More Information</p>
    </a>
  </center>
  </div>
</section>

<!-- Contact Us -->
<section id="Contact" class="Contact pink lighten-4 scrollspy">
  <div class="container">
    <h3 class="darken center black-text">Contact Us</h3>
    <div class="row">
      <div class="col m12 s12">
        <div class="card-panel white center">
          <i class="material-icons">email</i>
          <h5>Contact</h5>
          <p>Whatsapp : +62566655552</p>
          <p>Email : kelompok5uib@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Footer -->
<footer id="footer" style="padding:10px">
  <center>
  <p>© Copyright <strong>LOOKIMI</strong></p>
</center>
</footer>



<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  const sidenav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sidenav);

  const slider = document.querySelectorAll('.slider');
  M.Slider.init(slider, {
    indicators: false,
    height: 500,
    transition: 600,
    interval: 3000
  });

  const parallax = document.querySelectorAll('.parallax');
  M.Parallax.init(parallax);

  const materialbox = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(materialbox);

  const scroll = document.querySelectorAll('.scrollspy');
  M.ScrollSpy.init(scroll, {
    scrollOffset: 50
  });

</script>
</body>

</html>