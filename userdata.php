<?php

$con = mysqli_connect('localhost:3306','root');

if($con){
	echo "connection_succussful";
}else{
	echo "No connection";
}


mysqli_select_db($con, 'thapaw28_youtubeuserdata');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into  userinfodata (user, email, mobile, comment) values 
('$name', '$email','$mobile','$comment')  ";  

mysqli_query($con, $query);



?>