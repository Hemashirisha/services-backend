<?php
//echo 'HELLO';
//include '../DB.php';
include(dirname(__FILE__) . '/../DB.php');
$content=$_POST['HomeContent'];
//$title='serve';
$query="UPDATE `homepage` SET `content`='$content' WHERE 1";
$result = $con->query($query);
//echo $result;
if($result){
    header('Location:../homepage.php');
}
else{
    echo 'Title Not Updated';
}
?>