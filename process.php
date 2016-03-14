<?php
/**
 * Created by PhpStorm.
 * User: 1311059
 * Date: 14/03/2016
 * Time: 10:41
 */

    if(empty($_POST['username']) || empty($_POST['password'])){
        header('Location: index.php?failed');

    }else if(empty($_POST['username']) && empty($_POST['password'])){
        header('Location: index.php?f');
    }else{
        header('Location: index.php?s');
    }


?>