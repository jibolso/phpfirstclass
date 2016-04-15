
<!Doctype html>
<html>
<head>
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
    <body>
    <main>
        <section id="loginModal">
            <form action="process.php" method="post">

            <div>
                <span><?php if($_GET['ns']){echo 'Login Failed' . '<br>';}?></span>
                <label class="labels" for="username">Username</label>
                <input type="text" name="username" id="username" value="" />
            </div>
            <div>
                <label class="labels" for="password" >Password</label>
                <input type="password" name="password" id="password" value="" />
            </div>
            <div>
                <button>Submit</button>
            </div>
            </form>
        </section>
    </main>

    <footer>

    </footer>
    </body>
</html>