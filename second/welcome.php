<html>

<head>
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1 {
            margin-left: 40%;
            margin-top: 10px;
           
            display: inline-block;
        }
        /* The side navigation menu */

        .sidenav {
            height: 100%;
            /* 100% Full-height */
            width: 0;
            /* 0 width - change this with JavaScript */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Stay on top */
            top: 0;
            /* Stay at the top */
            left: 0;
            background-color: #111;
            /* Black*/
            overflow-x: hidden;
            /* Disable horizontal scroll */
            padding-top: 60px;
            /* Place content 60px from the top */
            transition: 0.5s;
            /* 0.5 second transition effect to slide in the sidenav */
        }

        /* The navigation menu links */

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */

        .sidenav a:hover {
            color: #f1f1f1;
        }

        /* Position and style the close button (top right corner) */

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        /* Style page content - use this if you want to push the page content to the right when you open the side navigation */

        #main {
            transition: margin-left .5s;
            padding: 20px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
            .sidenav a {
                font-size: 18px;
            }
        }
        .container {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.container img {margin-left: auto;
                margin-right:auto;}

.container .content {
    position: absolute;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Black background with transparency */
    color: #f1f1f1;
    width: 100%;
    height:auto;
    padding: 10px;
}
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
    border-radius: 8px;
}

form.example button {
    float: right;
    width: 18%;
    height: 40px;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border-radius: 8px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}

    </style>
</head>

<body bgcolor="#336699">

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="about.php">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <!-- Use any element to open the sidenav -->
                                                                   
   <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <h1>SUCCESS</h1> 
    <hr> 
    <div class="container">
  <img src="park.png" alt="Notebook" style="width:100%,height:100%;">
  <div class="content">
    <h2>PARK ASSIST</h2>
    <p><b>Simplifying City Life<b></p>
  </div>
</div> 
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <div align="center" style="background-color: rgb(0,0,0);color: aquamarine;padding: 20px; margin:10px" style="width: 600px;height: 300px">
SOLUTIONS AT YOUR TIPS!!
    </div>
<h2><font color="white">Search the vehicle by Car Number</font></h2>

<p><font color="white">Are you stuck?</font></p>
<form class="example" action="search.php" method="POST">
  <input type="text" placeholder="Search.." name="carnumber">
  <button type="submit"><i class="fa fa-search">Search</i></button>
</form>


</body>

</html>