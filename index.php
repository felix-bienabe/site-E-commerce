
<?php
session_start();
if(!isset($_SESSION["username"]) || empty($_SESSION["username"]))
{
  header("location: login.php");
  exit;
}
?>


<!--<html>
    <body>
    butt<on onclick="location.href='Logout.php'">Log out</button>
</body>
</html>
-->
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="materialize.css" type="text/css" rel="stylesheet">
    <link href="materialize.min.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Index </title>
    <script src= "js/slider.js"></script>
  </head>

  <body background="imgs/arbre.jpg" class="responsive-img">
  <header>

<nav class= "grey">
  
    <div class="nav-wrapper"> 
          <ul class="right">    
            <li><a href="shop.html" title="Shopping cart"><i class="small material-icons">shopping_cart</i></a></li>
            <li><a href="store.html" title="Profil"><i class="material-icons">store</i></a></li>
            <li><a href="terrain.html" title="Partners"><i class="material-icons">terrain</i></a></li>
            <li><a href="logout.php" title="Logout"><i class="large material-icons">exit_to_app</i></a></li>                 
          </ul>
    </div>
</nav>
</header>
      <main>
    
 <h3 class="center"id="main-wrapper"> Welcome to our shop</h3> 

  <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="imgs/rando5.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="imgs/rando6.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="imgs/rando7.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> 
 
 <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="imgs/sacrando.jpg">
                    </div>
                    <div class="card-content">
                        <p>Le sac de rando</p>
                        <p>Le bon sac à dos étanche. 100e</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Add to cart</a>
                    </div>
                </div>

            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="imgs/shoesrando.jpg">
                    </div>
                    <div class="card-content">
                        <p>Chaussures de randonnées</p>
                        <p>Partir en rando sans de bonnes chaussures, c'est du suicide. Découvrez nos chaussures de randonnées ! </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Add to cart</a>
                    </div>
                </div>
                
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="imgs/gourde.jpg">
                    </div>
                    <div class="card-content">
                        <p>La Gourde</p>
                        <p>L'incontournable du randonneur. Une belle gourde 2L. 30e</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Add to cart</a>
                    </div>
                </div>
            </div>
    </div>

    
 </main>
 

 <script>
    window.onload = plusSlides(999);
  </script>
  </body>
</hmtl>

