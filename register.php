
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
  <link rel="stylesheet" href="style.css">
    <style>
        
body {background-color: gray;}
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
</style>
</head>
<body>
<?php

    require('db.php');
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


      
       
        $query    = "INSERT into `student` (studname,email,gender,dob,languag,addres)
                     VALUES ('$studname','$email','$gender','$dob','$languag','$addres')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            ?>
           
            alert('Given Record Inserted');
            window.location.href='register.php';
          
           <?php
         
        } else {
            ?>
            
            alert('Given Record Not Inserted');
            window.location.href='register.php';
           
            <?php
        }
        ?>} else {
            
            alert('Given Record Not Inserted');
            window.location.href='register.php';
        
          }
        
        </script><?php
    } else {
?>
  
    <form class="form" action="" method="post">
        
   
      
    <div class="full" >
        

        <div >
           <p class="pa">Add student detail</p>
            <table >
            
                    <tr>
                        <td>Student Name</td>
                        <td> <input type="text" class="box" name="studname" required /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>  <input type="text" class="box"  name="email" required /></td>
                    </tr>
                    <tr><td>Gender</td>
                       <td> <input type="radio"  name="gender" value="male" required>
                       Male
                        <input type="radio"  name="gender" value="female" required>
                        Female</td>
                    </tr>
                    <tr>
                       
                        <td>Date Of Birth</td>
                        <td>  <input type="date" class="box"   name="dob" required /></td>
                    </tr>
                     <tr>
                        <td>Language</td>
                        <td>   <input type="text" class="box"  name="languag" required /></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea type="text" class="box" style=height:70px;  name="addres" row="5"  required ></textarea>  </td>
               
                        </tr><tr><td>
                    <input type="submit" name="submit" value="Register" class="button"></td>
                    <td><a href="index.php" class="button2">Back</a></td>
                    </tr>
                </table>
    
    
        
        </div>
    </div>
</form>
<?php
    }
?>
</body>
</html>
