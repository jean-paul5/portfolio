<?php
include("connexion.php");
$message="";

// recuperation des donnés
$nom = $_POST["nom"];
$email = $_POST["email"];
$message = $_POST["message"];

//insertion dans la base de donnés
$req = "INSERT INTO `login` (`nom`, `email`, `message`) VALUES (?,?,?)";
$stmt = mysqli_prepare($con,$req);
if($stmt) {

    mysqli_stmt_bind_param($stmt,"sss",$nom,$email,$message);
    
    $res = mysqli_stmt_execute($stmt);
    
    if($res){
        echo 'insertion reussit';
        $message=1;
        header("Location:p1.php ?reussit=$message");

    }else{
        $message=0;
        header("Location:p1.php ?error=$message");

    }
}else{
    $message="préparation échouée";
    header("Location:p1.php ?error=$message");
}







?>