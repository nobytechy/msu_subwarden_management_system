<?php require_once'head.php';
require_once"inc/db.php";
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12" style="background-color:#06C;border-bottom: 5px solid #FF0">
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
					<h4 class="navbar-brand"><strong><?php $_SESSION['username']=""; echo strtoupper($_SESSION['username']);  ?> You Are Welcome</strong></h4><br>
             <a href="warden.php">Return</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right" style="margin-right: 8px">
						
						<li><h3>Sub warden Information Center</h3></li>
						<li></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
</div>
</div>



<div class="row bg-info" style="border:2px solid #06C;">
	<div class="col-sm-12">
<h4 class="text-center" style="background-color:#06C;color: #FFF;padding: 5px">Reports from Students</h4>
<table class="table" style="border:1px solid #CCC">
<tr>
<td><strong>Registration number</strong></td>
<td><strong>Subject</strong></td>
<td><strong>Message</strong></td>
<td><strong>Time</strong></td>



</tr>
<?php
		$num=0;
		$result = $pdo->prepare("SELECT * FROM warden_reports ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			$num++;
			if ($num==11){
			break;	
			}
	?>
   
<tr style="border-bottom: 1px solid #000">
<td><?php echo $row['regnumber']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['time']; ?></td>
</tr> 
 <?php
		}
	?> 
</table>
</div>


<div class="col-sm-12" style="border-top: 3px solid #FF0"><?php require_once'footer.php';?></div>
</div>
</div>
</body>
</html>