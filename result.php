<?php 
require_once("Functions.php");
var_dump($_POST);
if($_POST){
    $name = $_POST['fname'];
    if (empty($name)){
        echo "</br>Nom vide";
    }else{
        echo "</br>Mon nom est: " . $name;
    }
$nameLengthIsvalid = nameLengthIsvalid($_POST['fname']);
echo '</br>';
$saltedName = addSalt($_POST['fname']);
var_dump($saltedName);
}
 ?>