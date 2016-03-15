<?php
/**
 * Created by PhpStorm.
 * User: 1311059
 * Date: 15/03/2016
 * Time: 11:03
 */

include('connection.php');
    if($_GET['a']){
        $sql = "SELECT * FROM marvelmovies";
        $data = mysqli_query($db, $sql);

        if(mysqli_num_rows($data) == 0){

        }else{
            echo '<div>';
            echo '<ul>';
            echo '<li>MarvelMovieId</li><li>Year Released</li><li>Title></li><li>Production Studio></li><li>Notes></li>';
            while($row = $result->fetch_array()){

            }
            echo '</ul>';
            echo '</div>';
        }

    }elseif($_GET['b']){

    }elseif($_GET['c']){

    }elseif($_GET['d']){

    }else{

    }