<?php require_once'head.php';
require_once'data.php'; 
require_once'inc/info.php';
if (!isset($_SESSION['regnumber'])) {
  echo "<script>window.location=('index.php')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body id="ward">
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
					<h4 class="navbar-brand"><strong>Sub Warden Panel</strong></h4><br>

				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a style="color:#06C" href="#student"><span id="vww" style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Send Notifications</a></li>
						<li><a style="color:#06C" href="reports1.php"><span  style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Students Reports</a></li>
						<li><a style="color:#06C"  href="chat.php"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Sub Warden Chat-Room</a></li>
						<li><a style="color:#06C"  href="#warden"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Report to Warden</a></li>
						<li><a style="color: #06C" href="$log@out.php"><strong> LOGOUT NOW <img style="margin-right: 5px" src="images/logout.png" width="45" height="45"></strong></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>


<div class="row">
<div class="col-sm-12 bg-info" style="height: 500px;border-top: 5px solid #FF0">
<div class="col-sm-8"><div class="thumbnail text-center"><img src="images/slide3.jpg" alt="student at school" title="Warden" class="img-responsive" style="margin-top: 5px"><marquee scrolldelay="300"><strong><span style="color:#06C">Our Hands,Our Minds,Our Destiny</span></strong></marquee></div>

</div>
<div class="col-sm-4">
<center><img src="images/nopicture.jpg" alt="Director of Residence" title="Director" width="65" height="85" class="img-responsive"><strong><span style="color:#06C">Director of Residence</span></strong></center>


<h3 class="text-center">Sub Warden</h3>
<p class="text-justify">They are elected. It is a governing body of students who manage portfolios such as, Entertainment, Security, Academic Affairs, etc.Together with the warden and sub wardens are responsible for programmes and services within Student Residences. </p>
<p class="text-justify">University life is not all work and no play, you will find that your role will be to arrange sporting and social events throughout the semester and these give you an opportunity to get to know people.</p>
<p><strong>Examples</strong></p>
<ul>
	<li>Dinner with an invited guest</li>
	<li>Braai parties </li>
	<li>etc</li>
</ul>	

</div>

<div class="row">
<div class="col-sm-12">
<?php require_once'footer.php';?>
</div>
</div>

</div>
</div>
</div>





</div>
</div>

</body>
</html>