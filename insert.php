<!DOCTYPE html>
<html>
<head>
	<title>Create a Blog</title>
	<link rel="stylesheet" type="text/css" href="blog-1.css">
</head>
<body>
<div class="new">

<?php
	include('connection.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$title = htmlspecialchars($_POST['post_title']);
		$content = htmlspecialchars($_POST['content']);
		$author = htmlspecialchars($_POST['author']);
		$sql = "INSERT INTO blog_post(post_title, post_content, author, posted_on)
			values('".$title."', '".$content."','".$author."', '".date('Y-m-d')."')";

			if($conn->query($sql)){
				echo '<p>New record saved succesfully</p> <a href="welcome.html">Continue</a>';
				die(); 	 	
			}

			header('Location: http://localhost/blog-posting/blog.php');
			$conn->close();
	}
	else {
		
		echo "Error".$sql."<br>".$conn->error;
	}
	?>
	<a href="welcome.html">Continue</a>
	</div>

	</body>
</html>