<!DOCTYPE html>
<html lang="en">
<head>
  <?php       include('dbconnection.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
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
    width: 550px;
    height: 620px;
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
    max-width: 400px;
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
<body >


    
    <div class="container">
        <h1>Add Member</h1>
        <form action="insertfile.php" method="POST" >
            <input type="text" placeholder="Name" name="name" required>
            <input type="text" placeholder="Surname" name="surname" required>
            <input type="text" placeholder="Address" name="address" required>
            <input type="tel" placeholder="Mobile Number" name="mobno" required>
            <select name="empname">
            <option value ="----">Select_Employee</option>
              <?php 
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
           


            
            <button type="submit" class="Add_btn" >Save data</button>
        </form>
        

      
    </div>
</body>
</html>





