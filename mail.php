<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
if(isset($_POST['privato'])) $tipologia='Privato'; 
	elseif(isset($_POST['azienda'])) $tipologia='Azienda'; 
		else $tipologia='Nessuna';
$information=$_POST['information'];
$provenienza=$_POST['pagina'];

$message = '<html><body>';
$message .= "<strong>Nome:</strong> ".$name."<br /><strong>Email:</strong> ".$email."<br /><strong>Telefono:</strong> ".$phone."<br /><strong>Tipologia:</strong> ".$tipologia."<br /><br /><strong>Testo del messaggio:</strong><br />".$information;
$message .= "</body></html>";

$headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
/*$headers .= "CC: susan@example.com\r\n";*/
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

/* cambiare indirizzo */
mail ('info@gruppoesedra.it', 'Mail da gruppoesedra.it' , $message, $headers);

$message = '<html><body>';
$message .= "<strong>Nome:</strong> ".$name."<br /><strong>Email:</strong> ".$email."<br /><strong>Telefono:</strong> ".$phone."<br /><strong>Tipologia:</strong> ".$tipologia."<br /><strong>Provenienza:</strong> ".$provenienza."<br /><br /><strong>Testo del messaggio:</strong><br />".$information;
$message .= "</body></html>";


mail ('nicola.zanon86@gmail.com', 'Mail da gruppoesedra.it' , $message, $headers);

header("location:grazie.php");
 ?>