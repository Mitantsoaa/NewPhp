<?php
    $connexion = mysqli_connect("localhost",'root','','dtc');
    if(!$connexion){
        die('Unable to connect to database');
    }