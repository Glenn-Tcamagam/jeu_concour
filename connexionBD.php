<?php
$user="root";
$mdp="";
$db="jeuconcour";
$server="localhost";

$link=mysqli_connect($server, $user, $mdp, $db);

if($link){
    //echo"connection etablie";
}else{
    die(mysqli_connect_error());
}














?>