<?php require_once("con.php");?>
<?php  
    
if (isset($_POST['submit'])) 
{  
    extract($_POST); 
    $user       = $_POST["user"];
    $pass       = $_POST["pass"];
    $email      = $_POST["email"];
    $sql = "INSERT INTO `user` (`username`,`password`,`email`)
  VALUES ('$user','$pass','$email')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: complain.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
}
?>