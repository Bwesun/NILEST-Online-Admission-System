
<?php

include('head.php');
include('connect.php');

?>
<style type="text/css">
	body{
    margin: 1%;
  }
</style>

<fieldset>
  <legend>Candidates Application</legend>

  <table class="table table-striped table-condensed">
    <tr>
      <th>S/N</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone No.</th>
      <th>Gender</th>
      <th>State</th>
      <th>Course</th>
      <th>Passport</th>
    </tr>

<?php

$sql="SELECT * FROM admin WHERE reg_status='clear' ORDER BY id DESC ";
$result=mysql_query($sql);

$i=1;

$count=mysql_num_rows($result);

while($rows=mysql_fetch_assoc($result)){

?>

    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $rows['surname']." ".$rows['firstname'] ; ?></td>
      <td><?php echo $rows['email'] ; ?></td>
      <td><?php echo $rows['phoneno'] ; ?></td>
      <td><?php echo $rows['gender'] ; ?></td>
      <td><?php echo $rows['stateorigin'] ; ?></td>
      <td><?php echo $rows['course'] ; ?></td>
      <td><img src="../images/<?php echo $rows['upload'] ; ?>" width="70"></td>
      <td><a href="app_index.php?id=<?php echo $rows['id'] ; ?>" class="btn btn-primary" >View</a>  
        <form method="post">
          <input type="hidden" name="id" value="<?php echo $rows['id'] ; ?>">
          <input type="submit" name="sub_accept" value="Accept Application" class="btn btn-success">
        </form>
      </td>
    </tr>
<?php
}

?>
<tr>
  <td colspan="7"><b>Total No. of Records: <?php echo $count;  ?></b></td>
</tr>
  </table>
</fieldset>

<?php
if(isset($_POST['sub_accept'])){

$id=$_POST['id'];

  $sql2="UPDATE admin SET admissionstatus='accepted' WHERE id='$id' ";
  $result2=mysql_query($sql2);

  if($result2){
    echo "<script>alert('DONE!')</script>";
  }else{
    echo "<script>alert('ERROR!')</script>";
  }
}


?>







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









<?php
include('../footer.php');

?>