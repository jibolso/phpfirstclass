<?php
/**
 * Created by PhpStorm.
 * User: 1311059
 * Date: 14/03/2016
 * Time: 10:41
 */

session_start();

    include('connection.php');

    if(empty($_POST['username']) || empty($_POST['password'])){
        header('Location: index.php?ns=1');
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM login WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) == 1){
            while($row = $result->fetch_array()){
                $user = $row['username'];
                $_SESSION['user'] = $user;
            }
            header('Location: home.php?s');
        }else{
            header('Location: index.php?ns=1');
        }

    }

?>