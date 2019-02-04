<?php
include 'insert.php';
?>
<?php
$name = $_POST['uname'];
$e_mail = $_POST['email'];
$phone = $_POST['phone'];
$car_number = $_POST['carnumber'];

mysqli_query($connect, "INSERT INTO register(uname,email,phone,carnumber)
VALUES ('$name','$e_mail','$phone','$car_number')");
if (mysqli_affected_rows($connect) > 0) {
    header("location: welcome.php");
} else {
    echo "data not added";
}
mysqli_close($connect);
?>