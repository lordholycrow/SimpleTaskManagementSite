<?php


include "config.php";
 
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$project_name = mysqli_real_escape_string($conn, $_REQUEST['project_name']);
$project_descb = mysqli_real_escape_string($conn, $_REQUEST['project_descb']);
$date = date('Y-m-d H:i:s');
 

$sql = "INSERT INTO projects (project_name, project_descb, project_date) VALUES ('$project_name', '$project_descb', '$date')";
if(mysqli_query($conn, $sql)){
    echo "<script> location.href='index.php'; </script>";
        exit;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>