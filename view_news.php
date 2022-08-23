<?php
session_start();

include('connect.php');

include('head.php');

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
<title>News</title>




<div class="row">
    <div class="col-md-3">
        <br>
        <br>
        <br>
        <br>
        
        <fieldset>

    <legend>Other News Links</legend>

<?php
include ('connect.php');


$id=$_GET['id'];

$sql="SELECT * FROM topics WHERE id!='$id' AND priority='latest' ORDER BY id DESC ";
$result=mysql_query($sql);

while($rows=mysql_fetch_assoc($result)){



?>
<article class="c-article-card l-hero-section__item">
  
  <a href="view_news.php?id=<?php echo $rows['id'];  ?>" class="c-article-card__headline">
    <span class="c-article-card__headline-hover-inner"><?php echo $rows['topic'];  ?></span>
  </a>
<div class="c-article-info c-article-card__info fadeInDown">
    <i class="fas fa-clock"></i>
    <time class="c-article-info__time  c-article-info__time--clock">
        <?php
        $post_time=$rows['time'];
        $time=date("h:i A");
        $post_date=$rows['date'];
        $current_date=date("y/m/d");

        if($current_date==$post_date){
            echo "Today, ".$post_time;
        }elseif($current_date>$post_date){
            $display_date=$current_date-$post_date;
            if($display_date==0){ 
                echo "Yesterday, ".$post_time;
            }elseif($display_date>0){
                echo $display_date." day(s) ago";
            }
            }
        

        ?>
         </time>  

            <span class="c-article-info__views">  <i class="fas fa-eye"></i>  
      <?php echo $rows['view'];  ?>   Views   </span>
    
    </div>
</article>
<?php
}
?>
</fieldset>
       
    </div>




    <div class="col-md-9" style="height: 800px; overflow-y: auto; ">
        <table width="991" align="center" cellpadding="0" cellspacing="0">
                
            
            <tr>
                <td align="center"><br /><br />
                        <table width="979" cellspacing="10" cellpadding="0">
                  <tr>
                    <td width="710" align="left" valign="top">
                        <div align="left">
                              <p align="justify"><br><br>

                              
<fieldset>
<?php

$sql6="SELECT * FROM topics WHERE id='$id' ";
$result6=mysql_query($sql6);

$rows=mysql_fetch_assoc($result6);

    ?>
    <legend><?php echo $rows['topic'];  ?></legend>


   
   <div class="container">
       <div class="c-article-info c-article-card__info fadeInDown">
    <h4><i class="fas fa-clock"></i>
    <time class="c-article-info__time  c-article-info__time--clock">
        <?php
        $post_time=$rows['time'];
        $time=date("h:i A");
        $post_date=$rows['date'];
        $current_date=date("y/m/d");

        if($current_date==$post_date){
            echo "Today, ".$post_time;
        }elseif($current_date>$post_date){
            $display_date=$current_date-$post_date;
            if($display_date==0){ 
                echo "Yesterday, ".$post_time;
            }elseif($display_date>0){
                echo $display_date." day(s) ago";
            }
            }
        

        ?>
         </time>  

            <span class="c-article-info__views">  <i class="fas fa-eye"></i>  
      <?php echo $rows['view'];  ?>   Views   </span>
    


    <?php
$view_count=$rows['view'];

$view=$view_count+1;

$sql2="UPDATE topics SET view=$view WHERE id=$id ";
$result2=mysql_query($sql2);
    ?>
    </div></h4>
   </div>
   <img src="images/<?php echo $rows['pic'];  ?>" width="700" class="img-responsive">
<br>
   <div style="width: 900px; ">
            <h4><?php echo $rows['description'];  ?></h4>
   </div>
    
</fieldset>











                              </p>
                          </div>
                                    <br /></td>
                  </tr>
                        </table>

                </td>
        </tr>
    </table>
    </div>
    

  


</div>











<?php
include('footer.php');
?>