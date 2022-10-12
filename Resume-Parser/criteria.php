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
        <div class="heading">
            <h1>Applicant criteria</h1>
        </div>
        <form action ="company-result.php" method="post">
            <label for="region">Region:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" id="region" name="region"><br>
            <label for="yoe">Years of experience:&emsp;&emsp;&emsp;</label>
            <input type="text" id="yoe" name="yoe"><br>
            <label for="ed">Minimum education:&emsp;&emsp;&emsp;</label>
            <input type="text" id="ed" name="ed"><br>
            <label for="gpa">Minimum GPA:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" id="gpa" name="gpa"><br>
            <label for="exp">Experience:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" id="exp" name="exp"><br>
            <label for="skl">Skills:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" id="skl" name="skl"><br>
            <label for="mrs">Marital status:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" id="mrs" name="mrs"><br>

            <input type="submit" name="submit" value="Submit" >
        </form> 
        
    </main>
    
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
