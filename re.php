<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 1-6-2018
 * Time: 10:24
 */

$mysqli = new mysqli('localhost', 'root', 'Mischa2017', 'challengephpdatabase')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Cssstyle1.css">
    <meta charset="utf-8">
    <title>SpotiTube</title>
</head>

<!--
* naam: <Mischa Prudon>
* groep: 7a
* datum: 26-1-2018
-->

<div class="div1">
    <nav>
        <a class="a1">SpotiTube</a>
        <a href="index.php">Home</a>
        <a href="index.php">Playlists</a>
    </nav>
</div>
<body>
<div class="bg"></div>
<div class="div1">
    <header>

        <h1>SpotiTube</h1>
        <h3>Nulla facilisi. Praesent et maximus orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            Aliquam venenatis arcu vitae pellentesque congue. Nunc lacinia neque velit, in mattis lorem accumsan molestie.</h3>
        <br>
        <br>
    </header>
    <br>
    <br>
    <h2></h2>
    <form action="re.php" method="post">
        <input type="text" name="first" placeholder="Firstname">
        <br>
        <input type="text" name="last" placeholder="Lastname">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit">Sign Up</button>>
    </form>


</div>
</body>
<div class="div1">
    <footer>
        @2018 Company Inc.
    </footer>
</div>
</html>


