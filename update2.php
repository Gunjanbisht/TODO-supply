
<?php
 if(isset($_GET['edit'])){
     $id=$_GET['edit'];
     $con=mysqli_connect("localhost","root","","user");

     $query="SELECT * FROM form WHERE id='$id'";
     $result=mysqli_query($con,$query);
     $data=mysqli_fetch_array($result);
    
      mysqli_close($con);
 
      }
 
 ?>
 
<!DOCTYPE html>
 <head></head>
 <body>
    
     <form action="update.php" method="post">
 <table border=1>
    
            <tr>
                
            <th>name</th>
            <td><input type="text" id="name" name="name" value="<?php echo $data['name']; ?>"></td>
            </tr>
            <th>gender</th>
            <td><input type="text" id="gender" name="gender" value="<?php echo $data['gender']; ?>"></td>
            </tr>
            <tr>
                
            <tr>
                <th>dateOfBirth</th>
                <td><input type="date" name="birthDate" value="<?php echo $data['birthDate']; ?>"></td>
            </tr>
            <tr>
                <th>mobileNo</th>
                <td><input type="number" name="mobileNo" id="mobileNo" value="<?php echo $data['mobileNo']; ?>"></td>
            </tr>
            <tr>
                <th>email</th>
                <td><input type="email" name="emailId" id="emailId" value="<?php echo $data['emailId']; ?>"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input type="password" name="password" id="password" value="<?php echo $data['password']; ?>"></td>
            </tr>
            <tr>
            <th>confirmPassword</th>
            <td><input type="password" name="cnfrmPass"></td>
            
            </tr>
                 
 
               <input type="hidden" id="id" value="<?php echo $data['id'];?>">
            
 </table>
     <input type="submit" name="update" value="update">
      
        </form>      
    </body>
</html>

                         
