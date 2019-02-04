<?php
include 'insert.php';
?>
<?php
$username = $_POST['uname'];
$mobile = $_POST['phone'];
$username= stripcslashes($username);
$mobile= stripcslashes($mobile);
$username= mysqli_real_escape_string($connect,$_POST['uname']);
$mobile= mysqli_real_escape_string($connect,$_POST['phone']);

$result= mysqli_query($connect,"SELECT * FROM register WHERE uname = '$username' AND phone = '$mobile'")
or die("failed to query database" .mysqli_error());
$row= mysqli_fetch_array($result);
if ($row['uname']==$username && $row['phone']==$mobile){
    header("location: welcome.php");
} else {
    echo "failed";
}
?>