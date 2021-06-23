<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Felinime</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

    <!-- Bootstrap core CSS -->
      <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <link rel="stylesheet" href="style/style.css">
    <!-- Favicons -->
      <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
      <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
      <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head> 
  <body>
   <!-- NAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAVVVVVVVVVVVVVVVVVVVVBARRRRRRRRRRRRRRRRRRRRRRR -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="nav-link" href="felinime.php"><img src="obrazy\logo.png" alt="brak img">Felinime</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Logowanie</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="registration.php">Rejestracja</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rankingi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="rank_top.php">Top 10</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filmy
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="baza_filmy.php">Baza Filmów</a>
          <a class="dropdown-item" href="premiery.php">Premiery</a>
        </div>
      </li>
	  <?php
	  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) echo "
	  <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"profile.php\">Profil</a>
      </li>
	  <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"logout.php\">Wyloguj</a>
      </li>";
	  ?>
	  
	  
    </ul>
    </div>
    </nav>
    </header>
    <!-- NAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAVVVVVVVVVVVVVVVVVVVVBARRRRRRRRRRRRRRRRRRRRRRR -->
    <main role="main">

	<div class="col-12">

		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
			  <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
			  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
			  <li data-target="#myCarousel" data-slide-to="4" class=""></li>
			  <li data-target="#myCarousel" data-slide-to="5" class=""></li>
			</ol>
			<div class="carousel-inner">
			  <div class="carousel-item">
				<a href="https://www.filmweb.pl/film/Promare-2019-839338"><img src="obrazy\img (1).jpg" style="width: 100%"></a>
				<div class="container">
				  <div class="carousel-caption text-left">
					<h1><b>Piraci z Karaibów</b></h1>
				  </div>
				</div>
			  </div>
			  <div class="carousel-item active">
				<a href="https://www.filmweb.pl/Spirited.Away"><img src="obrazy\img (2).jpg" style="width: 100%"></a>
				<div class="item active">
			</div>
				<div class="container">
				  <div class="carousel-caption">
					<h1><b>Matrix</b></h1>
				  </div>
				</div>
			  </div>
			  <div class="carousel-item">
				<a href="https://www.filmweb.pl/film/Spider-Man+3-2007-138713"><img src="obrazy\img (3).jpg" style="width: 100%"></a>
				<div class="container">
				  <div class="carousel-caption text-left">
					<h1><b>Spider Man 3</b></h1>
				  </div>
				</div>
			  </div>
			  <div class="carousel-item">
				<a href="https://www.filmweb.pl/film/Pacific+Rim-2013-618823"><img src="obrazy\img (4).jpg" style="width: 100%"></a>
				<div class="container">
				  <div class="carousel-caption text-left">
					<h1><b>Pacific Rim</b></h1>					
				  </div>
				</div>
			  </div>
			  <div class="carousel-item">
				<a href="https://www.filmweb.pl/film/Niesamowity+Spider-Man-2012-401436"><img src="obrazy\img (5).jpg" style="width: 100%"></a>
				<div class="container">
				  <div class="carousel-caption text-left">
					<h1><b>The Amazing Spider Man</b></h1>
				  </div>
				</div>
			  </div>
			  <div class="carousel-item">
				<a href="https://www.filmweb.pl/film/Warcraft%3A+Pocz%C4%85tek-2016-334999"><img src="obrazy\img (6).jpg" style="width: 100%"></a>
				<div class="container">
				  <div class="carousel-caption text-left">
					<h1><b>Warcraft: Początek</b></h1>
				  </div>
				</div>
			  </div>
	  
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Autor</h2>
        <p>Witam ,jestem Artur założyciel strony Felinime.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
	    <img src="obrazy\like.png">
        <h2>Polecane strony</h2>
        <p>Strony warte sprawdzenia</p>
        <p><a class="btn btn-secondary" href="oscary\polecane.php" role="button">Zobacz szczegóły »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="obrazy\pepe.png">
        <h2>Meme</h2>
        <p>Meme stworzone przez autora strony i z neta</p>
        <p><a class="btn btn-secondary" href="oscary\meme.php" role="button">Zobacz szczegóły »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Darmowy RAM <span class="text-muted">Tylko tutaj</span></h2>
        <p class="lead">Kliknij tutaj jeśli chcesz za darmo uzyskać więcej RAM'u. Twoje filmy będą się renderowały znacznie szybciej.
        </p>
      </div>
      <div class="col-md-5">
	  <a href="ram.php"><img src="obrazy\memory.png" style="width: 500px , height: 500px"></a>
      </div>
    </div>

 <!--    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Manga<span class="text-muted">Najlepsze tytuły tutaj.</span></h2>
        <p class="lead">Najlepsze i najbardziej znane tytuły z Japoni i Koreii. Rzetelne i uczciwe recenzje twoich ulubionych tytułów.</p>
      </div>
      <div class="col-md-5 order-md-1">
	  <a href="oscary\manga.php"><img src="obrazy\bakum.png" style="width: 500px , height: 500px"></a>
      </div>
    </div> 

    <hr class="featurette-divider"> -->

   <!-- <div class="row featurette"> 
      <div class="col-md-7">
        <h2 class="featurette-heading">Oscary Artura Rezmera<span class="text-muted">Tak Daniel stworzyłem swoją ceremonie.</span></h2>
        <p class="lead">Znajdują się tutaj tytuły ,które autor uznał za arcydzieła.Jest to protest przeciwko amerykańskim oscarą ,które negują znaczenie tytułów z Azji</p>
      </div>
      <div class="col-md-5">
        <a href="oscary\oscary.php"><img src="obrazy\oscars.jpg" style="width: 100% , height: 100%"></a>
      </div>
    </div>  -->
			
    <hr class="featurette-divider">
  </div>
</main>
    <!-- FOOOOOOOOOOOOOOOOTTTTTTTTTTTTTEEEEEEEEEEEEEEEERRRRRRRRR -->
  <footer class="container py-5">
  <center>
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
      <small >© 2020 Artur Rezmer</small>
    </div>
  
  </div>
  </center>
  </footer>
    <!-- FOOOOOOOOOOOOOOOOTTTTTTTTTTTTTEEEEEEEEEEEEEEEERRRRRRRRR -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>