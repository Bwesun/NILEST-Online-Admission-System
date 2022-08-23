<?php
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
</style>
<title>View Admission</title>




<div class="row">
    
    <br>
    <br>
    <br>
<?php
$email=$_GET['id'];

$sql="SELECT * FROM admin WHERE email='$email' ";
        $result=mysql_query($sql);

        $rows=mysql_fetch_assoc($result);

        

?>
<article>
    <hgroup>
<h1 style="padding: 15px;"></h1>
</hgroup>

<div class="col-md-4" style="padding-left: 10%;">
    <div class="container">
    <fieldset><legend><b><?php echo $rows['surname']." ".$rows['firstname']; ?></b></legend>
        <table class="table table-striped">
            <tr>
                <td colspan="2" align="center"><img src="images/<?php echo $rows['upload']; ?>" width="100"></td>
            </tr>
            <tr>
                <td><b>Name: </b><?php echo $rows['surname']." ".$rows['firstname']; ?></td>
                <td><b>Phone Number:</b> <?php echo $rows['phoneno']; ?></td>
            </tr>
            <tr>
                <td><b>Course: </b><?php echo $rows['course']; ?></td>
                <td><b>Marital Status:</b> <?php echo $rows['maritalstatus']; ?></td>
            </tr>
            <tr>
                <td><b>Gender: </b><?php echo $rows['gender']; ?></td>
                <td><b>E-Mail: </b><?php echo $rows['email']; ?></td>
            </tr>
            <tr>
                <td><b>State of Origin: </b><?php echo $rows['stateorigin']; ?></td>
                <td><b>Local Govt. Area: </b><?php echo $rows['lga']; ?></td>
            </tr>
            <tr>
               <td colspan="2" align="center"> <a href="" onclick="window.print()" class="btn btn-info">Print</a></td>
            </tr>
        </table>
    </fieldset>
</div>
    </div>


</article>

<?php
include('connect.php');

if(isset($_POST['sub'])){
    $email=$_POST['email'];

    if($email==''){
        echo "<script>alert('Please, enter your Application E-mail!');</script>";
    }else{
        $sql="SELECT * FROM admin WHERE email='$email' ";
        $result=mysql_query($sql);

        $rows=mysql_fetch_assoc($result);

        if($result){
            echo "<script>window.open('details.php?id=".$email."');</script>";
            ?>
            <!-- Table of Details to view if application number is correct!-->
            



<?php
        }else{
            echo "<script>alert('Incorrect Application Number!');</script>";
        }
    }

}

?>


</div>











<?php
include('footer.php');
?>