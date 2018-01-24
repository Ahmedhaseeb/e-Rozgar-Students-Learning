<!DOCTYPE html>
<html>
<body>

<form method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload">
    <input type="submit" value="Upload file" name="submit">
</form>

<?php
if(isset($_FILES['fileToUpload'])){
	$target_dir = "";
	$target_file =  $target_dir.$_FILES["fileToUpload"]["name"];
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". $_FILES["fileToUpload"]["name"]. " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 

</body>
</html> 

