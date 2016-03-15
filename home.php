<?php session_start(); ?>
<!Doctype html>
<html>
<head>
    <title>Home</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<main>
    <section id="home">
        <div>
            <p>Welcome! <?php echo $_SESSION['username']; ?></p>
        </div>

    </section>
</main>

<footer>

</footer>
</body>
</html>