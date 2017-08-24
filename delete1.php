<?php
$con=mysqli_connect("localhost","root","","user");
if(isset($_GET['del'])) 
{
    $id=$_GET['del'];
}

$q="DELETE FROM form WHERE id='$id'";
if(mysqli_query($con,$q))
{
    header("refresh:1; url=view.php");
}
else
{
    
    echo"not delete";
}

?>