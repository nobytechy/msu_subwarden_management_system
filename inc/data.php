<?php
echo'<div id="war" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    ?>
<h4 class="text-center" style="padding-left:15px;background-color: #FF0;padding:3px;border-bottom: 2px solid #FFF"><b>Warden Login</b></h4>

	<form action="" method="post">
 <div class="input-group">

                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>

                    <input type="text" class="form-control" placeholder="Enter RegNumber" required/>
					
                </div>
				<br>
<div class="input-group">

                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

                    <input type="password" class="form-control" placeholder="Enter Password" required/>
					
                </div>
<br>
		  <button type="submit"  class="btn btn-info">Login Now</button>
</form>
<?php
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';
?>



<?php
echo'<div id="studenty" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 class="text-center" style="color:#000">System Account Registration</h3>';
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	 <div class="form-group">
        <span style="color: #06F" class="glyphicon glyphicon-user"></span>    <label style="color: #06F"  for="inputname">Reg Number</label></span>
            <input type="text" name="regnumber" class="form-control" id="inputname" placeholder="R131435B"   pattern="^[A-Za-z]+">
        </div>
		<div class="form-group">
        <span style="color: #06F" class="glyphicon glyphicon-lock"></span></span>    <label style="color: #06F" for="inputsurname">Create Password</label>
            <input type="password" name="password1" class="form-control" id="inputsurname" placeholder="******" pattern="^[A-Za-z]+">
        </div>
        <div class="form-group">
        <span style="color: #06F" class="glyphicon glyphicon-lock"></span></span>    <label style="color: #06F" for="inputsurname">Confirm Password</label>
            <input type="password" name="password" class="form-control" id="inputsurname" placeholder="*******" pattern="^[A-Za-z]+">
        </div>
       <div class="form-group">
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
            <input type="tel" name="phone" minlength="10" maxlength="10" class="form-control" id="inputphone" placeholder="+263 716 605 802">
       
	   </div>
		
        <button type="submit" name="student"  class="btn btn-info"><span style="color:#FFF">Apply Now</span></button>

    </form>
    <h3 class="text-center"><a  href="index.php">Login Now</a><br></h3>
<?php
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';











echo'<div id="open" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 style="color:#000">Notification Panel</h3>';
?>

<div class="alert alert-info"  role="alert" style="border:2px solid #06C">
<p  style="color:#06C"><img style="border-radius: 60%" src="images/avatar.png" width="45" height="45">
</span> USER | <span class="glyphicon glyphicon-time"> 6pm</span> </p>
<hr>
<p  style="font-weight:bold;color:#000"><span style="color:green"
 class="glyphicon glyphicon-comment"></span> </p>
 </div>
 <?php
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';



echo'<div id="report" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 style="color:#000">Send Message to Sub-Warden</h3>';
echo'<form class="form-horizontal" action="" method="post">';
echo'<label for="user"><p class="text-info">Username</p></label><br>';
echo'<input type="text" id="user" class="form-control">';
echo'<label for="subject"><p class="text-info">Message Subject</p></label><br>';
echo'<input type="text" id="subject" class="form-control">';	
echo'<label for="reply"><p class="text-info">Enter Your Message Below</p></label><br>';
echo'<textarea name="message" id="reply" class="form-control"  rows="10" >';
echo'</textarea>';
echo'<button type="submit" name="report"  style="margin-top:3px;margin-bottom:3px" class="btn btn-success">Post Now</button>';
	echo'</form>';
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';



echo'<div id="student" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 style="color:#000">Send Notifications To Student</h3>';
echo'<form class="form-horizontal" action="" method="post">';
echo'<label for="user"><p class="text-info">Username</p></label><br>';
echo'<input type="text" id="user" class="form-control">';
echo'<label for="subject"><p class="text-info">Message Subject</p></label><br>';
echo'<input type="text" id="subject" class="form-control">';

	
echo'<label for="reply"><p class="text-info">Enter Your Message Below</p></label><br>';
echo'<textarea name="message" id="reply" class="form-control"  rows="10" >';
echo'</textarea>';
echo'<button type="submit" name="report"  style="margin-top:3px;margin-bottom:3px" class="btn btn-success">Post Now</button>';
	echo'</form>';
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';

echo'<div id="warden" class="log">';
  echo'<div style="border-radius:0">';
    echo'<a href="#close" title="Close" class="close">X</a>';
    echo'<h3 style="color:#000">Report to Warden</h3>';
echo'<form class="form-horizontal" action="" method="post">';
echo'<label for="user"><p class="text-info">Username</p></label><br>';
echo'<input type="text" id="user" class="form-control">';
echo'<label for="subject"><p class="text-info">Message Subject</p></label><br>';
echo'<input type="text" id="subject" class="form-control">';

	
echo'<label for="reply"><p class="text-info">Enter Your Message Below</p></label><br>';
echo'<textarea name="message" id="reply" class="form-control"  rows="10" >';
echo'</textarea>';
echo'<button type="submit" name="report"  style="margin-top:3px;margin-bottom:3px" class="btn btn-success">Post Now</button>';
	echo'</form>';
echo '<span class="info"><strong>click the x symbol at the right top to close</strong></span>';
  echo'</div>';
echo'</div>';

?>