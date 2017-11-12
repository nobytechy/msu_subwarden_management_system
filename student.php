<?php 
session_start();
require_once'head.php';
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
					<h4 class="navbar-brand"><strong>Student Panel</strong></h4><br>

				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a style="color:#06C" href="#open"><span id="vww" style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Notifications</a></li>
						<li><a style="color:#06C"  href="common.php"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Join Common Room</a></li>
						<li><a style="color:#06C"  href="#report"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Report to Sub-Warden</a></li>
						<li><a style="color: #06C" href="$log@out.php"><strong> LOGOUT NOW <img style="margin-right: 5px" src="images/logout.png" width="45" height="45"></strong></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

<div class="col-sm-3 offset-9 thumbnail bg-info text-center">
 <h2>Welcome</h2>
<form name="bulk_action_form" action="action.php" method="post" onsubmit="return changeConfirm();" enctype="multipart/form-data"/>
<input type="hidden" name="size" value="1000000" >
<input type="file" id="image" name="image" value="Choose Picture" />
<button type="submit"  class="btn btn-info" name="change"><span style="color:#000">Change Profile Picture</span></button>
</form>
</div>


    
</div>
</div>





<div class="row">
<div class="col-sm-12 bg-info">
<div class="col-sm-8">
<p style="background-color: #FF0;padding:3px;color: #000">
  <span style="color: #06F;font-size:14px"> <?php echo strtoupper($_SESSION['regnumber']);?></span>
    
  
  <?php 
  if ($_SESSION['regnumber']) {
    $regnumber=($_SESSION['regnumber']);
    $num=0;
    $result = $pdo->prepare("SELECT * FROM students WHERE regnumber='$regnumber'");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $num++;
      if ($num==2){
      break;  
      }?>
    <span style="color: #06F;font-size:16px" class="glyphicon glyphicon-user"><strong>
      Welcome <?php echo strtoupper($row['name']);?> | </strong>
   </span>
     <span style="color: #06F;font-size:16px" class="glyphicon glyphicon-location"><strong>
      Your current location address is <?php echo strtoupper($row['location']);?></strong>
     </span>
  <?php
  }}
  ?> 


</p>
<h3 class="text-center">WELCOME STUDENT</h3>
<h5><strong> WHAT WE AIM TO CATER FOR YOU</strong></h5>
<ul class="text-justify">
	<li>To advise and counsel students in their respective locations.</li>
    <li>To ensure that academic and social needs and interests of students are catered for.</li>
    <li>To make residences comfortable on or off campus .</li>
    <li>To ensure that rules and regulations are served on or off campus and also to deal with offenders.</li>
</ul>
<h5><strong>EXPECTED PROGRAMMES IN LOCATIONS</strong></h5>
<ul>
    <li>Community Service e.g. visiting Old People's Home.</li>
    <li>Competition amongst locations of residences</li>
    <li>Leadership Training</li>
    <li>Location First Aiders</li>
    <li>Study Tours</li>

</ul>
<h3 class="text-center">SUB-WARDENS</h3>
<p class="text-center">They are elected. It is a governing body of students who manage portfolios such as, Entertainment, Security, Academic Affairs, etc</p>

<div class="row">
	<h4 id="name" class="text-center" style="background-color:#06F;color: #FF0">2017 SENGA SUB-WARDENS</h4>
  <div class="col-sm-3" style="text-align: center;">
    <div class="thumbnail">
      <img src="images/avatar.png" alt="Sub-Warden">
      <div class="caption">
        <h4 class="text-center" style="color: #06F">Brighton</h4>
         <span class="glyphicon glyphicon-phone">0718-243-254</span>
    </div>
  </div>
</div>

<div class="col-sm-3" style="text-align: center;">
    <div class="thumbnail">
      <img src="images/avatar.png" alt="Sub-Warden">
      <div class="caption">
       <h4 class="text-center" style="color: #06F">Nigel</h4>
        <span class="glyphicon glyphicon-phone">0712-200-876</span>
    </div>
  </div>
</div>

<div class="col-sm-3" style="text-align: center;">
    <div class="thumbnail">
      <img src="images/avatar.png" alt="Sub-Warden">
      <div class="caption">
        <h4 class="text-center" style="color: #06F">Allan</h4>
         <span class="glyphicon glyphicon-phone">0778-943-094</span>
    </div>
  </div>
</div>

<div class="col-sm-3" style="text-align: center;">
    <div class="thumbnail">
      <img src="images/avatar.png" alt="Sub-Warden">
      <div class="caption">
        <h4 class="text-center" style="color: #06F">Shelton</h4>
        <span class="glyphicon glyphicon-phone">0773-243-254</span>
    </div>
  </div>
</div>

</div>
 



</div>
<div class="col-sm-4" style="padding-bottom: 10px">
<fieldset>
	<legend class="text-center"><marquee direction="left" scrolldelay="200"> Sub-Warden Application Portal</marquee>  </legend>
	<p class="text-center  text-success"><strong> <?php echo "$success2";?></strong></p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	 <div class="form-group">
	 	 <div class="text-danger"> <?php echo "$nameErr2";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-user"></span>    <label style="color: #06F"  for="inputname">First Name</label></span>
            <input type="text" name="name" class="form-control" id="inputname" placeholder="Brighton"   pattern="^[A-Za-z]+">
        </div>
		<div class="form-group">
			 <div class="text-danger"> <?php echo "$surnameErr2";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-user"></span></span>    <label style="color: #06F" for="inputsurname">Last Name</label>
            <input type="text" name="surname" class="form-control" id="inputsurname" placeholder="Code" pattern="^[A-Za-z]+">
        </div>
        <div class="form-group">
        	 <div class="text-danger"> <?php echo "$genderErr2";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-user"></span></span>    <label style="color: #06F" for="inputGender">Gender</label>
            <select name="gender" class="form-control" id="inputGender">
            	<option></option>
           <option class="form-control" name="male">Male</option>
           <option class="form-control" name="female">Female</option>
            </select>
        </div>
        <div class="form-group">
        	 <div class="text-danger"> <?php echo "$progErr2";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-education"></span></span>    <label style="color: #06F" for="programme">Programme</label>
            <input type="tel" name="program" class="form-control" id="programme" placeholder="Information Systems">
	   </div>
	   <div class="form-group">
	   	 <div class="text-danger"> <?php echo "$levelErr2";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-plus"></span></span>    <label style="color: #06F" for="level">Year Level</label>
            <input type="tel" name="level" class="form-control" id="level" placeholder="2.2">
	   </div>

        <div class="form-group">
       	<div class="text-danger"> <?php echo "$locationErr2";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-map-marker"></span></span>   <label style="color: #06F" for="inputlocation">Select Location</label>
            <select name="location" class="form-control" id="inputlocation">
            	<option></option>
           <option class="form-control" name="location">Senga</option>
           <option class="form-control" name="location">Nehosho</option>
            <option class="form-control" name="location">Kopje</option>
           <option class="form-control" name="location">Windsor Park</option>
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
			 <div class="text-danger"> <?php echo "$phoneErr2";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-phone"></span></span>    <label style="color: #06F" for="inputphone">Cell Number</label>
            <input type="tel" name="phone" minlength="10" maxlength="15" class="form-control" id="inputphone" placeholder="+263 716 605 802"  pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{3}[0-9]{3}">
       
	   </div>
		<div class="form-group">
			 <div class="text-danger"> <?php echo "$emailErr2";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-envelope"></span></span>    <label style="color: #06F" for="inputEmail">Email </label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" >
        </div>
		<div class="form-group">
			 <div class="text-danger"> <?php echo "$noteErr2";?></div>
 <span style="color: #06F" class="glyphicon glyphicon-comment"></span></span>  <label style="color: #06F" for="inputinfo">Reasons For Sub-Warden Application</label> 
           <textarea name="note" class="form-control" id="inputinfo">
		   </textarea>
        </div>
		
      
        <button type="submit" name="apply"  class="btn btn-info"><span style="color:#FFF">Apply Now</span></button>

    </form>
</fieldset>
</div>

</div>
</div>
<div class="row" style="border-top: 3px solid #06C">
<div class="col-sm-3"><h4 class="text-center"><a style="color:#FFF" href="#open"><span id="vww" style="font-size: 18px;color:#060" class="glyphicon glyphicon-envelope"></span> Notifications</a></h4></div>
<div class="col-sm-3"><h4 class="text-center"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span><a style="color:#FFF" href="common.php"> Join Common Room</a></h4></div>
<div class="col-sm-3"><h4 class="text-center"><a style="color:#FFF"  href="#report"><span style="font-size: 18px;color:#09F" class="glyphicon glyphicon-comment"></span> Sub-Warden Chatroom </a></h4></div>
<div class="col-sm-3"><h4 class="text-center"><a style="color:#FFF" href="$log@out.php"> LOGOUT NOW <img style="margin-right: 5px" src="images/logout.png" width="45" height="45"></a></h4></div>

</div>

<div class="row">
<div class="col-sm-12">
<?php require_once'footer.php';?>
</div>
</div>

</div>

</body>
</html>