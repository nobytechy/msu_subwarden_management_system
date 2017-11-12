<?php require_once"head.php";?>
<?php require_once'data.php';?>
<?php require_once'inc/db.php';
//2 this insert replies into law0 table
$_SESSION="";
$name=$message=$nameErr = $message = "";



 $time=time();
 $current_date = date("F j,Y,g:i a",$time); 
   if(isset($_POST['room']))  
   {
  
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $message= trim(filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS));

  
 if (empty($name)) {
   $nameErr="<strong>Sorry!!! </strong>"."you need to enter a username";
 }
 else if (empty($message)) {
    $messageErr='<script>alert ("Enter message please");</script>';
 }
else{
 $pdoQuery = "INSERT INTO `common`(`name`,`message`)
  VALUES (:name,:message)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (
    ":name"=>$name,
   ":message"=>$message
 
  ))
   ;
    if ($pdoExec)
  { 
  echo'<script>alert ("posted successfully");</script>'; 
} else
   { echo'<script>alert ("sorry poor network");</script>';  
   }
    
}
}
//2 code end here
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body id="tops">
<div class="container">
<div class="row">
<div class="col-sm-12" style="background-color:#06C;border-bottom: 5px solid #FFF">
<nav class="navbar navbar-default" role="navigation" style="border-radius: 0;">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h4 class="navbar-brand" style="color:#06C"><strong> <img src="images/loader2.gif">Student Online Common Room<img src="images/loader2.gif"></strong>
						</h4>

				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a style="color:#06C" href="student.php"><span  style="font-size: 18px;color:#09F" class="glyphicon glyphicon-home"></span> Student Panel</a></li>
						<li><a style="color:#06C" href="#open"><span id="vww" style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Notifications</a></li>
						<li><a style="color:#06C"  href="#report"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Report to Sub-Warden</a></li>
						<li><a style="color: #06C" href="$log@out.php"><strong> LOGOUT NOW <img style="margin-right: 5px" src="images/logout.png" width="45" height="45"></strong></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
</div>
</div>
<div class="row">
<div class="col-sm-4" style="border-left:3px solid #06C">
	<h3 class="text-center" style="color: #FFF">Message Center</h3>
	<p class="text-center  text-success"><strong> <?php echo "$response";?></strong></p>
<form action="" method="post">
 <div class="form-group">
 	 <div class="text-danger"> <?php echo "$nameErr";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-user"></span>    <label style="color: #06F"  for="inputname">First Name</label></span>
            <input type="text" name="name" class="form-control" id="inputname" placeholder="Brighton"   pattern="^[A-Za-z]+">
        </div>

  <div class="form-group">
			 <div class="text-danger"> <?php echo "$messageErr";?></div>
 <span style="color: #06F" class="glyphicon glyphicon-comment"></span></span>  <label style="color: #06F" for="inputinfo">Messages</label> 
           <textarea name="message" class="form-control" id="inputinfo">
		   </textarea>
        </div>
  <button type="submit" name="room"  class="btn btn-info"><span style="color:#FFF">Post Now</span></button>            
</form>

</div>

<div class="col-sm-6 bg-info"><h3 style="color:#FFF;background-color:#06C;padding: 5px;
border-radius: 5px">Messages</h3>
<?php 
$num=0;
		$result = $pdo->prepare("SELECT * FROM common ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			$num++;
			if ($num==5){
			break;	
			}
	?>

<div class="alert alert-success" role="alert">
<p  style="color:#f00"><span style="color:#f00"
 class="glyphicon glyphicon-user"></span> <?php echo strtoupper($row['name']); ?></p>

<p><span style="color:#f00"
 class="glyphicon glyphicon-time"></span> <?php echo date("F j,Y - g:i a",strtotime($row['time'])); ?></p>
<hr>
<p style="font-weight:bold;color:#000"><?php echo strtolower($row['message']); ?> <span style="color:#000"
 class="glyphicon glyphicon-thumbs-up"></span> </p> 
 </div>
 <?php
		}
	?> 
</div>



<div class="col-sm-2" style="background-color:#06C;"><strong>
	<span style="background-color:#FF0;color:#06C">Most Active Members</span></strong><br>
	
	<?php 
$num=0;
		$result = $pdo->prepare("SELECT * FROM common ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			$num++;
			if ($num==11){
			break;	
			}
	?>


<span style="color:#FFF" class="glyphicon glyphicon-user"> <?php echo strtoupper($row['name']); ?></span><br><hr>
 <?php
		}
	?>


</div>

</div>

<div class="row" style="border-top: 3px solid #06C">
<div class="col-sm-3"><h4 class="text-center"><a style="color:#FFF" href="#open"><span id="vww" style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Notifications</a></h4></div>
<div class="col-sm-3"><h4 class="text-center"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span><a style="color:#FFF" href="common.php"> Join Common Room</a></h4></div>
<div class="col-sm-3"><h4 class="text-center"><a style="color:#FFF"  href="#report"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Report to Sub-Warden </a></h4></div>
<div class="col-sm-3"><h4 class="text-center"><a style="color:#FFF" href="$log@out.php"> LOGOUT NOW <img style="margin-right: 5px" src="images/logout.png" width="45" height="45"></a></h4></div>

</div>

<div class="row">
<div class="col-sm-12" style="border-top: 3px solid #FFF">
<?php require_once'footer.php';?>
</div>
</div>


</div>
</body>
</html>