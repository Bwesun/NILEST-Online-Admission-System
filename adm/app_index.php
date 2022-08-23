<?php
session_start();



if(!isset($_SESSION['admin_user'])){
    header("location:index.php");
}

$_SESSION['applicant_id']=$_GET['id'];

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
$user_id=$_GET['id'];
$_SESSION['applicant_id']=$user_id;
$user_id=$_SESSION['applicant_id'];
$username=$_SESSION['applicant_name'];



$sql="SELECT * FROM admin WHERE id='$user_id'";
$result=mysql_query($sql);
$rows=mysql_fetch_assoc($result);

$_SESSION['user_email']=$rows['email'];
$user_email=$_SESSION['user_email'];


echo $user_id;

?>

<p style="padding: 10px;"><b>Welcome: <?php echo $username;   ?></b></p>
<div class="col-md-2">
    <p style="padding-left: 10px;">
    <a href="app_index.php" class="btn-success">Personal Data</a><br><br>
    <a href="app2.php">Educational Information</a><br><br>
    <a href="app3.php">SSCE Examination</a> <br><br>
    <a href="app4.php">Proposed Course of Study</a> <br><br>
    <a href="app5.php">Employment Experience</a> <br><br>
    <a href="app6.php">Extra Activities</a><br><br>
</p>
</div>
<div class="col-md-8" style="padding-left: 2%;">
    <fieldset id="p1"><legend>Personal Data</legend>
        <form class="form-group" name="" method="post" action="" enctype="multipart/form-data">
                                        <table width="90%" border="0" align="center">
                                                <tbody>
                                                <tr style=""><td>Surname</td>
                                                    <td><input disabled class="form-control" type="text" id="sname" value="<?php echo $rows['surname'];  ?>" name="" placeholder="please enter you surname"></td>
                                                </tr>
                                                <tr><td>Firstname</td>
                                                    <td><input disabled class="form-control" type="text" id="fname" value="<?php echo $rows['firstname'];  ?>" name="" placeholder="please enter you firstname"></td>
                                                </tr>
                                                <tr><td>Gender</td>
                                                    <td>
                                                        <input type="text" disabled name="" class="form-control" value="<?php echo $rows['gender'];  ?>">
                                                    </td>
                                                </tr>
                                                <tr><td>Marital Status</td>
                                                    <td>
                                                        <input type="text" disabled value="<?php echo $rows['maritalstatus'];  ?>">
                                                    </td>
                                                </tr>
                                                <tr><td>Date of Birth</td>
                                                    <td>
                                                        <input class="form-control" type="text" disabled name="" value="<?php echo $rows['dob'];  ?>">
                                                    </td>
                                                </tr>
                                                <tr><td>Place of Birth</td>
                                                    <td><input class="form-control" type="pbirth" id="pbirth" value="<?php echo $rows['birthplace'];  ?>" name="birthplace" placeholder="provide place of birth"></td>
                                                </tr>
                                                <tr><td>E-mail</td>
                                                    <td><input disabled class="form-control" type="email" id="email" value="<?php echo $rows['email'];  ?>" name="" placeholder="provide email address"></td>
                                                </tr>
                                                <tr><td>Phone</td>
                                                    <td><input class="form-control" type="text" disabled id="phoneno" value="<?php echo $rows['phoneno'];  ?>" name="" placeholder="provide your mobile number"></td>
                                                </tr>
                                                <tr><td>Postal Address</td>
                                                    <td style="width:70%">
                                                        <textarea class="form-control" rows="5" cols="40" name="postaladdress" placeholder=" input your CURRENT addrees e.g. NO, STREET NAME, LOCATION, STATE, COUNTRY."><?php echo $rows['postaladdress'];  ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr><td>Permanent Address</td>
                                                    <td>
                                                        <textarea class="form-control" rows="5" cols="40" name="permanentaddress" placeholder=" input your HOME addrees e.g. NO, STREET NAME, LOCATION, STATE, COUNTRY."><?php echo $rows['permanentaddress'];  ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr><td>Local Government</td>
                                                    <td><input class="form-control" type="text" id="lga" value="<?php echo $rows['lga'];  ?>" name="lga" placeholder="provide your local government area"></td>
                                                </tr>
                                                <tr><td>State of Origin</td>
                                                    <td><input class="form-control" type="text" id="stateorigin" value="<?php echo $rows['stateorigin'];  ?>"  name="stateorigin" placeholder="provide your State of origin"></td>
                                                </tr>
                                                <tr><td>Nationality</td>
                                                    <td><input class="form-control" type="text" id="nationality" value="<?php echo $rows['nationality'];  ?>" name="nationality" placeholder="what is your nationality"></td>
                                                </tr>
                                                <tr><td>Disability</td>
                                                    <td>Yes<input value="No" type="radio" id="radio" name="disability">
                                                    No<input value="No" type="radio" id="radio" name="disability"></td>
                                                </tr>
                                                <tr><td></td>
                                                    <td>
                                                        <textarea class="form-control" rows="5" cols="40" name="specdisability" placeholder="If yes, state nature of disability"><?php echo $rows['specdisability'];  ?></textarea>
                                                    </td>
                                                </tr>
                                              
                                        </tbody></table>
                    
                                </form>
    </fieldset>


    </div>

    


</article>




</div>











<?php
include('footer.php');
?>