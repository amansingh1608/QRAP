<?php
include ('connector.php');
$Fname=$_POST['FirstName'];
$Lname=$_POST['LastName'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Phone=$_POST['Phone'];
$Uid=$_POST['YourId'];

$query="INSERT INTO `registration1`(`Firstname`, `Lastname`, `EmailID`, `Password`, `Phone`, `UID`) VALUES ('$Fname','$Lname','$Email','$Password','$Phone','$Uid')";
$q=mysqli_query($con, $query);

if($q == true ){
	echo "data is inserted succesfully";
	?>
	<script>
	window.location="index.php"
	</script>
	<?php
}
else {
	echo "error" ;
}

?>


