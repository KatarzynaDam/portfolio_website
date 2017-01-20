<?php

// Tworzymy zmienną dla imienia i nazwiska
$name = $_POST['name'];

// Tworzymy zmienną dla adresu email
$email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
$message = $_POST['message'];

$odkogo = "katarzynadam@gmail.com";

// Podajesz adres email na który chcesz otrzymać wiadomość
$dokogo = "katarzynadam@gmail.com";

// Podajesz tytuł jaki ma mieć ta wiadomość email
$tytul = "Wiadomość ze strony WWW KATEDAM.COM";

// Przygotowujesz treść wiadomości
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

// Wysyłamy wiadomość
$naglowki = "From: ".$email." Content-Type:text/plain;charset=utf-8";
$sukces=mail ($dokogo, $tytul, $wiadomosc,  $naglowki ); 

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>