<!DOCTYPE HTML>  
<html>
<head>
</head>
<body >
<form action= "password.php" method="post">
Name: <input type="text" name="uname"><br><br>
Password: <input type="password" name="upw"><br><br>
<input type="submit">
</form>
</body>
<?php
$name=$_REQUEST['uname'];
$pw=$_REQUEST['upw'];
$servername="127.0.0.1";
$username="root";
$password="";
$database='lab';
$conn=new mysqli($servername,$username,$password,$database);
if(strlen($name)==0 && strlen($pw)==0)
{
echo "Enter username and password";
}
else if(strlen($pw)<8)
echo "Password must be greater than 8 characters";
if(strlen($pw)>=8 && strlen($name)>0)
{
$sql="insert into user values('$name','$pw')";
if ($conn->query($sql) === TRUE) 
{
     echo  "$name's Records are Successfully Created!!!";
}
}
$conn->close();
?>

</html>