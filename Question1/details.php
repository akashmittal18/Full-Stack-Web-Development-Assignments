
<!DOCTYPE html>
<html>
<head>


	<title>q1</title>
</head >

 
</head>
<style>
table, th, td {
  border: 2px solid black;
  width:1100px;
}

</style>
<body>

<Center>
  <table>
        <tr>
           <th>Enrollment No</th>
           <th>NAME</th>
           <th>AGE</th>
           <th>COURSE</th>
           <th>BRANCH</th>
           <th>CONTACT</th>
           <th>EMAIL</th>
           <th>ACTIONS</th>

        </tr><br>
 <?php
     include 'config.php';

   $sql =  "SELECT * FROM details";
   $result=mysqli_query($conn,$sql);
   while($row = mysqli_fetch_array($result))
   {
   ?>
     <tr>
      <td><?php echo $row['enroll'];?></td>
       <td> <?php echo $row['name'];?></td>
       <td> <?php echo $row['age'];?></td>
       <td><?php echo $row['course'];?></td>
       <td><?php echo $row['branch'];?></td>
       <td> <?php echo $row['contact'];?></td>
       <td> <?php echo $row['email'];?></td>
       <td><button><a href="edit.php?enroll=<?php echo ($row["enroll"]); ?>">Edit </a></button><button><a href="delete.php?enroll=<?php echo ($row["enroll"]); ?>">  delete</a></button></td>
     </tr>
    <?php
   }
 ?>
 </table>
 <button><a href="insert.html">Add new data</a></button>
</center>
</body>
</html>
