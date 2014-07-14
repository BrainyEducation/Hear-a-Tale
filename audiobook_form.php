<?php
// Create connection
$con=mysqli_connect("localhost","hearatale_user","hearatale","hearatale");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$author = $_POST['author'];
$title = $_POST['title'];
$category = $_POST['category'];
$fl = $_POST['fl'];
$file = $_POST['file'];
$submit = $_POST['submit'];
if (isset($submit)){
mysqli_query($con,"INSERT INTO Audiobooks (Author, Title, Category, FileLocation, ThumbnailImage)
VALUES ('$author', '$title', '$category', '$fl', '$file')");

//file upload
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
  if (file_exists("Thumbnails/" . $_FILES["file"]["name"])) {
      echo "Sorry, but " . $_FILES["file"]["name"] . " already exists. ";
      } else{
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "Thumbnails/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "Thumbnails/" . $_FILES["file"]["name"];
    }
  }
} else {
  echo "Invalid file";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Audiobook Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>

<form class="box login" action="audiobook_form.php" method="post" enctype="multipart/form-data">
<center><h1>Audiobook Form </h1> </center>
	<fieldset class="boxBody">
	  <label>Author</label>
	  <input type="text" name="author" tabindex="1" placeholder="Enter Text" required>
	   <label>Title</label>
	  <input type="text" name="title" tabindex="1" placeholder="Enter Text" required>
	   <label>Category</label>
	  <input type="text" name="category" tabindex="1" placeholder="Enter Text" required>
	   <label>File Location</label>
	  <input type="text" name="fl" tabindex="1" placeholder="Enter Text" required>
	   <label>Thumbnail Image</label>
	  <input type="file" name="file" id="file" tabindex="1" placeholder="Enter Text" required>
	</fieldset>
	<footer>
	  <input type="submit" name="submit"class="btnLogin" value="Submit" tabindex="4">
	</footer>
</form>
</body>
</html>
