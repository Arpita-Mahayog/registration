<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
$mobile = filter_input(INPUT_POST, 'mobile');

if (!empty($username)){
if (!empty($password)){
if (!empty($email)){
if (!empty($mobile)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "newform";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO plzregister (username,password,email,mobile)
values ('$username','$password','$email','$mobile')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
}
else{
    echo "Username should not be empty";
    die();
}
}
else{
    echo "mobile should not be empty";
    die();
}

?>