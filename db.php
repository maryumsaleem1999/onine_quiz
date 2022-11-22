<?php
$server= "localhost";
$user= "root";
$password="";
$db= "submit_Assignment";
$con = mysqli_connect($server,$user,$password,$db);

if($con){
//    echo "connect";

}else{
    echo "not connect";
}
?>