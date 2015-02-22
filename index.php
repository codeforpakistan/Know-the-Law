<?php include("includes/db_connection.php"); ?>
<?php include("includes/functions.php"); ?>
<html>
<head><meta charset="utf-8">
    <title>Know The Law</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
	
</head>
<body>
<br><br><br><br>
<div class="row"><!--row for slider start-->
<div class="col-md-offset-2">
<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 0,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 4,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 1600,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 140,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 7,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px; height: 100px; overflow: hidden;">
            <div><img u="image" alt="amazon" src="img/logo/child.jpg" /></div>
            <div><img u="image" alt="android" src="img/logo/human.jpg" /></div>
            <div><img u="image" alt="bitly" src="img/logo/traffic.png" /></div>
            <div><img u="image" alt="blogger" src="img/logo/consumers.png" /></div>
            <div><img u="image" alt="dnn" src="img/logo/crimelaw.jpg" /></div>
            <div><img u="image" alt="drupal" src="img/logo/women.png" /></div>
            <div><img u="image" alt="ebay" src="img/logo/labour.jpg" /></div>
            <div><img u="image" alt="facebook" src="img/logo/logo.png" /></div>
            <div><img u="image" alt="google" src="img/logo/education.jpg" /></div>
            <div><img u="image" alt="ibm" src="img/logo/justice.jpg" /></div>
			 <div><img u="image" alt="amazon" src="img/logo/child.jpg" /></div>
            <div><img u="image" alt="android" src="img/logo/human.jpg" /></div>
            <div><img u="image" alt="bitly" src="img/logo/traffic.png" /></div>
            <div><img u="image" alt="blogger" src="img/logo/consumers.png" /></div>
            <div><img u="image" alt="dnn" src="img/logo/crimelaw.jpg" /></div>
            <div><img u="image" alt="drupal" src="img/logo/women.png" /></div>
            <div><img u="image" alt="ebay" src="img/logo/labour.jpg" /></div>
            <div><img u="image" alt="facebook" src="img/logo/logo.png" /></div>
            <div><img u="image" alt="google" src="img/logo/education.jpg" /></div>
            <div><img u="image" alt="ibm" src="img/logo/justice.jpg" /></div>
           
        </div>
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
    <!-- Jssor Slider End -->
	</div><!--columns scenario end-->
</div><!-- row for slider end -->

<!--row for Logo start-->
<div class="row">
<p align="center">
<img src="img/logo.png"/>
</p>
</div>
<!-- row for Logo End-->

<!-- row for search start-->
<div class="row">
<div class="col-lg-6 col-lg-offset-3">
<p align="center">
<form method="post" action="index.php?law=law">
<input type="text" name="title" class="form-control" placeholder="e.g Child Labour" required/>
</p>
</div><!-- columns div close search-->
</div>
<!-- row for search end-->

<!-- row for select start-->
<div class="row">
<div class="col-lg-4 col-lg-offset-4">
<p align="center">
<br />
<select name="law_id" class="selectpicker" style="background-color:#7ED5F5; border:#CCCCCC; font-size:25px; font">
  <?php $law_set=all_laws();?>
  <option value="23">---</option>
  <?php while($row=mysqli_fetch_assoc($law_set)){
  $law_id=$row['id'];
  $name=$row['Name'];
  ?>
  
  <option value="<?php echo $law_id; ?>"><?php echo $name; ?></option>
  <?php } ?>

</select>
</p>

</div><!-- columns div select End-->
</div>
<!-- row for select end-->
<div class="row"> <!-- Row for search button start-->

<br />
<p align="center">
<input type="submit" name="submit" value="Search Law" class="btn btn-danger btn-lg"/>
</p>	
</form>
</div> <!-- Row for search button End-->

<div class="row"><!-- Row for show stats button-->

<br/>

<form method="post" action="index.php?stats=stats">
<p align="center">
<input type="submit" name="submit" value="View  Stats" class="btn btn-success btn-lg"/>
</p>
</form>

</div><!-- row stats button end -->
<!--Show OutPut-->


<?php if(isset($_GET['stats'])){ ?>
<!--bar to show stats-->
<div class="row">
    <div class="box col-md-4 col-md-offset-1">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-tasks"></i> Total Available Laws</h2>

                
            </div>
            <div class="box-content">
 

                <h4>Children Laws</h4>

                <div class="progress progress-striped progress-danger active">
                    <div class="progress-bar" style="width: 50%;"> 50% </div>
                </div>
				 <h4>Crime Laws</h4>

                <div class="progress progress-striped progress-success active">
                    <div class="progress-bar" style="width: 50%;"></div>
                </div>
                <h4>Civil Laws</h4>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span>
                    </div>
                </div>
				<h4>Consumer Laws</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
				<h4>Crime Sentences</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                         aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (warning)</span>
                    </div>
                </div>
				<h4>Govt. Services Laws</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete (danger)</span>
                    </div>
                </div>
						<h4>Human Right Laws</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
				<!-- 
				<h4>Labour Laws</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
				<h4>Offences</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
				<h4>Traffic Laws</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
				<h4>Woman Laws</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
				<h4>Others</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                    </div>
                </div>
				-->
            </div>
        </div>
    </div>
    <!--/span-->


    <div class="box col-md-3">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list-alt"></i> Search Statistics</h2>

            </div>
            <div class="box-content">
<!--                 <div id="realtimechart" style="height:190px;"></div> -->
		<div><img src="img/check1.jpg" /></div>
                <p>The above chart shows yearly search statistics of each category by user at <b>Know the Law</b>. 
                    </p>

                <p>Throug this stat we can clearly determine the current most searched law.</p>
            </div>
        </div>
    </div>



    <div class="box col-md-3">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-list-alt"></i> User Requested Law</h2>

              
            </div>
            <div class="box-content">
			<div> <img src="img/graph2 copy.jpg" width="340" height="360"/></div>
           <!--      <div id="realtimechart" style="height:190px;"></div> -->
                <p>This graph shows the missing laws earlier in this application searched by the users, which were not available but after a certain time we have updated according to the user search.</p>

                <p></p>
            </div>
        </div>
    </div>







</div>
<!-- -->


 <?php } 
 
if(isset($_GET['law'])&& ($_POST['law_id']!='')){
 $id=$_POST['law_id'];
 $title=$_POST['title'];
//logic start Hint for logic
/* 
1. Civil Laws
2. Govt Services Law
3. Consumer Laws
4. Offences
5. Crime Laws
6. Labour Laws
7. Traffic Laws
8. Women Laws
9. Crime Sentences
10. Children Laws
11. Other
12. Human Right Laws
*/

if($id==1){
$result_set_law=find_civil_law_by_name($title);

}else if($id==2){
$result_set_law=find_govt_services_law($title);

}else if($id==3){
$result_set_law=find_consumer_law($title);

}else if($id==4){
$result_set_law=find_offences_law($title);

}else if($id==5){
$result_set_law=find_crime_law($title);

}else if($id==6){
$result_set_law=find_labour_law($title);

}else if($id==7){
$result_set_law=find_traffic_law($title);

}else if($id==8){
$result_set_law=find_woman_law($title);

}else if($id==9){
$result_set_law=find_crime_sentences_law($title);

}else if($id==10){
$result_set_law=find_children_law($title);

}else if($id==11){
$result_set_law=find_other_law($title);

}else if($id==12){
$result_set_law=find_human_right_law($title);
$found=1;
}else if($id==23){
return;
}
if (mysqli_num_rows($result_set_law)!=0) { 
while($result=mysqli_fetch_assoc($result_set_law)){
$title=$result['title'];
$description=$result['description'];
?>






<!-- area to show result -->


<br/>

<div class="row">
    <div class="box col-md-6 col-md-offset-3">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class=" glyphicon glyphicon-ok-circle"></i> <?php echo $title; ?>.</h2>
            <div class="box-content row">
                <div class="col-lg-12 col-md-12">
                    <h1>
                        <small><?php echo $description; ?></small>
                    </h1>
                  
                </div>
				
            </div>
        </div>
    </div>
</div>

<!-- area to show founded record-->





<?php } //while end
} else {// blank $result_set_law check condition
?>

 <div class="box col-md-6 col-md-offset-3">
 <br />
<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Sorry!</strong> No such record found,.
                </div>
 </div>
<?php 	
}
?>

<?php 

}
?>

<!--Show OutPut-->













    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>