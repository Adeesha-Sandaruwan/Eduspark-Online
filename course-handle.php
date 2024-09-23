<?php

require_once 'connection.php';

$category = $_GET['category'];


$query = "SELECT Cname, C_Description, C_image, Cbutton FROM coursedetails WHERE C_category = '$category'";
$result = mysqli_query($conn, $query);



$courses = [];


if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }
}

if ($category == "graphic") {

    $query = "SELECT Cname, C_Description, C_image, Cbutton FROM coursedetails WHERE C_category = 'graphic'";

    foreach ($courses as $course) {
        echo "<div class='course-item'>
            <img src='" . $course['C_image'] . "' class='course-image' width = '200px' height = '200px'>
            <h3>" . $course['Cname'] . "</h3>
            <p>" . $course['C_Description'] . "</p><br>
            <a href='" . $course['Cbutton'] . "' class='more-details'>More Details</a>
        </div>";
    }


} else if ($category == "AI") {

    $query = "SELECT Cname, C_Description, C_image, Cbutton FROM coursedetails WHERE C_category = 'AI'";

    foreach ($courses as $course) {
        echo "<div class='course-item'>
            <img src='" . $course['C_image'] . "' class='course-image' width = '200px' height = '200px'>
            <h3>" . $course['Cname'] . "</h3>
            <p>" . $course['C_Description'] . "</p>
            <br>
            <a href='" . $course['Cbutton'] . "' class='more-details'>More Details</a>
        </div>";
    }


} else if ($category == "data") {

    $query = "SELECT Cname, C_Description, C_image, Cbutton FROM coursedetails WHERE C_category = 'data'";

    foreach ($courses as $course) {
        echo "<div class='course-item'>
            <img src='" . $course['C_image'] . "' class='course-image' width = '200px' height = '200px'>
            <h3>" . $course['Cname'] . "</h3>
            <p>" . $course['C_Description'] . "</p><br>
            <a href='" . $course['Cbutton'] . "' class='more-details'>More Details</a>
        </div>";
    }


} else if ($category == "web") {

    $query = "SELECT Cname, C_Description, C_image, Cbutton FROM coursedetails WHERE C_category = 'web'";

    foreach ($courses as $course) {
        echo "<div class='course-item'>
            <img src='" . $course['C_image'] . "' class='course-image' width = '200px' height = '200px'>
            <h3>" . $course['Cname'] . "</h3>
            <p>" . $course['C_Description'] . "</p><br>
            <a href='" . $course['Cbutton'] . "' class='more-details'>More Details</a>
        </div>";
    }


} else if ($category == "programming") {

    $query = "SELECT Cname, C_Description, C_image, Cbutton FROM coursedetails WHERE C_category = 'programming'";

    foreach ($courses as $course) {
        echo "<div class='course-item'>
            <img src='" . $course['C_image'] . "' class='course-image' width = '200px' height = '200px'>
            <h3>" . $course['Cname'] . "</h3>
            <p>" . $course['C_Description'] . "</p><br>
            <a href='" . $course['Cbutton'] . "' class='more-details'>More Details</a>
        </div>";
    }


}


mysqli_close($conn);

?>