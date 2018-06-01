<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 1-6-2018
 * Time: 10:24
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Cssstyle1.css">
    <meta charset="utf-8">
    <title>SpotiTube Jazz Playlist</title>
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
    <h2>Playlist</h2>
    <?php
    $muzikanten = array("The Very Best of Jazz - 50 Unforgettable Tracks", "Funky Jazz | Saxophone & Harmonica Blues | Blues Guitar | Slow Blues, 12 Bar Blues | Blues Harmonica", "Dave Brubeck - Take Five");
    echo "<ul>";
    foreach ($muzikanten as $muzikant) {
        $i = 1;
        echo "<li>". "<a href='play1v".$i.".php'>$muzikant</a>" ."</li>";
        $i++;
    }
    echo "<ul>";
    ?>
</div>
</body>
<div class="div1">
    <footer>
        @2018 Company Inc.
    </footer>
</div>
</html>



