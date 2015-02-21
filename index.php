<?php include("includes/db_connection.php"); ?>
<?php include("includes/functions.php"); ?>
<html>
<head><meta charset="utf-8">
    <title>My Lawyer My Way</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
</head>
<body>
<!--row for Logo start-->

<p align="center">
<img src="img/logo.png" align="middle"/>
</p>
<!-- row for Logo End-->

<!-- row for search start-->
<div class="row">
<div class="col-lg-6 col-lg-offset-3">
<input type="text" name="title" class="form-control" placeholder="Child Labour" required/>
</div><!-- columns div close search-->
</div>
<!-- row for search end-->

<!-- row for select start-->
<div class="row">
<div class="col-lg-4 col-lg-offset-5">
<br />
<select name="law_id" class="selectpicker">
  <?php $law_set=all_laws();?>
  <?php while($row=mysqli_fetch_assoc($law_set)){
  $law_id=$row['id'];
  $name=$row['Name'];
  ?>
  
  <option value="<?php echo $law_id; ?>"><?php echo $name; ?></option>
  <?php } ?>
 </td>
</select>

</div><!-- columns div select End-->
</div>
<!-- row for select end-->
<div class="row"> <!-- Row for search button start-->
<div class="col-lg-4 col-lg-offset-5">
<br />
<input type="submit" name="submit" value="search" class="btn btn-success btn-lg"/>
</div><!-- col end for button-->
</div> <!-- Row for search button End-->


    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>