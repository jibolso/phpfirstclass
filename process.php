<?php
/**
 * Created by PhpStorm.
 * User: 1311059
 * Date: 14/03/2016
 * Time: 10:41
 */


    include('connection.php');

    if(empty($_POST['username']) || empty($_POST['password'])){
        header('Location: index.php?failed');
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT uid FROM login WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);

        while($row = mysql_fetch_array($sql))
        {
            echo $row['username'];
        }
        /*
        if(mysqli_num_rows($result) == 1){
            $_SESSION['name'] = $num['username'];
            header('Location: home.php?s');
        }else{
            header('Location: index.php?ns');
        }*/

    }

?>