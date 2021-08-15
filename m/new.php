<?php


$fname = $_POST['fname'];
$phoneno = $_POST['phoneno'];
$place = $_POST['place'];
$feedback = $_POST['feedback'];



//database connection
$conn = new mysqli('localhost','root','','thebakersisters');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into review(fname, phoneno, place,feedback) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siss", $fname, $phoneno, $place, $feedback);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>


