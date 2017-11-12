<?php 
session_start();
require_once'head.php';
require_once'inc/info.php';
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

				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						
						<li><a style="color:#06C"  href="chat.php"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Join Sub Wardens</a></li>
						<li><a style="color:#06C"  href="reports.php"><span style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> View Reports</a></li>
						<li><a style="color:#06C"  href="reports.php"><span style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> View Applications</a></li>
						<li><a style="color: #06C" href="logout.php"><strong> LOGOUT NOW <img style="margin-right: 5px" src="images/logout.png" width="45" height="45"></strong></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
</div>
</div>


<div class="row bg-info">
<div class="col-sm-12">
	<div class="col-sm-4">
	<h3 class="text-left">Warden</h3>
	<img class="img-responsive" src="images/avatar.png" width="65" height="55" style="border-radius: 60%">
	<p class="text-justify"><strong>MISSION</strong> To provide a quality living and learning environment which fosters the diverse intellectual, social and personal development of students, To provide social, educational programmes and services.</p>
	<hr style="border:1px dotted #FF0">
    <p>Each Location has a warden. His/Her major functions are:</p>
    <ul class="text-justify">
   <li> To advise and counsel students in their respective locations.</li>
    <li>To ensure that academic and social needs and interests of students are catered for.</li>
    <li>To make residences on and off-campus comfortable.</li>
    <li>To ensure that rules and regulations are served on and off-campus as well as dealing with offenders.</li>
    </ul>
<center><img src="images/moto.gif" alt="Warden" title="Warden" class="img-responsive"></center>

	</div>
	<div class="col-sm-8" style="padding-bottom: 8px">

	<h3 class="text-center">Appoint Sub Wardens</h3>
	<div class="text-success"> <?php echo "$success1";?></div>
	<div class="text-danger"> <?php echo "$match1";?></div>	
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	 <div class="form-group">
        <span style="color: #06F" class="glyphicon glyphicon-user"></span>    <label style="color: #06F"  for="inputname">First Name</label>
 <div class="text-danger"> <?php echo "$nameErr1";?></div>
            <input type="text" name="name" class="form-control" id="inputname" placeholder="Brighton"   pattern="^[A-Za-z]+">
        </div>
		<div class="form-group">
        <span style="color: #06F" class="glyphicon glyphicon-user"></span></span>    <label style="color: #06F" for="inputsurname">Last Name</label>
         <div class="text-danger"> <?php echo "$surnameErr1";?></div>
            <input type="text" name="surname" class="form-control" id="inputsurname" placeholder="Code" pattern="^[A-Za-z]+">
        </div>
        
        <div class="form-group">
        <span style="color: #06F" class="glyphicon glyphicon-user"></span>    <label style="color: #06F"  for="inputname">Reg Number</label>
         <div class="text-danger"> <?php echo "$regErr1";?></div>
            <input type="text" name="regnumber" class="form-control" id="inputname" placeholder="R131435B" 
            pattern="[R-r]{1}[0-9]{6}[A-Za-z]{1}" title="Please enter correct MSU regnumber">
        </div>
		<div class="form-group">	
        <span style="color: #06F" class="glyphicon glyphicon-lock"></span></span>    <label style="color: #06F" for="inputsurname">Create Password</label>
         <div class="text-danger"> <?php echo "$pass1Err1";?></div>
            <input type="password" name="password1" class="form-control" id="inputsurname" placeholder="******" >
        </div>
        <div class="form-group">
<span style="color: #06F" class="glyphicon glyphicon-lock"></span></span>    <label style="color: #06F" for="inputsurname">Confirm Password</label>
 <div class="text-danger"> <?php echo "$passErr1";?></div>
            <input type="password" name="password" class="form-control" id="inputsurname" placeholder="*******">
        </div>
        
        <div class="form-group">
       	<div class="text-danger"> <?php echo "$locationErr1";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-map-marker"></span></span>   <label style="color: #06F" for="inputlocation">Select Location</label>
            <select name="location" class="form-control" id="inputlocation">
            	<option></option>
           <option class="form-control" name="location">Senga</option>
           <option class="form-control" name="location">Nehosho</option>
            <option class="form-control" name="location">Kopje</option>
           <option class="form-control" name="location">Windsor</option>
            <option class="form-control" name="location">KMP Houses</option>
           <option class="form-control" name="location">Mkoba</option>
            <option class="form-control" name="location">Mambo</option>
           <option class="form-control" name="location">Ascot</option>
            <option class="form-control" name="location">Ridgemont</option>
            <option class="form-control" name="location">Mtapa</option>
           <option class="form-control" name="location">Dalesfort</option>
            </select>
        </div>
		<div class="form-group">
        <span style="color: #06F" class="glyphicon glyphicon-phone"></span></span>    <label style="color: #06F" for="inputphone">Cell Number</label>
         <div class="text-danger"> <?php echo "$phoneErr1";?></div>
            <input type="tel" name="phone" minlength="10" maxlength="10" class="form-control" id="inputphone" placeholder="+263 716 605 802"  pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{3}[0-9]{3}">
       
	   </div>
		<div class="form-group">
        <span style="color: #06F" class="glyphicon glyphicon-envelope"></span></span>    <label style="color: #06F" for="inputEmail">Email </label>
         <div class="text-danger"> <?php echo "$emailErr1";?></div>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" >
        </div>
		
        <button type="submit" name="sub"  class="btn btn-info"><span style="color:#FFF">Verify Now</span></button>

    </form>

</div>

<div class="row" style="border-top: 3px solid #06C">
<div class="col-sm-3"></div>
<div class="col-sm-3"><h4 class="text-center"><a style="color:#06C"  href="chat.php"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Join Sub Wardens</a></h4></div>
<div class="col-sm-3"><h4 class="text-center"><a style="color:#06C"  href="reports.php"><span style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> View Reports</a></h4></div>
<div class="col-sm-3"><h4 class="text-center"><a style="color:#06C" href="$log@out.php"> LOGOUT NOW <img style="margin-right: 5px" src="images/logout.png" width="45" height="45"></a></h4></div>

</div>


<div class="row">
	<div class="col-sm-12">
		<?php require_once'footer.php';?>
	</div>
</div>



</div>
</div>









</div>
</body>
</html>