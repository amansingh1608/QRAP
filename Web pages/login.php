<?php
include("connector.php");
session_start();
$user=$_POST[Username];
$pass=$_POST[password];
$query="SELECT UID,CURRENT_TIME() FROM `registration1` WHERE UID='$user' and Password='$pass'";
$q=mysqli_query($con, $query);
if($q == true ){
	$q=mysqli_query($con, $query);
	$r=mysqli_fetch_array($q);
	$_SESSION["user"]=$r['UID'];
	$_SESSION["TIME"]=$r['CURRENT_TIME()'];
	?>
	<script>
	window.location="save.php"
	</script>
	<?php
}
else {
	echo "error" ;
}


?>