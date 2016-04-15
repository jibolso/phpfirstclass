<?php session_start(); ?>
    <!Doctype html>
    <html>
    <head>
        <title>View All Movies</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
    <main>
        <header>
            <section id="home">
                <div>
                    <p>Welcome! <?php echo $_SESSION['user']; ?></p>
                </div>
                <nav>
                    <ul id="nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="view.php?done=a">Display All Movies</a></li>
                        <li><a href="viewms.php?done=b">Display Movies Created by Marvel Studios</a></li>
                        <li><a href="viewafter2010.php?done=c">Display All Movies Created after 2010</a></li>
                        <li><a href="viewxmen.php?done=d">Display all X-men Films</a></li>
                    </ul>
                </nav>
            </section>

        </header>
        <section id="listAllMovies">
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
                echo '<li>MarvelMovieId</li><li>Year Released</li><li>Title</li><li>Production Studio</li><li>Notess</li><br>';
                $query = "SELECT * FROM marvelmovies WHERE title LIKE '%X%'";

                $result = mysqli_query($db, $query);
                if(mysqli_num_rows($result) >= 1) {


                    while ($row = $result->fetch_array()) {
                        echo "<li>{$row['marvelMovieID']}</li><li>{$row['yearReleased']}</li><li>{$row['title']}</li><li>{$row['productionStudio']}</li><li>{$row['notes']}</li><br>";
                    }
                }else{
                    echo "No Result Found";
                }

                echo '</ul>';
                echo '</div>';

            }
            ?>
        </section>
    </main>

    <footer>

    </footer>
    </body>
    </html>
