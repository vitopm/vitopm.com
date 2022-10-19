<?php
    session_start();
    $page = "personal.php";
    $_SESSION["source"] = $page;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/responsive.css">
    <title>Resume Parser</title>
</head>

<body>
    <header> 
        <div class="logo">
            <a href="index.php"><h1>Resume Parser</h1></a>
        </div>
        <div class="nav-bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about-us.php">About us</a></li>
                <li><a href="contact-us.php">Contact us</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="subheading">
            <h2>Personal</h2>
        </div>
        
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        Select one file to upload:
            <input type="file" name="files[]" >
            <input type="submit" name="submit" value="Upload File" >
        </form>

        <?php if($_SESSION["isError"]):?>
            <h3><?= $_SESSION["error"] ?></h3>
        <?php endif;?>
        
    </main>

    if()
    
    <footer>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about-us.php">About us</a></li>
            <li><a href="contact-us.php">Contact us</a></li>
        </ul>
    </footer>

</body>

</html>
