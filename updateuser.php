<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateuser</title>
    <style>
        .Add_btn{
    padding: 5px;
    background: #0B87A6;
    text-decoration: none;
    /* float: right; */
    margin-top: -1px;
    margin-right: 2px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .Add_btn:hover{
    background: #19B3D3;
  }
  .container{
    background:#e6ffcc;
    width: 600px;
    height: 600px;
    margin-top: 90px;
    margin-left: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    /* margin: auto; */
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    overflow: hidden;
}
.container form{
    max-width: 600px;
    padding: 0 70px;
    position: absolute;
    top: 100px;
    transition: transform 1s;
}
form input{
    width: 100%;
    height: 40px;
    margin-top: 0px;
    margin-bottom: 10px;
    padding: 0 10px;
    border: 1px solid #ccc;
}
form select{
    width: 100%;
    height: 40px;
    margin-top: 0px;
    margin-bottom: 10px;
    padding: 0 10px;
    border: 1px solid #ccc;
}
html {
  background: url(Images/newspaper2.jpeg) no-repeat center fixed;
  background-size: cover;
}
  
  
    </style>
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'rj');

    $Id = $_POST['Id'];

    $query = "SELECT * FROM customers WHERE Id='$Id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
    <div class="container">
        <h1>Update Member</h1>
        <form action="" method="POST" >
            <input type="hidden" name="Id" value="<?php echo $row['id'] ?>">
            <input type="text" placeholder="Name" name="name" value="<?php echo $row['name'] ?>" required>
            <input type="text" placeholder="Surname" name="surname" value="<?php echo $row['surname'] ?>" required>
            <input type="text" placeholder="Address" name="address" value="<?php echo $row['address'] ?>" required>
            <input type="tel" placeholder="Mobile Number" name="mobno" value="<?php echo $row['mobno'] ?>" required>
            <select name="empname">
            <option value ="----">Select_Employee</option>
              <?php 
              include("dbconnection.php");
              $sql = mysqli_query($con,"select name from employee");
              while($row = $sql->fetch_assoc()){
              ?>
              <option value = "<?php echo $row['name']?>"><?php echo $row['name']?></option>
              <?php }?>
              </select>
            <select name="np1">
            <option value ="----">Select_Paper</option>
              <?php 
              
              $sql = mysqli_query($con,"select name from papers");
              while($row = $sql->fetch_assoc()){
              ?>
              <option value = "<?php echo $row['name']?>"><?php echo $row['name']?></option>
              <?php }?>

            </select>
            <select name="np2">
            <option value ="----">Select_Paper</option>
              <?php 
           
              $sql = mysqli_query($con,"select name from papers");
              while($row = $sql->fetch_assoc()){
              ?>
              <option value = "<?php echo $row['name']?>"><?php echo $row['name']?></option>
              <?php }?>

            </select>

            <select name="np3">
            <option value ="----">Select_Paper</option>
              <?php 
              
              $sql = mysqli_query($con,"select name from papers");
              while($row = $sql->fetch_assoc()){
              ?>
              <option value = "<?php echo $row['name']?>"><?php echo $row['name']?></option>
              <?php }?>

            </select>
            <select name="np4">
            <option value ="----">Select_Paper</option>
              <?php 
              
              $sql = mysqli_query($con,"select name from papers");
              while($row = $sql->fetch_assoc()){
              ?>
              <option value = "<?php echo $row['name']?>"><?php echo $row['name']?></option>
              <?php }?>

            </select>
            <button type="submit" name="update" class="Add_btn" >Update data</button>
        </form>
        <?php
            if(isset($_POST['update']))
            {
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $address = $_POST['address'];
                $mobno = $_POST['mobno'];
                $empname = $_POST['empname'];
                $np1 = $_POST['np1'];
                $np2 = $_POST['np2'];
                $np3 = $_POST['np3'];
                $np4 = $_POST['np4'];

                $query = "UPDATE customers SET name = '$name', surname = '$surname',address='$address', mobno='$mobno',empname='$empname',np1='$np1',np2='$np2',np3='$np3',np4='$np4' WHERE id='$Id'";
                $query_run = mysqli_query($connection,$query);

                if($query_run)
                {
                    echo "<script>alert('Updated Successfully..!!');
                    window.location.href = 'managemem.php';
                    </script>";
                }
                else
                {
                    echo "<script>alert('Not updated...Please try again.!!');
                    window.location.href = 'updateuser.php';
                    </script>";
                }
            }

        ?>
    </div>

            <?php
        }
    }
    else
    {
        echo'<script> alert("No Record Found"); </script>';
    }
    ?>
    
</body>
</html>