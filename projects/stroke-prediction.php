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
    <title>vito pm - resume parser prototype</title>
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
            <h1 class="intro--name">Stroke Prediction Website</h1>

            <h3 class="intro--description">Final project for Machine Learning class.</h3>
        </div>

        <div class="content">
            <p>
            In 4th semester, we a group project for Machine Learning. The group members were me, Cheryl Almeira, and Michelle Angela. The main theme of this project is to utilize machine learning methods to predict anything based on the dataset that we use. We chose to predict stroke based on  <a href="https://www.kaggle.com/datasets/fedesoriano/stroke-prediction-dataset" target="_blank"><b>this dataset provided on Kaggle.</b></a>
            </p>
            <br>
            <p>
                The next step was to choose which machine learning method to pick. Speaking of stroke prediction, there is only two options, stroke or not stroke. Therefore our task was binary classification, because we had two outcomes that we have to predict.
            </p>
            <br>
            <p>
                There was a list of several methods allowed to be used, and each method can only be assigned to exactly one group. Since our task was binary classification, we decided to pick K-Nearest Neighbor (KNN) method. KNN works by calculating N-nearest neighbor. If we choose 5 nearest neighbors, that means a data is classified into the closest 5 nearest neighbors. It was simple, we thought, <em> until we looked further into our dataset</em>.
            </p>
            <br>
            <p>
                We thought our stroke dataset was good, since the rating of usability was 10/10. When we dived even further into data preprocessing and data exploratory, something didn't add up. Apparently, the class with the highest number belongs to non-stroke, which was 95.1%, that left stroke class data to only 4.9%! This imbalance of data causes a tendency to only highly accurately predict one class but not the other, and this is something we must avoid. We found a way to handle data imbalance by using SMOTE (Synthetic Minority Over-Sampling Technique). 
            </p>
            <br>
            <p>SMOTE works by creating synthetic data over the original data of the less frequent class, so that the machine learning model could be more accurate. SMOTE helped us to increase the performance of prediction by looking at the number of precision and recall. Although the increase was only a few percent, it was better than no progress at all.
            </p>
            <br>
            <p>
                Alternatively, you can click the link below to visit the project.
            </p>

            <div class="project-website-list">
                <a href="https://vitopm-stroke-prediction-app-dsh1w2.streamlitapp.com/" target="_blank"> 
                    <div class="website-desc">
                        <h2>Stroke Prediction Website</h2>
                        <p>
                            Click here to see the website.
                        </p>
                    </div>
                </a>
            </div>

            <p>
                Here I attached some of the screenshots from the website.
            </p> 
            <br>
            <p>
                This is the homepage where user can read information about stroke.
            </p>
            
            <img class ="project-img" src="../resources/images/projects/stroke-prediction/homepage.png" alt="">
            
            <p>
                Afterward we can navigate to our stroke prediction by filling the information about our health condition.
            </p>

            <img class ="project-img" src="../resources/images/projects/stroke-prediction/predict.png" alt="">

            <p>
                You can view how we process the dataset that we use to train our machine learning model and use it to predict stroke in the exploratory data analysis page.
            </p>

            <img class ="project-img" src="../resources/images/projects/stroke-prediction/exploratory-data-analysis.png" alt="">

            <p>
                We also provide information about the accuracy of our KNN model.
            </p>

            <img class ="project-img" src="../resources/images/projects/stroke-prediction/evaluation-metrics.png" alt="">

            <p>
                The project was fun, although we faced several difficulties, we learned a lot along the way, oversampling is one of them. The data available in the real world situation would be a lot messier, imbalances here and there. But with the help of machine learning, we could overcome these problems and predict something that our brain couldn't. I hope we can improvise the quality of less frequent class in our stroke prediction, so that the application can be actually useful one day.
            </p>
        </div>
    </main> 

    <footer>
        <p>made with love <a href="https://youtu.be/Tr97MQiqW38" target="_blank">❤️</a> by <a href="../index.php">vitopm</a></p>
    </footer>
</body>
</html>