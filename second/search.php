<html lang="en-US">

<head>
    <title>Contact</title>
    <style> table
    {
border-style:solid;
border-width:2px;
border-color:red;

    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    tr:nth-child(odd) {background-color: lightgray;}
    </style>
    
</head>

<body bgcolor='#f44242'>
        
            <?php
            include 'insert.php';
            ?>
            <?php
            $carnumber = $_POST['carnumber'];

            $sql = "SELECT ID, uname, email, phone FROM register WHERE carnumber='$carnumber'";
            $result = mysqli_query($connect, $sql);
            echo "<table border='1' align= 'center' cellpadding= '20px' width= '50%'>

          <tr>

          <th>Id</th>

          <th> Owner's name</th>

          <th>E-Mail</th>

          <th>Phone</th>

           </tr>";

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<tr>";

                    echo "<td>" . $row['ID'] . "</td>";

                    echo "<td>" . $row['uname'] . "</td>";

                    echo "<td>" . $row['email'] . "</td>";

                    echo "<td>" . $row['phone'] . "</td>";

                    echo "</tr>";

                }

                echo "</table>";
            } else {
                echo "0 results";
            }
            mysqli_close($connect);
            ?>
            </body>
            </html>