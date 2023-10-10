<?php
// typage static
declare(strict_types=1);
    function getFullName(string $nom, ?string $prenom = ''): string
    {
        if(preg_match ("/^[a-zA-z-é.ôêèë ]*$/", $nom) && isset($prenom) && preg_match("/^[a-zA-z-é.ôêèë ]*$/", $prenom)){
            return "Votre nom complet est: $nom $prenom";
        // }else if(preg_match ("/^[a-zA-z-é.ôêèë ]*$/", $nom)){
        }else if(preg_match ("/^[a-zA-ZÀ-ÿ.-]*[a-zA-ZÀ-ÿ][\s\t]+[a-zA-ZÀ-ÿ.-]*$/", $nom)){
             return "Votre nom complet est: $nom";
        }else{
            return "Nom invalide";
        }
    }
echo getFullName('Rakoto=kotô','joêlë');
// [a-zA-Z-. accent ]