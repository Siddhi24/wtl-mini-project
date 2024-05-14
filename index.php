<?php

if(isset($_POST["submit"]))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    

    if(!empty($fname) && !empty($lname))
    {
        $link = mysqli_connect("localhost","root","","demo");
        if($link==false)
        {
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO demo1 (fname,lname) VALUES ('$fname','$lname')";
        if(mysqli_query($link,$sql))
        {
            echo "Records inserted successfully!";
            
        }else 
        {
            echo "Something went wrong.";
        }
    }else{
        echo "Please provide all information";
    }
}

?>