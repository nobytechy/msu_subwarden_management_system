<?php require_once'head.php';
require_once"inc/db.php";

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body class="bg-info">
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
             <a href="admin.php">Return</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right" style="margin-right: 8px">
						
						<li><h3>Warden Information Center</h3></li>
						<li></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
</div>
</div>



<div class="row bg-info" style="border:2px solid #06C;">
	<div class="col-sm-12">
<h4 class="text-center" style="background-color:#06C;color: #FFF;padding: 5px">Sub warden Applications</h4>
<table class="table" style="border:1px solid #CCC">
<tr>
<td><strong>Name </strong></td>
<td><strong>Surname</strong></td>
<td><strong>Phone</strong></td>
<td><strong>Email </strong></td>
<td><strong>Programme</strong></td>
<td><strong>Level</strong></td>
<td><strong>Location</strong></td>


</tr>
<?php
		$num=0;
		$result = $pdo->prepare("SELECT * FROM applications ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			$num++;
			if ($num==11){
			break;	
			}
	?>
   
<tr style="border-bottom: 1px solid #000">
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['surname']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['program']; ?></td>
<td><?php echo $row['level']; ?></td>
<td><?php echo $row['location']; ?></td>

</tr> 
 <?php
		}
	?> 
</table>
</div>
</div>


<div class="row bg-info" style="border:2px solid #06C;">
<div class="col-sm-12">
	<h4 class="text-center" style="background-color:#06C;color: #FFF;padding: 5px">Sub warden Reports</h4>
	<table class="table" style="border:1px solid #CCC">
<tr class="bg-warning">
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
</div>

<div class="row bg-info" style="border:2px solid #06C;">
<div class="col-sm-12">
	<h4 class="text-center" style="background-color:#06C;color: #FFF;padding: 5px">List of Sub wardens</h4>
<form name="bulk_action_form" action="inc/info.php" method="post" onsubmit="return deleteConfirm();"/>
<table class="table" style="border:1px solid #CCC">
<tr class="bg-warning">
<td><strong>Name </strong></td>
<td><strong>Surname</strong></td>
<td><strong>Phone</strong></td>
<td><strong>Email </strong></td>
<td><strong>Reg_Number</strong></td>
<td><strong>Location</strong></td>
<td><strong>Select Sub warden</strong></td>

</tr>
<?php
		$num=0;
		$result = $pdo->prepare("SELECT * FROM subwarden ORDER BY id DESC");
		$result->execute();
		if($result){
		for($i=0; $row = $result->fetch(); $i++){
			$num++;
			if ($num==11){
			break;	
			}
	?>
   
<tr style="border-bottom: 1px solid #000">
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['surname']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['regnumber']; ?></td>
<td><?php echo $row['location']; ?></td>
 <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>
</tr> 
 <?php
		}}else{ ?>
            <tr><td colspan="7">No records found.</td></tr> 
        <?php } ?>
	

</table>
 <input type="submit" class="btn btn-danger pull-left" name="bulk_delete_submit" value="Remove Sub warden"/>
 <a href="admin.php">Add Sub warden</a>
</form>
</div>
<div class="col-sm-12" style="border-top: 3px solid #FF0"><?php require_once'footer.php';?></div>
</div>




<script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Are you sure to remove this Sub warden?");
    
   if(result){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
</body>
</html>