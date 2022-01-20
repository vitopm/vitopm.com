<?php 
    $words=[
        ["Ga usah nyerah","Vito","resources/images/wise-pict/foto lukisan.png"],
        ["Sing genah talah!", "Nikita","resources/images/wise-pict/foto lukisan nikita.png"],
        ["Hard work is worthless for those that don't believe in themselves.","Naruto Uzumaki", "resources/images/wise-pict/naruto.jpg"]

    ];
    $index=rand(0,count($words)-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="resources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="resources/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/responsive.css">
    <title>vito pm - wise word</title>
</head>
<body>
    <header>
        <p class="name-logo"><a href="index.php">vitopm</a></p>
        <div class="nav-bar">
            <ul>
                <li><a href="about-me.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="center-screen" style="
        background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.9)), url('<?=$words[$index][2];?>');">
            <div class="wise">
                <img src="<?=$words[$index][2];?>" alt="the person">
                <h1 class="wise-words"><?=$words[$index][0]?></h1>
                <h3 class="wise-details">- <?=$words[$index][1]?></h3>
                <p><?=date("Y/m/d")?></p>
            </div>
        </div>
    </main> 

    <footer>
        <p>made with love <a href="https://youtu.be/Tr97MQiqW38" target="_blank">❤️</a> by <a href="/index.html">vitopm</a></p>
    </footer>
</body>
</html>