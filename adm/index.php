
<?php
include('head.php');
include('connect.php');

?>
<style type="text/css">
	body{
    margin: 1%;
  }
</style>

<div class="jumbotron">
	<h1>Welcome Admin <i class="fas fa-cogs"></i></h1>
</div>

<div class="row">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
 Add News
</button>

<a class="btn btn-primary" href="application.php">
 Assess Candidates Application
</a>

<a class="btn btn-primary" href="accommodation.php">
 Approve Accommodation
</a>
<a class="btn btn-primary" href="accepted_application.php">
 Accepted Applications
</a>
</div>





<!-- Login Modal for Academic Secretary-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Login</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="" enctype="multipart/form-data" class="form-group">
          <input type="text" required name="username" class="form-control" placeholder="Enter Username"><br>
          <input type="text" required name="password" class="form-control" placeholder="Enter Password"><br>
          
          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="sub_login" class="btn btn-primary" value="Login">
        </form>
      </div>
    </div>
  </div>
</div>






<!-- Add News Modal-->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add News</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="" enctype="multipart/form-data" class="form-group">
      		<input type="text" required name="topic" class="form-control" placeholder="Enter Topic"><br>
      		
      		<textarea required name="description" class="form-control" placeholder="Enter Story..."></textarea><br>
      		
      		<br>
      		Select Picture:<input type="file" onchange="previewFile()" name="pic" class="form-control"  required>
      		<img class="view img-thumbnail" src="" width="150"  alt="">

<script type="text/javascript">
function previewFile() {
  var preview = document.querySelector('.view');
  var file = document.querySelector('input[type=file]').files[0];
  var reader = new FileReader();

  // when user select an image, `reader.readAsDataURL(file)` will be triggered
  // reader instance will hold the result (base64) data
  // next, event listener will be triggered and we call `reader.result` to get
  // the base64 data and replace it with the image tag src attribute
  reader.addEventListener("load", function() {
    console.log('before preview');
    preview.src = reader.result;
    console.log('after preview');
  }, false);

  if (file) {
    console.log('inside if');
    reader.readAsDataURL(file);
  } else {
    console.log('inside else');
  }

  /*
  FLOW OF THE RESULT:
  
  inside if
  before preview
  after preview
  */
}
</script>









      	


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="sub" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>

<?php

if(isset($_POST['sub'])){

	$topic=$_POST['topic'];
	$category=$_POST['category'];
	$description=$_POST['description'];
	$priority=$_POST['priority'];
	$pic=$_POST['pic'];

	$date=date("y/m/d");
	$time=date("h:i A");

$filename=$_FILES['pic']['name'];
	move_uploaded_file($_FILES['pic']['tmp_name'], "../images/".$_FILES['pic']['name']);


if($topic=='' || $description==''){
	echo "<font color='blue'><script>alert('Please Fill in the empty Spaces'); </script></font>";
}
else
{
$sql="INSERT INTO topics (topic, description, pic, date, time, priority, short_desc, view)VALUES('$topic','$description', '$filename', '$date', '$time', 'latest', '$description', '1') ";
$result=mysql_query($sql);

//STopped at declaring session for the movement stuff for success.php

	if($result){
		echo "<font color='red'><script>alert('News Upload Successful!'); </script></font>";
		//echo $sql;
	}else{
		echo "<font color='red'>alert('News Upload Unsuccessful! Please Try Again!'); </font>";
		echo $sql;
	}
}




}

?>



<?php
include('../footer.php');

?>