<?php require_once"head.php";?>
<?php require_once'data.php';?>
<?php require_once'inc/db.php';?>
<?php
//this inserts chats to sub warden room
$name=$message=$nameErr = $message = "";
 $time=time();
 $current_date = date("F j,Y,g:i a",$time); 
   if(isset($_POST['chat']))  
   {
  
    $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $mess= trim(filter_input(INPUT_POST,"mess",FILTER_SANITIZE_SPECIAL_CHARS));

  
 if (empty($name)) {
   $nameErr='<script>alert ("Please make sure you enter your name");</script>';
 }
 else if (empty($mess)) {
    $messageErr='<script>alert ("Please enter your message to post here");</script>';
 }
else{
 $pdoQuery = "INSERT INTO `common2`(`name`,`message`)
  VALUES (:name,:mess)"; 
  $pdoResult = $pdo->prepare($pdoQuery);
   $pdoExec = $pdoResult->execute
   (array
   (
    ":name"=>$name,
   ":mess"=>$mess
 
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
// code end here
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
					<h4 class="navbar-brand" style="color:#06C"><strong> <img src="images/loader2.gif">
						Sub Warden Chat-Room<img src="images/loader2.gif"></strong>
						</h4>

				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a style="color:#06C" href="#student"><span id="vww" style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Send Notifications</a></li>
						<li><a style="color:#06C" href="reports1.php"><span  style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Students Reports</a></li>
						<li><a style="color:#06C"  href="#warden"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Report to Warden</a></li>
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
<form action="" method="post">
 <div class="form-group">
 	<?php echo $nameErr;?>
        <span style="color: #06F" class="glyphicon glyphicon-user"></span>    <label style="color: #06F"  for="inputname">First Name</label></span>
            <input type="text" name="name" class="form-control" id="inputname" placeholder="Brighton"   pattern="^[A-Za-z]+">
        </div>

   <div class="form-group">
   	<?php echo $messageErr;?>
 <span style="color: #06F" class="glyphicon glyphicon-comment"></span></span>  <label style="color: #06F" for="inputinfo">Enter Message Below</label> 
           <textarea name="mess" class="form-control" id="inputinfo">
		   </textarea>
        </div> 
  <button type="submit" name="chat"  class="btn btn-info"><span style="color:#FFF">Post Now</span></button>            
</form>
<a style="color:#FFF" href=""><h5>All System Issues Please Contact Admin Now</h5></a>
<center><img src="images/moto.gif"></center>
</div>

<div class="col-sm-6 bg-info" style="height: 500px;" ><h3 style="color:#FFF;background-color:#06C;padding: 5px;border-radius: 5px">Messages</h3>
<?php 
$num=0;
		$result = $pdo->prepare("SELECT * FROM common2 ORDER BY id DESC");
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



<div class="col-sm-2" style="height: 500px;background-color:#06C" ><span style="background-color:#FF0;color:#06C">Most Active Sub Wardens</span></strong><br>
	
	<?php 
$num=0;
		$result = $pdo->prepare("SELECT * FROM common2 ORDER BY id DESC");
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
<div class="col-sm-3"><h4 class="text-center"><a style="color:#FFF" href="#student"><span id="vww" style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Notifications</a></h4></div>
<div class="col-sm-3"></div>
<div class="col-sm-3"><h4 class="text-center"><a style="color:#FFF"  href="#warden"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Sub-Warden Chatroom </a></h4></div>
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