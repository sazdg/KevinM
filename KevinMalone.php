<!DOCTYPE HTML>
<?php
    include("config.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> KEVIN MALONE'S secret world</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Kevin Malone by sdg" />
        <link rel="stylesheet" href="stile.css">
    </head>
        <body>

            <div id="App">
                <h2>LOG INTO KEVIN MALONE'S SECRET WORLD</h2>
                <p> Guess the password to enter the website <br />
                    You will be redirect to Kevin's world<br />
                    Trust me you want to go there! </p>
            
                <p> Username: KevinM </p>
            </div>
            <div id="Input-Form">

                <form action="login.php"  method="post">
                <label>Name <br/>
                <input type="text"
                    class="InputType"
                    name="nome" />
                    </label>
                    <br/>

                <label>Password<br/>
                <input type="password"
                class="InputType"
                name="password" />
                    </label>
                    <br/>

                <input type="submit" 
                value="Submit"
                class="InputSubmit" />
                <br/>

                </form>

            </div>
            <footer>
                <p>Tips: there are 3 existing passwords possible, think about his favorite things.</p>
            </footer>
        </body>
</html>