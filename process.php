<?php
/**
 * Created by PhpStorm.
 * User: 1311059
 * Date: 14/03/2016
 * Time: 10:41
 */
/*

    include('connection.php');

    if(empty($_POST['username']) || empty($_POST['password'])){
        header('Location: index.php?failed');
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT uid FROM login WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);

        if(mysql_num_rows($result) == 0){
            header('Location: index.php?ns');
        }else{
            header('Location: index.php?s');
        }
    }
*/

$username = $_POST['username'];
$password = $_POST['password'];
echo $sql = "SELECT uid FROM login WHERE username='$username' AND password = '$password'";
?>