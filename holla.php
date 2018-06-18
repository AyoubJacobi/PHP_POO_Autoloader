<?php 
require 'Class_Personnage.php';


$ayoub = new personnage("ayoub");




echo "<br>";
// $ayoub->nom = "ayoub";

//var_dump($ayoub);

echo "<h2>";
echo $ayoub->GetNom();



echo "<h1>";
echo $ayoub->msg();
echo "</h1>";

?>