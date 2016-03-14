
<!Doctype html>
<html>
<head>
    <title>Login</title>
    <style type="text/css" rel="stylesheet">
        body{
            max-width: 960px;
            margin:auto;
            margin-top:50px;
        }
        #loginModal {
            width:30%;
            background-color: transparent;
            border: solid;
            border-color: slategray;
            margin: auto;padding: 20px;
        }

        #loginModal input{
            margin:10px;
        }

        #loginModal button{
            align-content: center;
        }

        .labels {
            margin-right: 20px;
        }
    </style>
</head>
    <body>
    <main>
        <section id="loginModal">
            <form action="process.php" method="post">
            <div>
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