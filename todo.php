<?php
$task=$_REQUEST['task'];


if(isset($_POST['addTask'])){
    $host="localhost";
    $user="root";
    $password="";
    $db="todo";

    $conn = mysqli_connect($host,$user,$password,$db);
}
?>