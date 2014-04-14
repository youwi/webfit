<html>
<body>
<?php
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Error: " . $_FILES["file"]["error"] . "<br />";
	}
	else
	  {
		  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		  echo "Type: " . $_FILES["file"]["type"] . "<br />";
		  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		  echo "Stored in: " . $_FILES["file"]["tmp_name"];
		  
		  if (file_exists($_FILES["file"]["name"]))
		  {
			echo $_FILES["file"]["name"] . " already exists. ";
		  }
		else
		  {
			  move_uploaded_file($_FILES["file"]["tmp_name"],iconv("utf-8","gbk",$_FILES["file"]["name"]));
			
		  }
		
	  }
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<label for="file">文件名:</label>
	<input type="file" name="file" id="file" /> 	<br />
	<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>