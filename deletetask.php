<?php

include "config.php"; // Using database connection file here

$task_id = $_GET['task_id']; // get id through query string
$project_id = $_GET['project_id'];

$del = mysqli_query($conn,"delete from tasks where task_id = '$task_id'"); // delete query

if($del)
{
	 header("Location:tasks.php?project_id=".$project_id);
    mysqli_close($conn); // Close connection
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>