<?php

if(isset($_POST['nom'])){
    $nom=$_POST['nom'];
} else {
    $nom=" ";
}

if(isset($_POST['prenom'])){
    $prenom=$_POST['prenom'];
} else {
    $prenom=" ";
}

if(isset($_POST['email'])){
    $mail=$_POST['email'];
} else {
    $mail=" ";
}

if(empty($nom) || empty($prenom) || empty($mail)){
    echo'<font color = "red"> Merci de remplir les champs</font>'
} else {
    $mailEmmaus = 'emmanuel.jud@gmail.com';
    $objetEmmaus = 'Message';
    $contenuEmmaus = '
    <html>
    <head>
        <title>Message envoyé du site des camps d\'été.</title>
    </head>
    </html>'
    $_POST['message'];
    $enteteEmmaus = 'Content-type: text/html; charset=utf-8';

    mail($mailEmmaus, $objetEmmaus, $contenuEmmaus, $enteteEmmaus);
    header("Location : index.php");
}
?>