<form action="./formSql.php" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" placeholder="Entrez votre nom">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" placeholder="Entrez votre prénom">
    <label for="age">Age:</label>
    <input type="number" name="age" placeholder="Entrez votre age">
    <label for="phone">Téléphone:</label>
    <input type="text" name="phone" placeholder="Entrez votre téléphone">
    <label for="adresse">Adresse:</label>
    <input type="text" name="adresse" placeholder="Entrez votre adresse">
    <input type="submit" name="send" value="Save">
</form>
<?php 
include 'connexion.php';
include 'fonctions.php';
if($_POST){
    $nom = estNom($_POST['nom']);
    $prenom = estPrenom($_POST['prenom']);
    $age = estAge($_POST['age']);
    $phone = estPhone($_POST['phone']);
    $adresse = estAdress($_POST['adresse']);
    if(isset($_POST['send'])){
        // $sql = "INSERT INTO php (nom, prenom, age, telephone, adresse) VALUES ('$nom', '$prenom','$age', '$phone', '$adresse')";
        $sql = sprintf('INSERT INTO php (nom, prenom, age, telephone, adresse) VALUES ("%s", "%s","%d", "%s", "%s")',$nom, $prenom, $age, $phone, $adresse);
        mysqli_query($connexion,$sql);
        header('Location: /listing.php');
    }
}

