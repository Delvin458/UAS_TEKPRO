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
    <title>Lookimi - Best Sellers</title>
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
                <h3 class="center black-text text-darken-3"> Best Sellers</h3>
            </div>
        </div>
    </section>

    <!-- Detail -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col  s6">
                    <img src="img/portfolio/hasil 2.jpg" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>Sugar Puffy Sleeve Short Dress</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h6>Rp 1.260.000</h6>
                        <p>or <b>420.000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h7> Made in <i>Horizon & All Eyes On You</i> print, our <b>Sugar Puffy Sleeve Short Dress</b> features : puffy adjustable drawstring sleeves, above knee length, in-seam pockets, a back zip closure.</h7>
                        <p>When paired with a blazer, our Sugar Puffy Sleeveless Dress is appropriate for the office and your weekends out with friends.</p>
                        <p><b>About the print,</b> Inspired by the work of Fleur Isbell, Horizon is a print that conveys the sense of waves in a horizon view, moving up and down in the sea.</p>
                        <p><b>Size and fit</b> (in cm): </p>
                        <p>Length - XS/S/M/L = 89/91.5/94/96.5</p>
                        <p>Chest  - XS/S/M/L = 80/85/90/95</p>
                        <p>Waist  - XS/S/M/L = 65/70/75/80</p>
                        <p>Hip    - XS/S/M/L = 105/110/115/120</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col m6 S12">
                    <img src="img/portfolio/newskirt.jpg" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h3>Swagger Jagger Skirt</h3>
                    </li>
                    <li class="collection-item left-align">
                        <h6>Rp 828.000</h6>
                        <p>or <b>276.000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h10> Made in <i>Pick Up Lines & All Eyes On You</i> print, our <b>Swagger Jagger Skirt</b> features : midi length, a flap pocket, welt pocket, sash, and a front button placket.</h10>
                        <p>Travel in style and fun with our modest-length Swagger Jagger Skirt for your next summer vacation.</p>
                        <p><b>About the print,</b> This print takes the idea of a horizon line and the traditional stripe pattern and reinterprets it with hand drawn horizontal lines. Also, we took the idea of the horizon line and expressed it in a lyrical way with the lyrics ‘my eyes are set on you’. By joining letters together, we achieve a fun ensemble with an abstract pattern.</p>
                        <p><b>Size and fit</b> (in cm) : </p>
                        <p>Length - XS/S/M/L = 72.5/75/77.5/80</p>
                        <p>Waist  - XS/S/M/L = 65/70/75/80</p>
                        <p>Hip    - XS/S/M/L = 113/118/123/128</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col m6 S12">
                    <img src="img/portfolio/14.webp" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>Bergamot Morning Coat</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h5>Rp 2.250.000</h5>
                        <p>or <b>750.000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h7> Made in the <i>Horizon & All Eyes On You</i> print, our <b>Bergamot Morning Coat</b> features : front patch pockets, flare flowy fit, adjustable strings at waist and sleeves, and mid calf length.</h7>
                        <p>Easy to layer, our Bergamot Morning Coat with drawstrings is a versatile piece to have in your wardrobe.</p>
                        <p><b>About the print,</b> Inspired by the work of Fleur Isbell, Horizon is a print that conveys the sense of waves in a horizon view, moving up and down in the sea. And also, we took the idea of the horizon line and expressed it in a lyrical way with the lyrics ‘my eyes are set on you’. By joining letters together, we achieve a fun ensemble with an abstract pattern.</p>
                        <p><b>Size and fit</b> (in cm): </p>
                        <p>Length - XS/S/M/L = 114.5/114.5/114.5/114.5</p>
                        <p>Chest  - XS/S/M/L = 85/90/95/100</p>
                        <p>Waist  - XS/S/M/L = 65/70/75/80</p>
                        <p>Sleeve length   - XS/S/M/L = 55.5/55.5/58/58</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <img src="img/portfolio/16.webp" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>Blue Lights Flare Pants</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h5>Rp 924.000</h5>
                        <p>or <b>308.000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h7> Made in the <i>Horizon & Pick Up Lines</i> print, our <b>Blue Lights Flare Pants</b> features : ruched patched pockets, a back zipper closure, relaxed, flare cut, ankle length.</h7>
                        <p>Designed with a relaxed, flare fit, our Blue Lights Flare Pants with Ruched Side Pockets is an easy piece for the weekends and errand runs.</p>
                        <p><b>About the print,</b> This print takes the idea of a horizon line and the traditional stripe pattern and reinterprets it with hand drawn horizontal lines. Horizon is a print that conveys the sense of waves in a horizon view, moving up and down in the sea. </p>
                        <p><b>Size and fit</b> (in cm) : </p>
                        <p>Length - XS/S/M/L = 101/101/101/101</p>
                        <p>Waist  - XS/S/M/L = 65/70/75/80</p>
                        <p>Hip    - XS/S/M/L = 140/145/150/155</p>
                        <p>Leg opening - XS/S/M/L = 79.5/82/84.5/87</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <img src="img/portfolio/17.jpg" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>No Scrubs Kimono Outerwear</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h5>Rp 1.140.000</h5>
                        <p>or <b>380.000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h7> Made in <i>The Florist’s Palette and Morning Light </i> print, our <b>No Scrubs Kimono Outerwear</b> features : a reversible side
                        , a hood, and slanted deep pockets.</h7>
                        <p>Compliment the colour of the sun and the sea on a fun day at the beach in our No Scrubs Kimono Outerwear.</p>
                        <p><b>About the print,</b> This print is a minimalist approach to our vibrant colour palette, capturing the feeling of sun rays cascading gently on a flower bed. Also, created with hand-drawn paint strokes, this print was inspired by modern ikebana floral arrangements by Carolina Spencer.</p>
                        <p>Bust - XS/S/M/L = 102.5/102.5/112.5/112.5</p>
                        <p>Waist  - XS/S/M/L = 104/104/114/114</p>
                        <p>Kimono length    - XS/S/M/L = 71.5/71.5/76.5/76.5</p>
                        <p>Sleeve length - XS/S/M/L = 45/45/50/50</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <img src="img/portfolio/18.jpg" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>Kokomo Wrap Top</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h5>Rp 504.000</h5>
                        <p>or <b>168.000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h7> Made in <i>The Florist’s Palette & Breath of Gerberas</i> print, our <b>Kokomo Wrap Top</b> features : a cropped length, V-neckline, puffy sleeves, and back ribbons closure.</h7>
                        <p>Our Kokomo Wrap Top exudes sophistication, ideal for a romantic evening.</p>
                        <p><b>About the print,</b> Made up of a collage of watercolour prints, this print imagines warm breath of flowers on a cold spring morning. Also, created with hand-drawn paint strokes, this print was inspired by modern ikebana floral arrangements by Carolina Spencer.</p>
                        <p><b>Size and fit</b> (in cm) : </p>
                        <p>Bust - XS/S/M/L = 83/88/93/98</p>
                        <p>Waist  - XS/S/M/L = 71/76/81/86</p>
                        <p>Length    - XS/S/M/L = 38.5/41/43.5/46</p>
                        <p>Sleeve length - XS/S/M/L = 36.5/39/41.5/44</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <img src="img/portfolio/19.jpg" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h4>Tub Thumping Jacket</h4>
                    </li>
                    <li class="collection-item left-align">
                        <h5>Rp 768.000</h5>
                        <p>or <b>256.000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h7> Made in <i>The Florist’s Palette</i> print, our <b>Tub Thumping Jacket</b> features : crescent sleeves, patched on flap pockets, and front button placket closure</h7>
                        <p>If and when the weather gets chilly, layer in style with our Tub Thumping Jacket.</p>
                        <p><b>About the print,</b> Created with hand-drawn paint strokes, this print was inspired by modern ikebana floral arrangements by Carolina Spencer.</p>
                        <p><b>Size and fit</b> (in cm) : </p>
                        <p>Bust - XS/S/M/L = 86.5/91.5/96.5/101.5</p>
                        <p>Waist  - XS/S/M/L = 68.5/73.5/78.5/83.5</p>
                        <p>Hips    - XS/S/M/L = 101.5/106.5/111.5/116.5</p>
                        <p>Jacket length - XS/S/M/L = 64.5/67/69.5/72</p>
                        <p>Sleeve length - XS/S/M/L = 42.5/45/47.5/50</p>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col s6">
                    <img src="img/portfolio/20.jpg" class="responsive-img materialboxed">
                </div>
                <ul class=" collection with-header center">
                    <li class="deep-orange lighten-5 collection-header">
                        <h3>Tiny Dancer Dress</h3>
                    </li>
                    <li class="collection-item left-align">
                        <h5>Rp 978.000</h5>
                        <p>or <b>326.000</b> x 3 monthly installments.</p>
                    </li>
                    <li class="collection-item left-align">
                        <h7> Made in <i>The Florist’s Palette</i> print, our <b>Tiny Dancer Dress</b> features : flare fit, mini length, ruched wrapover, in-seam pockets, adjustable straps, and a a side zip closure.</h7>
                        <p>Designed for the occasional wear, our Tiny Dancer Dress is definitely a fun piece to have.</p>
                        <p><b>About the print,</b> Created with hand-drawn paint strokes, this print was inspired by modern ikebana floral arrangements by Carolina Spencer.</p>
                        <p><b>Size and fit</b> (in cm) : </p>
                        <p>Bust - XS/S/M/L = 80/85/90/95</p>
                        <p>Waist  - XS/S/M/L = 65/70/75/80</p>
                        <p>Hips    - XS/S/M/L = 124/129/134/139</p>
                        <p>Dress length - XS/S/M/L = 84.5/87/89.5/92</p>
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