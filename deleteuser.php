<?php
    include("dbconnection.php");
    if(isset($_POST['delete']))
    {
        $Id = $_POST['Id'];

        $query = "DELETE FROM customers WHERE id='$Id'";
        $query_run = mysqli_query($con,$query);

        if($query_run)
        {
            echo "<script>alert('Data Deleted Successfully..!!');
             window.location.href = 'managemem.php';
            </script>";

        }
        else
        {
            echo "<script>alert('Data not deleted,please try again..!!');
            window.location.href = 'deleteuser.php';
            </script>";
        }

    }
?>



