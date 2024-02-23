<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $mobno = $_POST['mobno'];
    $empname = $_POST['empname'];
    $np1 = $_POST['np1'];
    $np2 = $_POST['np2'];
    $np3 = $_POST['np3'];
    $np4 = $_POST['np4'];
}
$current_amt = '0';
$previous_amt='0';
$total='0';

// connecting to database

include("dbconnection.php");
// creating connection

$conn = mysqli_connect($servername, $username, $password, $database);
// die if connection was not successfull

if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
    // submitting to database
    $sql1 = "INSERT INTO `payment`() VALUES ()";
    $sql = "INSERT INTO `customers` ( `name`, `surname`, `address`, `mobno`, `empname`, `np1`,`np2`, `np3`,`np4`) VALUES ( '$name', '$surname', '$address', '$mobno', '$empname', '$np1', '$np2', '$np3', '$np4')";
    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn,$sql1);

    if($result){
        echo "<script>alert('Member added Successfully..!!');
        window.location.href = 'managemem.php';
        </script>";
    }
    else{
        echo "<script>alert('Not Saved...Please try again.!!');
        window.location.href = 'insertuser.php';
        </script>";
        
    }
}
?>