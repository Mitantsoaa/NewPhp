

    <form action="./index.php" method="POST">
        <input type="text" name="nom" placeholder="entrer votre nom">
        <input type="text" name="telephone" placeholder="entrer votre phone">
        <input type="text" name="cin" placeholder="entrer votre cin">
        Homme:<input type="radio" name="gender" value="H">
        Femme:<input type="radio" name="gender" value="F">
        Paoma:<input type="checkbox" name="fruits[]" value="Paoma">
        Paiso:<input type="checkbox" name="fruits[]" value="Paiso">
        Poara:<input type="checkbox" name="fruits[]" value="Poara">
        Voasary:<input type="checkbox" name="fruits[]" value="Voasary">
        Akondro:<input type="checkbox" name="fruits[]" value="Akondro">
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
        <tr>
            <td>Genre:</td>
            <td><?php  if(isset($_POST['cin'])){echo $_POST['gender'];} ?></td>
        </tr>
        <tr>
            <td>Fruits:</td>
            <td><?php  if(isset($_POST['fruits'])){
                $voa = '';
                foreach($_POST['fruits'] as $fruit){
                    $voa .= $fruit. ', ';
                }
                echo $voa;
            } ?></td>
        </tr>
    </table>

