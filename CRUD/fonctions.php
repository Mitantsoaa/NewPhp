<?php
declare(strict_types=1);
    include 'connexion.php';

    function getDataById($connexion,$id){
        $sql = "SELECT * FROM php WHERE id=".$id;
        $query = mysqli_query($connexion,$sql);
        $result = mysqli_fetch_assoc($query);
        return $result;
    }

    function isNom(String $nom) :Bool
    {
        return strlen($nom) > 1 && preg_match ("/^[a-zA-ZÀ-ÿ.-]*[a-zA-ZÀ-ÿ][\s\t]+[a-zA-ZÀ-ÿ.-]*$/", $nom);
    }

    function isPrenom(?String $prenom)
    {
        return strlen($prenom) > 1 && preg_match ("/^[a-zA-ZÀ-ÿ.-]*[a-zA-ZÀ-ÿ][\s\t]+[a-zA-ZÀ-ÿ.-]*$/", $prenom);
    }

    function isAge(?Int $age)
    {
        return is_numeric($age) && ceil(log10($age)) < 4 ;
    }

    function isPhone(?String $phone)
    {
        return strlen($phone) == 10 && preg_match('/^[0-9]{10}+$/', $phone);
    }

    function isAdress(?String $adress)
    {
        return preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/', $adress);
    }