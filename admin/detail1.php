<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="style.css?v=0.01">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lookimi-New Arrivals</title>
</head>
<body id="homes" class="scrollspy">
    <?php 
    include("../config.php");
    session_start();
    if($_SESSION['status']!="login"){
       header("location:../index.php?pesan=belum_login");
   }
   ?>

    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="pink accent-1">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#homes" class="brand-logo">LOOKIMI</a>
                    <a href="#home" data-target="mobile-Nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="logout.php"><p class="btn btn-info" onclick="return confirm ('Confirm logout?')" style="background-color:#fa397a !important">Logout</p></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Side Nav -->
    <ul class="sidenav" id="mobile-Nav">
        <li><a href="index.html">About Us</a></li>
        <li><a href="index.html">Clients</a></li>
        <li><a href="index.html">New Arrivals</a></li>
        <li><a href="index.html">Best Sellers</a></li>
        <li><a href="index.html">Contact Us</a></li>
    </ul>

    <!-- About Us -->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center black-text text-darken-3"> New Arrivals</h3>
            </div>
        </div>
    </section>

    <!-- Detail -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col m4 s12">
                    <img src="img/portfolio/11.jpg" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>Butterfly Beauty Band</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h6>Rp 120000</h6>
                        <p>or <b>40000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h6> Made in <i>The Garden</i> print, our <b>Butterfly Beauty
                                Band</b> features : soft satin fabric, elastic band that stratches to fit your head
                            comfortably.</h6>
                        <p><b>About the print,</b> The garden is a print designed in collaboration with The Estee Lauder
                            Companies in support of Breast Cancer awereness. Women are like plants that exist in a
                            garden.
                            Diverse like the flowers and plants and able to weather the adversity while bringing colour
                            to
                            the world.</p>
                        <p><b>Size and fit</b>: Circumference - 67cm , Elastic Band - 15.5cm and stretches up to 25cm
                        </p>
                    </li>
                    <li class="collection-item left-align">
                        <h10>Order now by contacting us,</h10>
                        <p> WA : +628566655552</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col m4 s12">
                    <img src="img/portfolio/22.jpg" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>Birdie Beauty Pouch</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h6>Rp 606000</h6>
                        <p>or <b>202000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h10> Made in <i>The Garden</i> print, our <b>Birdie Beauty Pouch</b> features : water resistant
                            exterior and interior fabric, space for 6 and more full sized beauty products
                            comfortably.</h10>
                        <p><b>About the print,</b> The garden is a print designed in collaboration with The Estee Lauder
                            Companies in support of Breast Cancer awereness. Women are like plants that exist in a
                            garden.
                            Diverse like the flowers and plants and able to weather the adversity while bringing colour
                            to
                            the world.</p>
                        <p><b>Size and fit</b>: Length - 26cm, Height - 20 cm, Depth (bottom of pouch) -
                        </p>
                    </li>
                    <li class="collection-item left-align">
                        <h10>Order now by contacting us,</h10>
                        <p> WA : +628566655552</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col m4 s12">
                    <img src="img/portfolio/23.webp" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>Bed of Roses Mask</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h5>Rp 39000</h5>
                    </li>
                    <li class="collection-item left-align">
                        <h6> Made in <i>The Garden</i> print, our <b>Bed of Roses Mask</b> features : soft satin fabric
                            for a comfortable fit, elastic band and stap
                            stoppers for an adjustable fit, slot for your filters.</h6>
                        <p><b>About the print,</b> The garden is a print designed in collaboration with The Estee Lauder
                            Companies in support of Breast Cancer awereness. Women are like plants that exist in a
                            garden.
                            Diverse like the flowers and plants and able to weather the adversity while bringing colour
                            to
                            the world.</p>
                        <p><b>Fabric details,</b> Printed on 100% Polyester.
                        </p>
                    </li>
                    <li class="collection-item left-align">
                        <h6>Order now by contacting us,</h6>
                        <p> WA : +628566655552</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>




    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);
        
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
        scrollOffset: 50
        });
        
    </script>
</body>

</html>