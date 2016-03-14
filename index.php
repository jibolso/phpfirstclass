<?php
    //DB connection call
    include("connection.php");
?>
<!Doctype html>
<html>
<head>
    <title>Login</title>
    <style type="text/css" rel="stylesheet">
        body{
            max-width: 960px;
            margin: 0 auto;
        }
        #loginModal {
            width:30%;
            background-color: transparent;
            border: solid;
            border-color: slategray;
        }
    </style>
</head>
    <body>
    <main>
        <section id="loginModal">
            <div>
                <label for="username" />
                <input type="text" name="username" id="username" value="" />
            </div>
            <div>
                <label for="password" />
                <input type="password" name="password" id="password" value="" />
            </div>
            <div>
                <button>Submit</button>
            </div>
        </section>
    </main>

    <footer>

    </footer>
    </body>
</html>