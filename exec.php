<?php
$nume = @$_POST['nume'];
$mail = @$_POST['mail'];
$age = @$_POST['age'];
$text = @$_POST['txt'];
if(isset($nume) && isset($text))
{
	$files = fopen("feedback/$nume.txt", "w") or die("I Cant Create files please check system administrator");
	$num = "Numele: $nume \n". PHP_EOL;
	$mai = "Email: $mail \n". PHP_EOL;
	$ag = "Varsta: $age \n". PHP_EOL;
	$tex = "Comentariul: $text ". PHP_EOL;
	fwrite($files, $num);
	fwrite($files, $mai);
	fwrite($files, $ag);
	fwrite($files, $tex);
	fclose($files);
	header("Location: feedback.php?status=success");
	exit();
}
else
{
	header("Location: feedback.php?status=fail");
	exit();
}
?>