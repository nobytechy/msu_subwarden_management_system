 <?php 
 require_once'head.php';
 require_once'inc/data.php';?>
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>

<body id="top">
<div  class="container">
<div class="row">
<div class="col-sm-4" style="background-color: #06C;border-top:3px solid #FFF;border-left: 3px solid #06C">
<center>
<h4 class="text-center" style="padding-left:15px;background-color: #FF0;padding:3px;border-bottom: 2px solid #FFF"><b>Sub-Warden Login</b></h4>
	<form action="warden.php" method="post">
 <div class="input-group">

                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>

                    <input type="text" name="regnumber" class="form-control" placeholder="Enter RegNumber" required/>
					
                </div>
				<br>
<div class="input-group">

                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required/>
					
                </div>
<br>
		  <button type="submit" name="login"  class="btn btn-info">Login Now</button>
</form></center>
<h4 class="text-center"><a style="color:#FFF" href="#wardeny">Warden Click Here</a></h4>
<hr style="border:1px dotted #FF0">
<h4 class="text-center" style="padding-left:15px;background-color: #FF0;padding:3px;border-bottom: 2px solid #FFF"><b>Student Login</b></h4>

<center><form action="student.php" method="post">
 <div class="input-group">

                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>

                    <input type="text" name="regnumber" class="form-control" placeholder="Enter RegNumber" required/>
					
                </div>
				<br>
<div class="input-group">

                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>

                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required/>
					
                </div>
<br>
		  <button type="submit" name="login2"  class="btn btn-info">Login Now</button>
		 <p>&nbsp;</p>
		  <div class="alert alert-warning" role="alert"><strong><span style="color:#000">Not yet registered</span><a 
		  	 href="registration.php"> PLEASE CLICK HERE</a></strong></div>
</form></center>


</div>
<div class="col-sm-8" style="background-color:transparent;border-top:3px solid #FFF;border-right: 3px solid #06C">
<div class="col-sm-12"></div>
 <h1 class="animate-reveal animate-second"><div class="jumbotron" style="margin-top:88px;border-radius: 0;">
<h4>We aim to provide a quality living and learning environment which fosters the diverse intellectual,social and personal development of students<h4>
<h5><strong>Note:</strong><strong><em>Wardens, Subwardens and Hall Committee members</strong> are there to ensure that the residences become a home away from home. If you have any doubts, problem and need some information, please do not hesitate to approach them – they are there for you.</em>
</h5>
<center><img src="images/moto.gif">

</center>
</div></h1>
</div>
<div class="col-sm-12" style="margin-top: 3px">
<?php require_once'footer.php';?>	
</div>
</div>





</body>
</html>