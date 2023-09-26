<?php
    $ville = 'Antananarivo';
    $adressePost = 75000;
    $telephone = 342813067;
    $isCapital = true;

    // echo $ville;
    // echo $adressePost;
    // echo $telephone;
    // echo $isCapital;
    $age = 18;
    echo $age.'taona izy';
    echo ' </br>';
    if($age <= 18){
        echo "Tsy ampy taona </br>";
        echo ' </br>';
    }
    
    if ($age >= 18){
        echo "Efa ampy taona";
        echo ' </br>';
    }
    
    if($age != 12){
        echo $age."<br>";
    }

    if($age == 18){
        echo "Vao ampy taona";
        PHP_EOL;
    }
    // table boolean anaty if +github
    // env python

    //parcours tableau avec php
    $tab = ['carotte','poivron','aubergine','chou'];
    // foreach($tab as $legume){
    //     echo $legume.PHP_EOL;
    // }

    // for($i=0; $i< count($tab); $i++){
    //     echo $tab[$i];
    // }

    $assocArray = array(
      'nom' => 'Mita', 
      'prenom' => ['tsoa'=>['autre valeur', 'autre valeur kosa'],'teste'], 
      'age' => 90, 
      'estEtudiant' => true
    );
    echo $assocArray['nom'].' '.$assocArray['prenom'][0].PHP_EOL;
    echo $assocArray['prenom']['tsoa'][0];
//   Boucle while
    // $x = 1;
    // while($x <= count($tab)){
    //     echo 'Nous sommes au'.$x.' ème boucle'.PHP_EOL;
        
    //     $x++;
    // }


    // ajouter un valeur dans un tableau
    echo 'ajouter valeur à la fin';
    array_push($tab,'banane','pomme');
    print_r($tab);

    // au debut du tableau
    echo 'ajouter au debut';
    array_unshift($tab,'katsaka');
    print_r($tab);

    // detele the last elemtn of array
    echo 'supprimer à la fin';
    array_pop($tab);
    print_r($tab) ;

    //delete the first element of array
    echo 'supprimer au debut';
    array_shift($assocArray);
    print_r($assocArray);

    // ajouter in specific position
    echo 'remplacer un element';
    array_splice($tab,1,1,'akondro');
    print_r($tab);

    // get a part of array
    echo 'afficher une part du tableau';
    print_r(array_slice($tab,0,2));


    ?>