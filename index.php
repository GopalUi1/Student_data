<html>
   <head>
      <title>Selecting MySQL Database</title>
   </head>
   <body>
  
   </body>
</html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Student Records</title>
   <style>
   .button {
  margin: 0% 80%;
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
   padding: 15px 15px;
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
    height: 70px;
  }
  td  {
    padding: 15px;
    height: 70px;
  }
 body {background-color: gray;}
</style>
</head>
<body>
<a href="register.php" class="button">Add</a>
    <div class="indexfull">
    
        <div>
        <p class="pa2">All Student Detail</p>
            <table>
           
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>StudentName</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Date Of Birth</th>
                        <th>Language</th>
                        <th>Address</th>
                        <th colspan="2">Oprents</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php
     
     require('db.php');

     
     $query="SELECT * FROM student";
     $data=mysqli_query($con,$query);
 
     $total = mysqli_num_rows($data);
     
 
    
    while($result = mysqli_fetch_array($data))
     {
 
    ?>
                    <tr>
                        <td><?php echo $result['id'];?></td>
                        <td><?php echo $result['studname'];?></td>
                        <td><?php echo $result['email'];?></td>
                        <td><?php echo $result['gender'];?></td>
                        <td><?php echo $result['dob'];?></td>
                        <td><?php echo $result['languag'];?></td>
                        <td><?php echo $result['addres'];?></td>
                        <td><a href="update.php?id=<?php echo $result['id'];?> " class="button2">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $result['id'];?> "  name="sub" class="button2">Remove</a></td>

                    </tr>
                    <?php } ?>    
                </tbody>
            </table>
</div>
</div>
</body>

</html>