
<?php
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $country=$_POST['country'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];

// Database Connection
$conn = new mysqli('localhost','root','','final');
if($conn->connect_error){
      
    die('Connection Failed ! '.$conn->connect_error);
}else{
    // echo'connected';
    $stmt=$conn->prepare("INSERT INTO final1(username,email,password,contact,country,address,pincode) VALUES(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissi",$username,$email,$password,$contact,$country,$address,$pincode);
    $stmt->execute();
    echo "Registered Successfully !";
    $stmt->close();
    $conn->close();
}

?>