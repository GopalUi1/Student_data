<html>
    <head>
        <title>Delete Form</title>
</head>
<body>
<?php
 require('db.php');
    
    

 $ids= $_GET['id']; 


$query="DELETE  FROM `student` WHERE id='$ids'";
$data=mysqli_query($con,$query);
?>
<script>
alert('Data Deleted');
window.location.href='index.php';
</script>
</body>
