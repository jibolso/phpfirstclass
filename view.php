<?php
/**
 * Created by PhpStorm.
 * User: 1311059
 * Date: 15/03/2016
 * Time: 11:03
 */

include('connection.php');
    if($_GET['done']){


            echo '<div>';
            echo '<ul>';
            echo '<li>MarvelMovieId</li><li>Year Released</li><li>Title></li><li>Production Studio></li><li>Notes></li>';
            while($row = $result->fetch_array()){

            }
            echo '</ul>';
            echo '</div>';

    }
?>