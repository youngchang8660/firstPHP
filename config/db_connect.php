<?php 

    // Connect to DB
    $conn = mysqli_connect('localhost', 'young', 'test123', 'pizza_project');

    // Check the connection
    if(!$conn) {
        echo 'Connection error ' . mysqli_connect_error();
    }

?>