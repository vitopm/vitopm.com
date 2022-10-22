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
                After we finished the website prototype, we had no idea how were` we going to accomplish this task at all. My teammates and I were flabbergasted because we didn't think that the back end part was the hardest part. None of us had any experience with python and website and how to actually connect it. After days of research and consultation, my friends and I fell into this one random video of machine learning project (yes, machine learning) in YouTube and they use something called <a href="https://streamlit.io/" target="_blank"><b>Streamlit</b></a>.
            </p>
            <br>
            <p>
                Streamlit saves us a ton of time to deploy our project. It allows us to create a python based project into website without any more code, no need for HTML, CSS, or even PHP to create the website. So the next step was to learn how to use it and to sure that we can make it happen in accordance with our prototype. I learned how to use Streamlit by turning <a href="insurance-prediction.php"><b>my machine learning mid exam project</b></a> into Strealit website, and deployed it on Streamlit Cloud. So that was one of the challenges we had to overcome.
            </p>
            <br>
            <p>
                The most challenging part of this project was to find resources that could help us parse the resume. Apparently, there was a handful of resources that actually parse resume in PDF format and in DOCX format. The file type wasn't the issue, the real issue was the python package dependency and versions incompatibility. The resources we found were a few years old, and there were different versions of package that have been going around, so several source codes that we tried didn't work at all.
            </p>
            <br>
            <p>
                Until a few days later we found a package that specifically deal with resume parsing, made by <a href="https://omkarpathak.in/pyresparser/" target="_blank"><b>Omkarpathak</b></a> called as Pyresparser. Pyresparser uses SpaCy and NLTK for NLP operation. SpaCy is used to recognize words within the resume and call it as entity, therefore we need a model to be trained with many annotated resume samples, so that it could predict which entity followed with certain information. This process is called as Named Entity Recognition (NER).
            </p>
            <br>
            <p>
                Afterward, we finished the back end to process the uploaded resume and tidied up the extracted information. Finally we work on the front end  using Streamlit and deploy it on Streamlit Cloud.
            </p>
            <br>
            <p>
                Since SpaCy NER model needs to be trained, Omkarpathak didn't state any information regarding the dataset that he used to train the SpaCy model to recognize the entity within the resume. Therefore, the result varies between one resume and another.  
            </p>
            <br>
            <p>
                Alternatively, you can click the link below to visit the project and the prototype.
            </p>

            <div class="project-website-list">
                <a href="https://vitopm-resume-parser-app-eszpgr.streamlitapp.com/" target="_blank"> 
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
                This is the first page. It contains an explanation on how to use the app.
            </p>
            
            <img class ="project-img" src="../resources/images/projects/resume-parser-website/resume-parser-homepage.png" alt="">
            
            <p>
                We can navigate to another page by clicking the options.
            </p>

            <img class ="project-img" src="../resources/images/projects/resume-parser-website/resume-parser-homepage-options.jpg" alt="">

            <p>
                Moving on to Parse my resume menu. Here user can upload their resume in pdf file format, and then the website will give result of the data extraction below the upload menu.
            </p>

            <img class ="project-img" src="../resources/images/projects/resume-parser-website/resume-parser-parse.png" alt="">
            
            <p>
                In the end, we enjoyed the process of making our project, although the result can sometimes is far from the actual data on the resume. For me personally, i think this project is a monumental milestone for me and the team. I'm hoping we could polish this project further in the future, not to just leave it as it is, but to make this actually useful for others who need this.
            </p>

        </div>
    </main> 

    <footer>
        <p>made with love <a href="https://youtu.be/Tr97MQiqW38" target="_blank">❤️</a> by <a href="../index.php">vitopm</a></p>
    </footer>
</body>
</html>