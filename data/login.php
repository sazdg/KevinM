<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title> KEVIN MALONE'S secret world</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
        <meta name="description" content="Kevin Malone by sdg" />
        <link rel="stylesheet" href="stile.css">
        <!--JQuery CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--Boostrap CSS CDN-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--Bootstrap Javascript CDN-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

<?php
include("config.php");

$nome = $_POST["nome"];
$psw = $_POST["password"];

function faiLogin($connessione,$nome,$psw){
    if(isset($nome) and isset($psw)){
        $sql = "SELECT * FROM kevinmalonesecretworld WHERE Nome = '$nome' AND pass = '$psw'";
        //MD5 è la crittografia per nascondere i dati 
        $result = mysqli_query($connessione,$sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            //ritorna un array delle cose scritte in tabella 
            if($row["Nome"] === $nome && $row["pass"] === $psw && $row["level"] === "one"){
                echo "<div class='container-fluid row text-center'><h2>Welcome buddy</h2>";
                echo "<p>you're at home here.<p></div><br/>";
                echo "<div class='container-fluid row text-center'><img src='../img/186b48abd650f01385da9fcbbd8929dc.gif'></div>";
            } elseif($row["Nome"] === $nome && $row["pass"] === $psw && $row["level"] === "two") {
                echo "<div class='container-fluid row text-center'><h2>Welcome buddy</h2>";
                echo "<p>you're at home here.<p></div><br/>";
                echo "<div class='container-fluid row text-center'><img src='../img/lololol.jpg'></div>";
            } elseif($row["Nome"] === $nome && $row["pass"] === $psw && $row["level"] === "three"){
                echo "<div class='container-fluid row text-center'><h2>Welcome buddy</h2>";
                echo "<p>you're at home here.<p></div><br/>";
                echo "<div class='container-fluid row text-center'><iframe width='560' height='315' src='https://www.youtube.com/embed/WcYG-5b7448' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
            } else {
                echo "<div class='container-fluid row text-center'><p>NOPE, heheheh </p></div>";
            }
        } else {
            echo "nessun risultato";
        }
    }
}

$x = faiLogin($connessione,$nome,$psw);

?>

    </body>
</html>