<?php 
$db_host ="127.0.0.1";
$db_username ="root";
$db_name = "persons";
$db_password = "";


$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
if(!$conn){
	echo "Connection Failed to established".mysqli_connect_error();
	exit;
}
$Name = $_POST['Name'];
$Email= $_POST['Email'];
$Password = $_POST['Password'];

$sql = "INSERT INTO information (NAME, EMAIL,PASSWO) VALUES ('$Name','$Email','$Password')";

$resut = mysqli_query($conn,$sql);

if(!$resut){
	echo "Error :".mysqli_error($conn);
	exit;
}
echo "Registration successful";
    mysqli_close($conn);
?>
