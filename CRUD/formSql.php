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
    $nom = $_POST['nom']?isNom($_POST['nom']):'';
    $prenom = $_POST['prenom']?isPrenom($_POST['prenom']):null;
    $age = $_POST['age']?isAge($_POST['age']):0;
    $phone = $_POST['phone']?isPhone($_POST['phone']):null;
    $adresse = $_POST['adresse']?isAdress($_POST['adresse']):null;
    if(isset($_POST['send'])){
        // $sql = "INSERT INTO php (nom, prenom, age, telephone, adresse) VALUES ('$nom', '$prenom','$age', '$phone', '$adresse')";
        $sql = sprintf('INSERT INTO php (nom, prenom, age, telephone, adresse) VALUES ("%s", "%s","%d", "%s", "%s")',$nom, $prenom, $age, $phone, $adresse);
        mysqli_query($connexion,$sql);
        header('Location: /listing.php');
    }
}

