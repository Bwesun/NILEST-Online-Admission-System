<form enctype="multipart/form-data" method="_POST" action="">
Select Picture:<input type="file" name="pic" class="form-control"  required>

<input type="submit" name="sub" value="Submit">
</form>

<?php

if(isset($_POST['sub'])){

  $pic=$_POST['pic'];





$HTTP_POST_FILES['userfile']['name'];
$HTTP_POST_FILES['userfile']['type'];
$HTTP_POST_FILES['userfile']['size'];
$HTTP_POST_FILES['userfile']['tmp_name'];

/*
if (is_uploaded_file($userfile)) {
copy($userfile, "/images");
} else {
echo "Possible file upload attack: filename ’$userfile’.";
}
 ...or...*/ 
move_uploaded_file($pic, "images/");
}

?>