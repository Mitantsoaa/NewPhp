<?php
include 'connexion.php';
include 'fonctions.php';
$res = getDataById($connexion,$_GET['id']);
?>
<form action="./update.php" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" placeholder="Entrez votre nom" value="<?php if(isset($res['nom'])){echo $res['nom']; }?>">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" placeholder="Entrez votre prénom" value="<?php if(isset($res['prenom'])){echo $res['prenom']; }?>">
    <label for="age">Age:</label>
    <input type="number" name="age" placeholder="Entrez votre age" value="<?php if(isset($res['age'])){echo $res['age']; }?>">
    <label for="phone">Téléphone:</label>
    <input type="text" name="phone" placeholder="Entrez votre téléphone" value="<?php if(isset($res['telephone'])){echo $res['telephone']; }?>">
    <label for="adresse">Adresse:</label>
    <input type="text" name="adresse" placeholder="Entrez votre adresse" value="<?php if(isset($res['adresse'])){echo $res['adresse']; }?>">
    <input type="submit" name="send" value="Update">
</form>
<?php
    if(isset($_POST) && isset($_POST['send'])){
        $name = $_POST['nom'];
        $lastName = $_POST['prenom'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $adresse = $_POST['adresse'];
        updateData($connexion,$name,$lastName,$age,$phone,$adresse,$_GET['id']);
    }