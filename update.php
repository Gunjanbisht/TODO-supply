  <?php

$con = mysqli_connect("localhost", "root", "", "user");
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}

if (isset($_POST['gender']))  
{
    $gender = $_POST['gender'];
}

if (isset($_POST['birthDate'])) 
{
    $birthDate = $_POST['birthDate'];
}
if (isset($_POST['mobileNo']))
{
    $number = $_POST['mobileNo'];
}
if (isset($_POST['emailId']))
{
    $email = $_POST['emailId'];
}
$query_update = "UPDATE form SET name='$name',gender='$gender',birthDate='$birthDate',mobileNo='$mobileNo',emailId='$email' WHERE id='10'";
if (mysqli_query($con, $query_update))
{
    header("refresh:1; url=view.php");
} 
else 
{
    echo"not updated";
}
?>







