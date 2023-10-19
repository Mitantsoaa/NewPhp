<?php
declare(strict_types=1);
    include 'connexion.php';

    function getDataById($connexion,$id){
        $sql = "SELECT * FROM php WHERE id=".$id;
        $query = mysqli_query($connexion,$sql);
        $result = mysqli_fetch_assoc($query);
        return $result;
    }

    function deleteData($connexion,$id){
        $sql =  "DELETE FROM php WHERE id =".$id;
        $query = mysqli_query($connexion,$sql);
        header('Location: /listing.php');
    }

    function updateData($connexion, $name,$lastName,$age,$phone,$adresse,$id){
        $sql = "UPDATE php SET nom = '$name', prenom = '$lastName', age = '$age', telephone = '$phone', adresse = '$adresse' WHERE id = '$id'";
        mysqli_query($connexion,$sql);
        
        header('Location: /listing.php');
    }

    function getAllData($connexion){
        $sql = "SELECT * FROM php";
        $result = mysqli_query($connexion,$sql);
        return $result;
    }
    function estNom(String $nom)
    {
        // je sais pas pourquoi celui ne marche plus /^[a-zA-ZÀ-ÿ.-]*[a-zA-ZÀ-ÿ][\s\t]+[a-zA-ZÀ-ÿ.-]*$/
        if(strlen($nom) <= 1){
            die('Nom trop court');
        }else if (preg_match("/^[a-zA-z-é.ôêèë çù]*$/", $nom)){
            return $nom;
        }else{
            die('Le nom doit être une chaine de caractère');
        }
    }

    function estPrenom(?String $prenom)
    {
        if(strlen($prenom) <= 1){
            die ('Prénom trop court');
        }else if (!preg_match ("/^[a-zA-z-é.ôêèë çù]*$/", $prenom)){
            die('Le prénom doit être une chaine de caractère');
        }else{
            return $prenom;
        }
    }

    function estAge(?Int $age)
    {
        if(!is_numeric($age)){
            die('Votre age doit être un nombre');
        }else if ($age >= 120){
            die('Vous êtes trop vieux');
        }else{
            return $age;
        }
    }

    function estPhone(?String $phone)
    {
        if(strlen($phone) < 10){
            die('Numero de téléphone trop court');
        }else if (strlen($phone) > 12){
            die('Numero de téléphone trop long');
        }else if(!preg_match('/^[0-9]{12}+$/', $phone)){
            die('Format de numero invalide');
        }else{
            return $phone;
        }
    }

    function estAdress(?String $adress)
    {
       if(!preg_match('/Lot lot/', $adress)){
            die("Votre adresse doit contenir le mot clé 'Lot' ");
       }else{
            return $adress;
       }
    }