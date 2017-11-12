<?php require_once'inc/info.php';?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
	<button onclick="topFunction()" id="myBtn" title="Go to 
top">Top</button>
<div  class="row">
<div class="col-sm-12" style="background-color:#06C;padding:10px;color: #FFF;border-bottom: 3px solid #FFF">	
<p class="text-center"><strong>Powered by Nobytechy Computers  &copy; 2017 All Rights Reserved</strong><br>
<strong>For more info and support - <span class="glyphicon glyphicon-phone"> </span> Contact 0716 605 802</strong>
</p>
<hr style="width: 50%">
<div class="col-sm-4"></div>
<div id="wardeny"  class="col-sm-4 bg-info" style="padding-bottom: 5px;border-radius: 3px">
	<h4 class="text-center" style="color: #000"><b>Warden Login</b></h4>

	<form  action="" method="post">
 <div class="input-group">
<div class="text-danger"> <?php echo "$usernameErr";?></div>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>

                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
					
                </div>
				<br>
<div class="input-group">
<div class="text-danger"> <?php echo "$passwordErr";?></div>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
					
                </div>
<br>
		  <button type="submit" name="admin" class="btn btn-info">Login Now</button>
</form>

</div><div class="col-sm-4"></div>

</div>
</div>
<style type="text/css">
	#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index:9;
  border: none;
  outline: none;
  background-color:#06C;
  color: #FFF;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #000;
}
</style>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || 
document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</style>
</body>
</html>