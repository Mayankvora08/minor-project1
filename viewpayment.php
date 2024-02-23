<?php
session_start();


// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: Adminlogin.php");
//     exit;
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Payments</title>
    <link rel="stylesheet" href="css/dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
      .content-table {
  border-collapse: collapse;
  margin: 25px 19px;
  margin-left: 13px;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #19B3D3;
  color: #ffffff;
  text-align: left;
  font-weight: 900;
}

.content-table th,
.content-table td {
  padding: 15px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #82abc7;
}

  </style>
</head>
<body>
<input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>NewsPaper<span>Agency</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="Images/newspaperlogo.jpeg" class="profile_image" alt="">
        <h4> Admin </h4>
      </center>
      <a href="managemem.php"><i class="fas fa-desktop"></i><span>Manage Members</span></a>
      
      <a href="viewpayment.php" ><i class="fas fa-file-invoice-dollar"></i><span>View Payments</span></a>
      
      <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
    </div>
    <!--sidebar end--> 
    <div class="content"><br><br><br><br>
    <?php
    include("dbconnection.php");

    $query = "Select * from customers";
    $query_run = mysqli_query($con,$query);
    ?>
    <table class="content-table">
  <thead>
  <label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Amount</th>
      <th>DOJ</th>
    </tr>
  </thead>
  <?php
    if($query_run)
    {
      while($row = mysqli_fetch_array($query_run))
      {
        ?>

    <tbody>
    <tr>
      <td><?php echo $row['id']; ?> </td>
      <td><?php echo $row['name']; ?> </td>
      <td><?php echo $row['surname']; ?> </td>
      <td><?php echo $row['amt']; ?> </td>
      <td><?php echo $row['DOJ']; ?> </td>
    </tr>
    </tbody>
        <?php
      }
    }
    else
    {
      echo "No Record found";
    }
    ?>
    </table> 

        
    </div>
</body>
</html>