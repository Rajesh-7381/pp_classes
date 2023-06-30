<?php

$servername="localhost";
$username="root";
$password="";
$dbname="pp_classes";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "connection sucessful";
}else{
    echo "not ssucess".mysqli_connect_error();
}


?>