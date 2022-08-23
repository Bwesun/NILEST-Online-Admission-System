
<?php

include('head.php');
include('connect.php');

?>
<style type="text/css">
	body{
    margin: 1%;
  }
</style>
<div class="container">
<fieldset>
  <legend>Hostel Applications</legend>

  <table class="table table-striped table-condensed">
    <tr>
      <th>S/N</th>
      <th>Name</th>
      <th>Reg. Number</th>
      <th>Application ID</th>
      <th>Application Date</th>
      <th>Status</th>
    </tr>

<?php

$sql="SELECT * FROM hostel WHERE status='booked' ORDER BY id DESC ";
$result=mysql_query($sql);

$i=1;

$count=mysql_num_rows($result);

while($rows=mysql_fetch_assoc($result)){

?>

    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $rows['name']; ?></td>
      <td><?php echo $rows['regnum'] ; ?></td>
      <td><?php echo $rows['app_id'] ; ?></td>
      <td><?php echo $rows['date'] ; ?></td>
      <td><?php echo $rows['status'] ; ?></td>
      <td> 
        <form method="post">
          <input type="hidden" name="id" value="<?php echo $rows['id'] ; ?>">
          <input type="submit" name="sub_accept" value="Approve" class="btn btn-success">
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

  $sql2="UPDATE hostel SET status='approved' WHERE id='$id' ";
  $result2=mysql_query($sql2);

  if($result2){
    echo "<script>alert('DONE! Status, set to Approved!')</script>";
    echo "<script>window.open('accommodation.php','_self')</script>";
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