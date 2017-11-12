<?php require_once"inc/db.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['username'])){
unset($_SESSION['username']);
header('location:index.php');
}
elseif(isset($_SESSION['regnumber'])){
unset($_SESSION['regnumber']);
header('location:index.php');
}
else{
session_destroy();

}

?>
</body>
</html>