<?php
session_start();

if(!isset($_SESSION['admin_user'])){
    header("location:index.php");
}
include('head.php');
include('connect.php');

?>
<style type="text/css">
	.l-article-column__headline {
    position: absolute;
    z-index: 1;
    -webkit-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    transform: translateY(-20px);
    height: 40px;
    line-height: 40px;
}
.c-article-column-headline {
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    background-color: #66CC99;
    padding: 0 20px;
    text-transform: uppercase;
    letter-spacing: 1.3px;
}
.c-article-card__headline-hover-inner {
    width: 100%;
    background-image: -webkit-gradient(linear,left bottom,left top,from(#ffe57b),color-stop(61%,#ffe57b),color-stop(61%,rgba(255,229,123,0)),to(rgba(255,229,123,0)));
    background-image: -webkit-linear-gradient(bottom,#ffe57b,#ffe57b 61%,rgba(255,229,123,0) 0,rgba(255,229,123,0));
    background-image: -o-linear-gradient(bottom,#ffe57b 0,#ffe57b 61%,rgba(255,229,123,0) 61%,rgba(255,229,123,0) 100%);
    background-image: linear-gradient(0deg,#ffe57b 0,#ffe57b 61%,rgba(255,229,123,0) 0,rgba(255,229,123,0));
    background-repeat: no-repeat;
    background-size: 0 100%;
    -webkit-transition: background-size .2s;
    -o-transition: background-size .2s;
    transition: background-size .2s;
}
* {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.c-article-card__headline {
    font-size: inherit;
    font-weight: 700;
    color: currentColor;
    color: #004d82;
    font-size: 15px;
}
body{
	padding: 10px;
}
.c-article-card__headline {
    font-size: inherit;
    font-weight: 700;
    color: currentColor;
    text-decoration: none;
        text-decoration-line: none;
        text-decoration-style: solid;
        text-decoration-color: currentcolor;
    display: block;
    margin-bottom: 10px;
    color: #004d82;
    font-size: 15px;
}
* {
    -webkit-box-sizing: border-box;
        box-sizing: border-box;
    box-sizing: border-box;
}
.c-article-card:not(:last-of-type) {
    border-bottom: 1px solid #d8d8d8;
        border-bottom-color: rgb(216, 216, 216);
        border-bottom-style: solid;
        border-bottom-width: 1px;
    margin-bottom: 20px;
}
.c-article-card {
    padding-bottom: 20px;
}
article, div, fieldset, figure, footer, h1, h2, h3, h4, header, html, iframe, img, p, section, video {
    margin: 0;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
    padding: 0;
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    border: 0;
        border-top-color: currentcolor;
        border-top-style: none;
        border-top-width: 0px;
        border-right-color: currentcolor;
        border-right-style: none;
        border-right-width: 0px;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: 0px;
        border-left-color: currentcolor;
        border-left-style: none;
        border-left-width: 0px;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-image-slice: 100%;
        border-image-source: none;
        border-image-width: 1;
}
* {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.c-article-info {
    font-size: 12px;
    line-height: 13px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
.c-article-card__info {
    color: #757575;
}
.l-hero-section__column:first-of-type, .l-hero-section__column:nth-of-type(3) {
    width: calc((100% - 40px)/4);
    margin-top: 0;
}
.l-hero-section__column:first-of-type, .l-hero-section__column:nth-of-type(2) {
    margin-right: 20px;
}
.l-hero-section__column:first-of-type, .l-hero-section__column:nth-of-type(2), .l-hero-section__column:nth-of-type(3) {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0;
}
.l-hero-section__column:first-of-type, .l-hero-section__column:nth-of-type(3) {
    margin-top: 20px;
}
.l-article-column {
    position: relative;
    margin-bottom: 20px;
}
.c-article-info__time {
    margin-right: 10px;
    white-space: nowrap;
}
article {
clear: both;
overflow: auto;
width: 100%;
margin-right: 10px;}
hgroup {
margin-top:40px;
padding-left: 10px;}
figure {
float: left;
width: 290px;
padding: 5px;
margin: 20px;
border: 1px solid #eeeeee;}
figcaption {
font-size: 90%;
text-align: left;}
p a{
    padding:8px; background-color: #eeeeee;
}
p a:hover{
    color: white;
    background-color: #66CC99;
    font-weight: bold;
}
</style>
<title>Complete Admission Application</title>




<div class="row">
    
    <br>
    <br>
    <br>
<article>
    <hgroup>
<h1 style="padding: 15px;"><b>ADMISSION APPLICATION</b></h1>

</hgroup>


<?php
$user_id=$_SESSION['applicant_id'];
$username=$_SESSION['applicant_name'];

$sql="SELECT * FROM admin WHERE id='$user_id'";
$result=mysql_query($sql);
$rows=mysql_fetch_assoc($result);





?>

<p style="padding: 10px;"><b>Welcome: <?php echo $username;   ?></b></p>
<div class="col-md-2">
    <p style="padding-left: 10px;">
    <a href="app_index.php">Personal Data</a><br><br>
    <a href="app2.php">Educational Information</a><br><br>
    <a href="app3.php">SSCE Examination</a> <br><br>
    <a href="app4.php">Proposed Course of Study</a> <br><br>
    <a href="app5.php">Employment Experience</a> <br><br>
    <a href="app6.php" class="btn-success">Extra Activities</a>
</p>
</div>
<div class="col-md-8" style="padding-left: 2%;">
   
                                       <form class="form-group" name="employment" method="POST" action="">
                                        <table width="90%" border="0" align="center">
                                                <tbody><tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr><td>List Extral Curricular Activities </td>
                                                    <td>
                                                        <textarea class="form-control" rows="5" cols="40" name="extrlcuract" placeholder="Please list Extral Curricular Activities in which you were engaged in school"><?php echo $rows['extrlcuract'];  ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr><td>List Accomplishment </td>
                                                    <td>
                                                        <textarea class="form-control" rows="5" cols="40" name="accomplish" placeholder="Please List your accomplishment and responsibilities in school if any"><?php echo $rows['accomplish'];  ?></textarea>
                                                    </td>
                                                </tr>
                                                
                                                <tr><td></td>
                                                    <td>
                                                        <input type="hidden" name="<?php echo $user_id; ?>"><br>
                                                    <input type="submit" class="btn btn-success" name="sub_accept" value="ACCEPT APPLICATION" class="textfield">
                                                
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </form>
                                           

<?php
if(isset($_POST['sub_accept'])){

$id=$_POST['id'];

  $sql2="UPDATE admin SET admissionstatus='accepted' WHERE id='$user_id' ";
  $result2=mysql_query($sql2);

  if($result2){
    echo "<script>alert('DONE!')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }else{
    echo "<script>alert('ERROR!')</script>";
  }
}


?>

   
    </div>

    


</article>




</div>











<?php
include('footer.php');
?>