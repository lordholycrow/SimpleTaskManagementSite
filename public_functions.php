<?php 


function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM projects";
	$result = mysqli_query($conn, $sql);
	//  all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
	
		array_push($final_posts, $post);
	}
	return $final_posts;
}
