<?php
//include 'DB.php';
include(dirname(__FILE__) . '/../DB.php');
$descr=$_POST['descr'];
$id=$_POST['id'];
$query="UPDATE `servicepage` SET `description`='$descr' WHERE id=$id";
$result = $con->query($query);
if($result){
   echo $id;
}
else{
    echo 'Description Not Updated';
}
?>