<?php
if(isset($_POST['nom'])){
    echo "Hello ".$_POST['nom'];
}
    ?>

    <form action="./index.php" method="POST">
        <input type="text" name="nom" placeholder="entrer votre nom">
        <input type="text" name="telephone" placeholder="entrer votre phone">
        <input type="text" name="cin" placeholder="entrer votre cin">
        <input type="submit" value="Save">
    </form>

    <table>
        <tr>
            <td>Nom:</td>
            <td><?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?></td>
        </tr>
        <tr>
            <td>Telephone:</td>
            <td><?php  if(isset($_POST['telephone'])){echo $_POST['telephone'];} ?></td>
        </tr>
        <tr>
            <td>Cin:</td>
            <td><?php  if(isset($_POST['cin'])){echo $_POST['cin'];} ?></td>
        </tr>
    </table>