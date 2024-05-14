<?php
$userName=$_POST['userName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];
$cPassword=$_POST['cPassword'];

$conn = new mysqli('localhost','root','','interior');
if($conn->connect_error)
{
    die('Connection Failed : '.$conn->connect_error);
}else
{
    $stmt = $conn->prepare("insert into interior(userName,lastName,email,password,cPassword)values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$userName,$lastName,$email,$password,$cPassword);
    $stmt->execute();
    echo "registration successful";
    $stmt->close();
    $conn->close();

}
?>