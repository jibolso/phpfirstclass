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
            echo '<ul id="movieAll">';
            echo '<li>MarvelMovieId</li><li>Year Released</li><li>Title</li><li>Production Studio</li><li>Notes</li>';

            echo '</ul>';
            echo '</div>';

    }
?>