<?php


include "config.php";
 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$task_name = mysqli_real_escape_string($conn, $_REQUEST['task_name']);
$short_descb = mysqli_real_escape_string($conn, $_REQUEST['short_descb']);
$long_descb = mysqli_real_escape_string($conn, $_REQUEST['long_descb']);
$project_id = mysqli_real_escape_string($conn, $_REQUEST['project_id']);

$isitdone = 1; 
$date = date('Y-m-d H:i:s');
 

$sql = "INSERT INTO tasks (task_name, task_short_descb, task_descb, task_date, is_it_done, project_id) VALUES ('$task_name', '$short_descb', '$long_descb' ,'$date' , '$isitdone','$project_id')";
if(mysqli_query($conn, $sql)){
  header("Location:tasks.php?project_id=".$project_id);
        exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>