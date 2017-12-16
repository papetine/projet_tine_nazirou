<?php
session_start();
if(!$_SESSION['user']){
    header('location:connexion.php');
}else{
echo "<h1>Bienvenue user</h1>";
echo '<a href="heure.php"> heure</a>'.'<br>';
echo '<a href="Calculatrice.php"> Calculatrice</a>'.'<br>';
echo '<form method="post" action="user.php"><input type="submit"  name="dec"value="deconnexion"/>
</form>';
extract($_POST);
if(isset($dec)){
    session_destroy();
    header('location: connexion.php');
}   
}
?>