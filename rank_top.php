<?php 
$conn = new Mysqli ("localhost","root","","filmy");
if(!$conn) die($conn -> error());
	
?>
<html>
<head>
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
    <!-- Favicons -->
      <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
      <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
      <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
      <meta name="theme-color" content="#563d7c">
	  
    <link rel="stylesheet" type="text/css" href="style\style2.css">
</head>
<body>
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
          <a class=\"nav-link\" href=\"profile.php\">Wyloguj</a>
      </li>";
	  ?>
	  
	  
    </ul>
    </div>
    </nav>
    </header>
    <main role="main">
	<h1>Top 10 Filmów</h1>
	<?php
	include('server.php');

	$query = $db->query("SELECT id_filmu, tytul, dlugosc, link, rezyser.imie, rezyser.Nazwisko, kategoria.gatunek FROM filmyy,rezyser,kategoria WHERE rezyser.id_rezysera=filmyy.id_rezysera and kategoria.id_kategori= filmyy.id_kategori LIMIT 10");
	$table = array();
	$i=0;

	while($row = mysqli_fetch_assoc($query) ){
     $table[$i] = array('id' => $row['id_filmu'], 'tytul' => $row['tytul'], 'dlugosc' => $row['dlugosc'], 'link' => $row['link'], 'imie' => $row['imie'],'nazwisko' => $row['Nazwisko'],'gatunek' => $row['gatunek']);
     $i++;
	}
	?>
	
	<script>
		var tabFilmy = <?php echo json_encode($table); ?>;
		var dlg=tabFilmy.length;
		for (var i = 0; i < 10; i++) {
			var obj = document.createElement("div");
			obj.id = "container";
			obj.innerHTML = "<div id='z1'><img src='"+tabFilmy[i].link+"'></div><div id='z2'>"+tabFilmy[i].tytul+"</div><div id='z6'>something</div><div id='z3'>"+tabFilmy[i].dlugosc+"</div><div id='z4'>"+tabFilmy[i].imie + " " + tabFilmy[i].nazwisko+"</div><div id='z5'>"+tabFilmy[i].gatunek+"<div style='clear:both;'></div></div>";
			document.querySelector("main").appendChild(obj);
		}
	</script>
    </main>
    
   <footer class="container py-5">
   <center>
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
      <small class="d-block mb-3 text-muted">© 2020 Artur Rezmer</small>
    </div>
    </div>
  </div>
  </footer>
  </center>
    <!-- FOOOOOOOOOOOOOOOOTTTTTTTTTTTTTEEEEEEEEEEEEEEEERRRRRRRRR -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>