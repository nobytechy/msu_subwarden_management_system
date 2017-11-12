<?php require_once'head.php';?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-sm-4"></div>
<div class="col-sm-4">

 <h3 class="text-center" style="color:#000">System Account Registration</h3>

<div class="text-success"> <?php "$success";?></div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" autocomplete="off">
	<div class="text-danger"> <?php echo "$match";?></div>
  <div class="form-group">
     <div class="text-danger"> <?php echo "$nameErr";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-user"></span>    <label style="color: #06F"  for="input">First Name</label></span>
            <input type="text" name="name" class="form-control" id="input" placeholder="brighton" 
            pattern="^[A-Za-z]+">
        </div>
	 <div class="form-group">
	 	 <div class="text-danger"> <?php echo "$regErr";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-user"></span>    <label style="color: #06F"  for="inputname">Reg Number</label></span>
            <input type="text" name="regnumber" class="form-control" id="inputname" placeholder="R131435B" 
            pattern="[R-r]{1}[0-9]{6}[A-Za-z]{1}" title="Please enter correct MSU regnumber">
        </div>
		<div class="form-group">
			<div class="text-danger"> <?php echo "$pass1Err";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-lock"></span></span>    <label style="color: #06F" for="inputsurname">Create Password</label>
            <input type="password" name="password1" class="form-control" id="inputsurname" placeholder="******" >
            <div class="text-danger"> <?php echo "$pass1Err1";?></div>
        </div>
        <div class="form-group">
        	<div class="text-danger"> <?php echo "$passErr";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-lock"></span></span>    <label style="color: #06F" for="inputsurname">Confirm Password</label>
            <input type="password" name="password" class="form-control" id="inputsurname" placeholder="*******">
             <div class="text-danger"> <?php echo "$pass1Err2";?></div>
        </div>
       <div class="form-group">
       	<div class="text-danger"> <?php echo "$locationErr";?></div>
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
			<div class="text-danger"> <?php echo "$phoneErr";?></div>
        <span style="color: #06F" class="glyphicon glyphicon-phone"></span></span>    <label style="color: #06F" for="inputphone">Cell Number</label>
            <input type="tel" name="phone" minlength="10" maxlength="10" class="form-control" id="inputphone" placeholder="+263 716 605 802"  pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{3}[0-9]{3}">
       
	   </div>
		
        <button type="submit" name="registration"  class="btn btn-info"><span style="color:#FFF">Apply Now</span></button>

    </form>
    <h3 class="text-center"><a  href="index.php">Login Now</a><br></h3>


</div>
<div class="col-sm-4"></div>

</body>
</html>