<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'chatbox');

$result1=mysqli_query($con,"SELECT * FROM logs ORDER by id ASC");
while ($extract =mysqli_fetch_array($result1)) {
	# code...
	echo $extract['username'] .":" .$extract['msg']."<br>";
}

?>