<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="src\styles\course-listing.css">
    <link rel="stylesheet" href="src\styles\header.css">
    <link rel="stylesheet" href="src\styles\footer.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <script src="src\js\home-header.js"></script>

    <br><br><br><br><br><br>
    <h1>Course Categories</h1>
    <div class="container">


        <!-- Categories List -->
        <div class="all-categories">
            <a href="#" class="category" onclick="showCourses('graphic')">Graphic Design/ Digital Media</a>
            <a href="#" class="category" onclick="showCourses('AI')">AI & Machine learning</a>
            <a href="#" class="category" onclick="showCourses('programming')">Programming / Software Development</a>
            <a href="#" class="category" onclick="showCourses('web')">UI / UX Design / Web Development</a>
            <a href="#" class="category" onclick="showCourses('data')">Data Science / Data Analytics</a>
        </div>

        <!-- Courses Display -->
        <div class="courses" id="course-cont">
            <img src="images\courses\listing\category.gif" width="800px" height="400px">
        </div>
    </div>


    <script src=" src\js\course-listing.js"></script>

    <?php include 'footer.php'; ?>

</body>

</html>