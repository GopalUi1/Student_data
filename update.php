<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="style.css">
    <title>Update Form</title>
    <style>
.button {
   
   background-color: #4CAF50;
   border: none;
   color: white;
   padding: 15px 32px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   cursor: pointer;
   float: center;
border-radius: 14px;

 }
 
.button2 {
   
   background-color: #4CAF50;
   border: none;
   color: white;
   margin:20px;
   padding: 15px 48px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   cursor: pointer;
   float: center;
border-radius: 14px;
 }
 th  {
    padding: 15px;
    height: 17px;
  }
  td  {
    padding: 15px;
    height: 17px;
  }
  .box{
    width:193px;
    height:25px
  }
body {background-color: gray;}

</style>
</head>
<body>
<?php


    
    require('db.php');
    
    

         $ids= $_GET['id']; 


    $query="SELECT * FROM `student` WHERE id='$ids'";
    $data=mysqli_query($con,$query);

    $result = mysqli_fetch_array($data);    
    if (isset($_REQUEST['submit'])) {
        ?>
        <script>
        
          if (confirm("Press a button!")) {
            
          
<?php
        $studname=$_REQUEST['studname'];
        $email=$_REQUEST['email'];
        $gender=$_REQUEST['gender'];
        $dob=$_REQUEST['dob'];
        $languag=$_REQUEST['languag'];
        $addres=$_REQUEST['addres'];



        require('db.php');
        $query ="UPDATE student set  studname='" . $_POST['studname'] . "', email='" . $_POST['email'] . "',gender='" . $_POST['gender'] . "',dob='" . $_POST['dob'] . "',languag='" . $_POST['languag'] . "',addres='" . $_POST['addres'] . "' WHERE id='$ids'";
        $result   = mysqli_query($con, $query);

        if ($result) {
            
            ?>
            
            alert('Record Edit Updated');
            window.location.href='index.php';
          
           <?php
         
        } else {
           
            ?>
          
            alert('Record Edit Not Updated');
            window.location.href='index.php';
            
            <?php
        }
        ?>} else {
            
            alert('Given Record Not Inserted');
            window.location.href='index.php';
        
          }
        
        </script><?php
    
    } else {
?>

    <form class="form" action="" method="post">

        <div class="full">
        <div>
  
            <table >
            <p class="pa2">Edit student detail</p>
                    <tr>
                        <td>Student Name</td>
                        <td> <input type="text"  name="studname" class="box" value="<?php echo $result['studname'];?>" required /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>  <input type="text"  name="email" class="box" value="<?php echo $result['email'];?>" required /></td>
                    </tr>
                    <tr><td>Gender</td>
                       <td> <input type="radio" name="gender"  value="<?php echo $result['gender'];?>" required>
                       male
                        <input type="radio" name="gender"  value="<?php echo $result['gender'];?>" required>
                        female</td>
                    </tr>
                    <tr>
                       
                        <td>Date Of Birth</td>
                        <td>  <input type="date" class="box"  name="dob" value="<?php echo $result['dob'];?>" required /></td>
                    </tr>
                     <tr>
                        <td>Language</td>
                        <td>   <input type="text" class="box" name="languag" value="<?php echo $result['languag'];?>" required /></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea type="text" class="box" name="addres" row="5"  required ><?php echo $result['addres'];?></textarea>  </td>
               
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Update" class="button"></td>
                        <td><a href="index.php" name="sub" class="button2">Back</a></td></tr>
    </table>
    
    
    
        
        </div>
    </div>
    </form>
<?php
    }
?>
</body>
</html>






























