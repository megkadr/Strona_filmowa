<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}

session_destroy();
echo "<meta http-equiv=\"refresh\" content=\"3;url=felinime.php\"/>Zostałeś wylogowany, za chwilę zostaniesz przekierowany na stronę główną.";
?>