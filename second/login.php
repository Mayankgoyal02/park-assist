<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: rgb(19, 176, 248);
}

/* Full-width input fields */
input[type=text], input[type=number] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border-radius: 8px;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=number]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: rgb(218, 19, 151);
    color: white;
    padding: 16px 20px;
    border-radius: 8px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.register {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="logincheck.php" method="POST">
  <div class="container">
    <h1><center>LOGIN</center></h1>
    <p><center>Please fill in this form to login your account.</center></p>
    <hr>

    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="uname" required>

    <label for="phone"><b>Mobile Number</b></label>
    <input type="number" placeholder="Enter phone" name="phone" required>

    <hr>

    <button type="submit" class="registerbtn">Login</button>
  </div>
  
  <div class="container register">
    <p>Don't have an account? <a href="index.php">Register</a>.</p>
  </div>
</form>

</body>
</html>