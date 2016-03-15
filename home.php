<?php session_start(); ?>
<!Doctype html>
<html>
<head>
    <title>Home</title>
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
                <li><a href="view.php?b">Display Movies Created by Marvel Studios</a></li>
                <li><a href="view.php?c">Display All Movies Created after 2010</a></li>
                <li><a href="view.php?d">Display all X-men Films</a></li>
            </ul>
        </nav>
    </section>

    </header>
</main>

<footer>

</footer>
</body>
</html>