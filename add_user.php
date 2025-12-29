<?php
$server_name="127.0.0.1";
$user_name="yogevsh_usr1";
$password="yogevshani123";
$database_name="yogevsh_test_db";

//create connection
$conn=new mysqli($server_name,$user_name,$password,$database_name);

//check the connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

//get info from html
$id=$_POST['id'];
$name=$_POST['fullName'];
$age=$_POST['age'];



//add user
$sql="insert into users(id,name,age) values ('$id','$name',$age)";
if ($conn->query($sql)==FALSE){
    echo "Can not add new user.  Error is: ".$conn->error;
    exit();
}

/*
//$sql="insert into users(id,name,age) values ('$id','$name',$age)";
$sql = "INSERT INTO users (id, name, age) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $id, $name, $age);
if ($stmt->execute()) {
            echo "User added!";
  } 
else {
	echo " Error: " . $stmt->error ;
	exit();
}*/





?>
<!DOCTYPE html>
<html>
<head>
	<title>Response</title>
    <style>
		.pic{border-radius:50%;width:20%;height:150px;}
		#response{margin:2%;width:50%;height:30px;border:solid 2px;background-color:green;}
		
	</style>
</head>
<body>
    <div id="response">New User was succesffuly added!</div>
	<image class="pic" src="men.jpg">
	<image class="pic" src="woman.jpg">
    
    
    

</body>
</html>