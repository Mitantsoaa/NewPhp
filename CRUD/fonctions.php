<?php
declare(strict_types=1);
    include 'connexion.php';

    function getDataById($connexion,$id){
        $sql = "SELECT * FROM php WHERE id=".$id;
        $query = mysqli_query($connexion,$sql);
        $result = mysqli_fetch_assoc($query);
        return $result;
    }

    function isNom(String $nom)
    {
        if(strlen($nom) <= 1){
            die('Nom trop court');
        }else if (!preg_match ("/^[a-zA-ZÀ-ÿ.-]*[a-zA-ZÀ-ÿ][\s\t]+[a-zA-ZÀ-ÿ.-]*$/", $nom)){
            die('Le nom doit être une chaine de caractère');
        }else{
            return $nom;
        }
    }

    function isPrenom(?String $prenom)
    {
        if(strlen($prenom) <= 1){
            die ('Prénom trop court');
        }else if (!preg_match ("/^[a-zA-ZÀ-ÿ.-]*[a-zA-ZÀ-ÿ][\s\t]+[a-zA-ZÀ-ÿ.-]*$/", $prenom)){
            die('Le prénom doit être une chaine de caractère');
        }else{
            return $prenom;
        }
    }

    function isAge(?Int $age)
    {
        if(!is_numeric($age)){
            die('Votre age doit être un nombre');
        }else if (ceil(log10($age)) >= 4){
            die('Vous êtes trop vieux');
        }else{
            return $age;
        }
    }

    function isPhone(?String $phone)
    {
        if(strlen($phone) < 10){
            die('Numero de téléphone trop court');
        }else if (strlen($phone) > 10){
            die('Numero de téléphone trop long');
        }else if(!preg_match('/^[0-9]{10}+$/', $phone)){
            die('Format de numero invalide');
        }else{
            return $phone;
        }
    }

    function isAdress(?String $adress)
    {
        return preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/', $adress);
    }