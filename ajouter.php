<?php

session_start();

$type = strip_tags($_GET['type']);

include_once('connect.php');

$sql = 'INSERT INTO tbl_typeL (libelle) VALUES (?);';

$stmt = mysqli_prepare($bdd, $sql);

mysqli_stmt_bind_param($stmt, 's', $type);

mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt,$type);

mysqli_stmt_fetch($stmt);

$emailTo = 'hugo35340@gmail.com';
    $sujet = 'Un nouveau livre à été ajouté';

    $message = "\r\n";
    $message = $message . "Bonjour,\r\n";
    $message = $message . "\r\n";
    $message = $message . 'Voici le nouveau type de livre ' . $type ."\r\n";
    $message = $message . "\r\n";
    $message = $message . "Cordialement \r\n";
    $message = $message . "\r\n";
    $message = $message . "Mail automatique, généré par le site Internet \r\n";

    $headers = "MIME-Version: 1.0\n";
    $headers = "Content-type: text/html; charset=utf-8\n";
    $headers = "From:" . $mail;
    $error = !mail($emailTo, $sujet, $message, $headers);
print($error);

include_once('close.php');

// header('Location: index.php');
?>
