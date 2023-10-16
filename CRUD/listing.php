<?php
include 'connexion.php';
include 'fonctions.php';
$result = getAllData($connexion);

?>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Téléphone</th>
        <th>Adresse</th>
        <th>Actions</th>
    </tr>
    <?php
    while($ligne = mysqli_fetch_assoc($result)){
    ?>
    <tr>
     <td><?php echo $ligne['nom'] ;?></td>
     <td><?php echo $ligne['prenom'] ;?></td>
     <td><?php echo $ligne['age'] ;?></td>
     <td><?php echo $ligne['telephone'] ;?></td>
     <td><?php echo $ligne['adresse'] ;?></td>
     <td><a href="/update.php?id=<?php echo $ligne['id'];?>">Update</a></td>
     <td><a href="/delete.php?id=<?php echo $ligne['id'];?>">Delete</a></td>
    </tr>
    <?php
}


// redirection
// html list
// boutton roa modif sy suppr