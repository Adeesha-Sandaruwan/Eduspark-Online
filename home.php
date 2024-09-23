<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdusparkOnline - Homapage</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="src\styles\style.css">
    <link rel="stylesheet" href="src\styles\header.css">
    <link rel="stylesheet" href="src\styles\footer.css">


</head>

<body>

    <?php require 'header.php'; ?>



    <script src="src\js\home-header.js"></script>


    <center>


        <div class="container">
            <div class="images">

                <input type="radio" name="slide" id="slide1" checked>
                <input type="radio" name="slide" id="slide2">
                <input type="radio" name="slide" id="slide3">
                <input type="radio" name="slide" id="slide4">

                <img src="images\slide1.png" alt="slide1" class="s1">
                <img src="images\slide2.png" alt="slide2" class="s2">
                <img src="images\slide3.png" alt="slide3" class="s3">
                <img src="images\slide4.jpg" alt="slide3" class="s4">

            </div>


            </d>
            <div class="dots">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
        </div> <button id="become-teacher">Become An Educator</button>
    </center>



    <div class="body-content">
        <h1 class="heading">Our Latest Courses To Explore</h1><br><br>
        <div class="body">
            <div class="box" id="course1">
                <div class="body-img">
                    <img src="images/courses/ai.png" alt="" width="400px" height="300px">
                </div>
                <div class="img-content">
                    <h3>Artificial Intelligence & Machine Learning</h3>
                    <p>This course introduces Artificial Intelligence & Machine Learning and how these algorithms could
                        be applied to general applications.
                        ★★★★☆</p><br>
                    <button class="Reg-btn">More Details</button>
                </div>
            </div>

            <div class="box" id="course2">
                <div class="body-img">
                    <img src="images/courses/java.png" alt="" width="400px" height="300px">
                </div>
                <div class="img-content">
                    <h3>JAVA Development</h3><br><br>
                    <p>This course provides the base for a versatile and popular programming language used in web and
                        mobile apps.
                        <br>
                        ★★★★☆
                    </p><br>
                    <button class="Reg-btn">More Details</button>
                </div>
            </div>

            <div class="box" id="course3">
                <div class="body-img">
                    <img src="images/courses/graphic.png" alt="" width="400px" height="300px">
                </div>
                <div class="img-content">
                    <h3>Graphics Design</h3><br><br>
                    <p>This course focuses on designing professional-grade materials using the required knowledge.
                        <br>
                        ★★★★☆
                    </p>
                    <br>
                    <button class="Reg-btn">More Details</button>
                </div>
            </div>

            <div class="box" id="course4">
                <div class="body-img">
                    <img src="images/courses/ui.png" alt="" width="400px" height="300px">
                </div>
                <div class="img-content">
                    <h3>UI/UX Design</h3>
                    <p>This course helps educators understand the principles of UI/UX design to build professional
                        applications.
                        <br>
                        ★★★★☆
                    </p><br>
                    <button class="Reg-btn">More Details</button>
                </div>
            </div>

            <div class="box" id="course5">
                <div class="body-img">
                    <img src="images/courses/data.png" alt="" width="400px" height="300px">
                </div>
                <div class="img-content">
                    <h3>Data Science</h3>
                    <p>This course focuses on collecting, analyzing, and interpreting data to improve performance.
                        <br>
                        ★★★★☆
                    </p>
                    <br>
                    <button class="Reg-btn">More Details</button>
                </div>
            </div>

            <div class="box" id="course6">
                <div class="body-img">
                    <img src="images/courses/ps.png" alt="" width="400px" height="300px">
                </div>
                <div class="img-content">
                    <h3>Adobe Photoshop</h3><br>
                    <p>This course covers advanced Photoshop skills to create professional-grade designs.
                        <br>
                        ★★★★☆ <br>
                    </p><br>
                    <button class="Reg-btn">More Details</button>
                </div>
            </div>
        </div>
    </div>

    <center>
        <div id="events">
            <img src="images/events.png" alt="" width="100%" height="300px">
            <button id="load-more">See Upcoming Events</button>

        </div>

    </center>

    <div id="subbg">
        <img src="images\subbg.png" alt="sub background" width=100% height="470px">
    </div>

    <?php include 'footer.php'; ?>


</body>

</body>

</html>