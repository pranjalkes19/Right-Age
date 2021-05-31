<?php require_once("con.php");?>
<?php     
if (isset($_POST['submit'])) 
{  

    extract($_POST); 
    date_default_timezone_set('Asia/Kolkata');
    $date       = date("h:i:sa");
    $cname       = $_POST["q4_complainantsName"];
    $cemail      = $_POST["q5_email5"];
    $comp       = $_POST["q9_nameOf"];
    $address     = $_POST["q7_addressOf"];
    $age      = $_POST["q8_approximateAge"];
    $details      = $_POST["q11_theSpecific11"];
    $pol_stn      = $_POST["q15_nearestPolice"];
    $sql = "INSERT INTO `complain` (`date`,`cname`,`cemail`,`comp`,`address`,`age`,`details`,`pol_stn`)
  VALUES ('$date','$cname','$cemail','$comp','$address','$age','$details','$pol_stn')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: final.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
}
else{
    echo "fail";
}
?>