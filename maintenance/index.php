<?php
    $array=[
        "resources/images/maintenance/the_calling_of_the_apostles_peter_and_andrew_1939.1.141.jpg",
        "resources/images/maintenance/the_feast_of_the_gods_1942.9.1.jpg",
        "resources/images/maintenance/portrait_of_a_woman_1956.12.1.jpg",
        "resources/images/maintenance/madonna_and_child_enthroned_with_four_saints_1952.5.12.jpg",
        "resources/images/maintenance/the_annunciation_1937.1.16.jpg",
    ];
    // $array=[
    //     "../resources/images/maintenance/the_calling_of_the_apostles_peter_and_andrew_1939.1.141.jpg",
    //     "../resources/images/maintenance/the_feast_of_the_gods_1942.9.1.jpg",
    //     "../resources/images/maintenance/portrait_of_a_woman_1956.12.1.jpg",
    //     "../resources/images/maintenance/madonna_and_child_enthroned_with_four_saints_1952.5.12.jpg",
    //     "../resources/images/maintenance/the_annunciation_1937.1.16.jpg",
    // ];
    $index=rand(0, count($array)-1);
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
    <!-- <link rel="stylesheet" href="../resources/css/responsive.css">
    <link rel="stylesheet" href="../resources/css/style.css"> -->
    <title>vito pm - maintenance</title>
</head>
<body>
    <header>
        <p class="name-logo"><a href="">vitopm</a></p>
    </header>

    <main>
        <div class="center-screen1" >
            <div class="maintenance">
                <img class="maintenance-img" src="<?=$array[$index];?>">
                <h1>Under Maintenance</h1>
                <p>Instead take a look at the painting above, reload to view another painting randomly.</p>
            </div>
        </div>
    </main> 

    <footer>
        <p>made with love <a href="https://youtu.be/Tr97MQiqW38" target="_blank">❤️</a> by <a href="/index.html">vitopm</a></p>
    </footer>

</body>
</html>