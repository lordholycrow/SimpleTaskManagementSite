<?php

include "config.php"; // Using database connection file here

$project_id = $_GET['project_id']; // get id through query string

$del = mysqli_query($conn,"delete from projects where project_id = '$project_id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:index.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>