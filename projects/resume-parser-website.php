<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="resources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="resources/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/responsive.css">
    <title>vito pm - resume parser</title>
</head> 
<body>
    <header>
        <p class="name-logo"><a href="../index.php">vitopm</a></p>
        <div class="nav-bar">
            <ul>
                <li><a href="../about-me.php">about</a></li>
                <li><a href="../contact.php">contact</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="intro">
            <h1 class="intro--name">Resume Parser Website</h1>

            <h3 class="intro--description">A NLP project.</h3>
        </div>

        <div class="content">
            
            <p>
                In semester 4, we were given a project from Natural Language Processing (NLP) class and splitted into several group members. The group members were me, Cheryl Almeira, and Michelle Angela. 
            </p>
            <br>
            <p>
                There were several idea candidates, in the end we chose to make a web that capable of extracting information from a CV or resume. Before jumping to the backend programming, we had to make ourselves a website prototype for our idea, which we call Resume Parser.
            </p>
            <br>
            <p>
                After we finished the website prototype, we had no idea how were` we going to accomplish this task at all. My teammates and I were flabbergasted because we didn't think that the back end part was the hardest part. None of us had any experience with python and website and how to actually connect it. After days of research and consultation, my friends and I fell into this one random video of machine learning project (yes, machine learning) in YouTube and they use something called Streamlit. 
            </p>
            <br>
            <p>
                The most challenging part of this project...
            </p>

            <p>
                The website is written in python and built on Streamlit framework, and the parsing part is built with NLTK and Pyresparser. 
            </p>
            <br>
            <p>
                Alternatively, you can click the link below to visit the project and the prototype.
            </p>

            <div class="project-website-list">
                <a href="https://vitopm-resume-parser-app-eszpgr.streamlitapp.com/" target=""> 
                    <div class="website-desc">
                        <h2>Resume Parser Website</h2>
                        <p>
                            Click here to see the app.
                        </p>
                    </div>
                </a>

                <a href="projects/resume-parser-website-prototype.php" target=""> 
                    <div class="website-desc">
                        <h2>Resume Parser Website (Prototype)</h2>
                        <p>
                            Click here to view the page.
                        </p>
                    </div>
                </a>
            </div>
            
            
            <p>
                Here I attached some of the screenshots.
            </p> 
            <br>
            <p>
                This is the homepage where user can choose to access the website as a business or as a personal user.
            </p>
            
            <img class ="project-img" src="../resources/images/projects/resume-parser/homepage.jpg" alt="">
            
            <p>
                And if we choose to enter the website as a business, we have the feature to upload several resumes.
            </p>

            <img class ="project-img" src="../resources/images/projects/resume-parser/business-upload.png" alt="">

            <p>
                The following feature allows user to enter a few criterions and then filter the extracted information to get the most suitable applicant.
            </p>

            <img class ="project-img" src="../resources/images/projects/resume-parser/business-criteria.png" alt="">

            <p>
                Since we havent worked on the backend process, so the result is going to be like this.
            </p>

            <img class ="project-img" src="../resources/images/projects/resume-parser/result.png" alt="">

            <p>
                That's all for the business features, now head on to the personal features. Since we haven't done the backend, the appearance from personal feature is going to be the same as the business, the main difference is the criteria page.
            </p>

            

        </div>
    </main> 

    <footer>
        <p>made with love <a href="https://youtu.be/Tr97MQiqW38" target="_blank">❤️</a> by <a href="../index.php">vitopm</a></p>
    </footer>
</body>
</html>