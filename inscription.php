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

if(isset($_POST['age'])){
    $age=$_POST['age'];
} else {
    $age=" ";
}

if(isset($_POST['pays'])){
    $pays=$_POST['pays'];
} else {
    $age=" ";
}

if(isset($_POST['telephone'])){
    $telephone=$_POST['telephone'];
} else {
    $telephone=" ";
}

if (isset($_POST['email'])) {
    $mail=$_POST['email'];
} else {
    $mail=" ";
}

if(empty($nom) || empty($prenom) || empty($mail) || empty($age) || empty($pays) || empty($telephone) || empty($mail)){
    echo'<font color ="red">Merci de remplir les champs</font>';
} else{

    //test des variables

    $objet = 'Confirmation de votre inscritpion';
    $entete = 'From : Emmaüs SCHERWILLER';
    $contenu = 'Merci de vous être inscrit au chantier d\'été. Nous prendrons contact avec vous prochainement.';
    mail($mail, $objet, $contenu, $entete);

    $mailEmmaus = 'emmanuel.jud@gmail.com';
    $objetEmmaus = 'Demande d\'inscription chantier d\'été';
    $contenuEmmaus = '
    <html>
    <head>
        <title>Inscription camps d\'été</title>
    </head>
    <body>
        <p> Nom : '.$nom.' </p>
        <br>
        <p> Prénom : '.$prenom.' </p>
        <br>
        <p> Age : '.$age.' </p>
        <br>
        <p> Pays : '.$pays.' </p>
        <br>
        <p> Téléphone : '.$telephone.' </p>
        <br>
        <p> e-mail : '.$mail.' </p>
    </body>
    </html>';
    $enteteEmmaus = 'Content-type: text/html; charset=utf-8';

    mail($mailEmmaus, $objetEmmaus, $contenuEmmaus, $enteteEmmaus);
    header("Location : index.php");
}
?>