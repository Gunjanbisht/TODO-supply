                                                                                                                                                                          <?php
     $con=mysqli_connect("localhost","root","","user");
     $r="SELECT * FROM form";
     $status=mysqli_query($con,$r);
     $num=mysqli_num_rows($status);
     mysqli_close($con);
?>
<!DOCTYPE html>
    <head></head>
    <body>
<table border="">
    <th>id</th>   
    <th>name</th>
    <th>gender</th>
    <th>birthDate</th>
    <th>mobileNo</th>
    <th>emailId</th>
    <th>update</th>
    <th>delete</th>
    
  <?php
        
        for($i=1;$i<=$num;$i++){
            
          
        $data=mysqli_fetch_array($status);

    ?>
     
<tr>
   
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
     <td><?php echo $data['gender']; ?></td>
     <td><?php echo $data['birthDate']; ?></td>
     <td><?php echo $data['mobileNo']; ?></td>
      <td><?php echo $data['emailId']; ?></td>
       
       <td><a href="update2.php?edit=<?php echo $data['id']; ?>">update</a></td>
       <td><a href="delete1.php?del=<?php echo $data['id']; ?>">delete</a></td>
</tr>
<?php
        }
        ?>
        </table>
    </body>
</html>

      
    