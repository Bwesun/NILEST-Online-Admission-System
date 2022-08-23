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
    <a href="app4.php" class="btn-success">Proposed Course of Study</a> <br><br>
    <a href="app5.php">Employment Experience</a> <br><br>
    <a href="app6.php">Extra Activities</a>
</p>
</div>
<div class="col-md-8" style="padding-left: 2%;">
   
                                        
                                            <form  class="form-group" name="Propsedcourse" method="post" action="">
                                                <table width="90%" border="0" align="center">
                                                <tbody>
                                                    <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr><td>Select Course</td>
                                                    <td>
                                                        <select  class="form-control" name="course">
                                                            
                                                            <option selected="course">HNDLT</option>
                                                            <option selected="course">HNDSLT</option>
                                                            <option selected="course">HNDCHEM</option>
                                                            <option selected="course">BIOCHEM</option>
                                                            <option selected="course">CHEM OPTION</option>
                                                            <option selected="course">MICROBIOLOGY OPTION</option>
                                                            <option selected="course">HNDPLT</option>
                                                            <option selected="course">HNDSC</option>
                                                            <option selected="course">NDLT</option>
                                                            <option selected="course">NDSLT</option>
                                                            <option selected="course">NDPLT</option>
                                                            <option selected="course">NDCS</option>
                                                            <option selected="course">DPM</option>
                                                            <option selected="course">DFT</option>
                                                            <option selected="course">DICPT</option>
                                                            <option selected="course">DLPT</option>
                                                            <option selected="course">DFM</option>
                                                            <option selected="course">DPM</option>
                                                            <option selected="course">DFT</option>
                                                            <option selected="course">DICPT</option>
                                                            <option selected="course">DLPT</option>
                                                            <option selected="course">DFM</option>
                                                            <option selected="course">ACH &amp; SI</option>
                                                            <option selected="course">ACFM</option>
                                                            <option selected="course">ACLM</option>
                                                            <option selected="course">CLM</option>
                                                            <option selected="course">CFM</option>
                                                            <option selected="course">CH &amp; SI</option>
                                                            <option selected="course">CCS</option>
                                                            <option selected="course">CPPT</option>
                                                            <option selected="course">CSLT</option>
                                                            <option selected="<?php echo $rows['course'];  ?>"><?php echo $rows['course'];  ?></option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr><td>Have you ever enrolled as a student in the school?</td>
                                                    <td>Yes<input type="radio" id="radio" name="everenrol">
                                                    No<input type="radio" id="radio" name="everenrol"></td>
                                                </tr>
                                                <tr><td></td>
                                                    <td>
                                                        <textarea class="form-control" rows="3" cols="40" name="everenrolduration" placeholder="If yes, indicate duration"><?php echo $rows['everenrolduration'];  ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr><td>Proposed Career </td>
                                                    <td><input value="<?php echo $rows['career'];  ?>" class="form-control" type="text" name="career" placeholder="Proposed Career on completion of the course"></td>
                                                </tr>
                                                
                                                <tr><td></td>
                                                    <td>
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