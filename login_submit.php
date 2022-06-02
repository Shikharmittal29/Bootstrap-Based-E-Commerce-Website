<?php
$db_host ="127.0.0.1";
$db_username ="root";
$db_name = "persons";
$db_password = "";


$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
if(!$conn)
{
	echo "Connection Failed to established".mysqli_connect_error();
	exit;
}

$Email= $_POST['Email'];
$Password = $_POST['Password'];

$sql = "SELECT * FROM information WHERE EMAIL='$Email' AND PASSWO='$Password'";
$result = mysqli_query($conn,$sql);

if(!$result){
	echo "Error :".mysqli_error($conn);
	exit;
}
$row = mysqli_fetch_assoc($result);
if($row)
{
	echo "Hello". $row['NAME']."      Login Successful";
}

else
{
echo "Login Failed";
}
mysqli_close($conn);

?>
