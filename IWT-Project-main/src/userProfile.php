<?php
    include 'connect.php';
    session_start();

    $read = "SELECT * FROM user_table WHERE UserID = '$_SESSION[userId]'";
    $query = mysqli_query($conn, $read);
    $data = mysqli_fetch_assoc($query);

    if(isset($_POST["update"])) {
        header('location:editUser.php?editUserId='.$_SESSION["userId"].'');
    }
    if(isset($_POST["delete"])) {
        $delete = "DELETE FROM user_table WHERE UserID = '$_SESSION[userId]'";
        mysqli_query($conn, $delete);
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userProfile.css">
    <script src="../script.js"></script>
    <title>Administrator | User Dashboard</title>
</head>
<body>

    <!-- main headding row -->
    <div class="head">
        <!-- heading left -->
        <div class="headingLeft">
            <div class="headingLogoContainer">
                <img class="headingLogo" src="../asset/home/logo.png" alt="">
            </div>
        </div>

        <!-- heading center -->
        <div class="headingCenter">
            <a class="headingCenterItem" href="../index.php">Home</a>
            <a class="headingCenterItem" href="aboutus.php">About</a>
            <a class="headingCenterItem" href="services.php">Services</a>
            <a class="headingCenterItem" href="contactus.php">Contact</a>
            <?php if($_SESSION){echo '<a class="headingCenterItem" href="userProfile.php">My Profile</a>';} ?>
        </div>

        <!-- heading right -->
        <div class="headingRight">
            <div class="headRightItem">
                <?php echo $_SESSION ? 'Hellow '.$_SESSION["name"].'' : 'Hotline +94 717654324'; ?>
            </div>
        </div>
    </div>

    <!-- main body -->
    <div class="mainBody">
        
        <!-- right -->
        <div class="bodyRight">

            <!-- details -->
            <form action="" method="post">
                <table>
                    <tr>
                        <th>First Name : </th>
                        <td><?php echo $data["Firstname"]; ?></td>
                    </tr>
                    <tr>
                        <th>Last Name : </th>
                        <td><?php echo $data["Lastname"]; ?></td>
                    </tr>
                    <tr>
                        <th>Birthday : </th>
                        <td><?php echo $data["Birthday"]; ?></td>
                    </tr>
                    <tr>
                        <th>Mobile Number : </th>
                        <td><?php echo $data["Number"]; ?></td>
                    </tr>
                    <tr>
                        <th>Street : </th>
                        <td><?php echo $data["Street"]; ?></td>
                    </tr>
                    <tr>
                        <th>Town : </th>
                        <td><?php echo $data["Town"]; ?></td>
                    </tr>
                    <tr>
                        <th>City : </th>
                        <td><?php echo $data["City"]; ?></td>
                    </tr>
                    <tr>
                        <th>Username : </th>
                        <td><?php echo $data["Username"]; ?></td>
                    </tr>
                    <tr>
                        <th>Password : </th>
                        <td><?php echo $data["Password"]; ?></td>
                    </tr>
                    <tr>
                        <script src="../script.js"></script>
                        <td><button name="update">Update</button></td>
                        <td><button name="delete">Delete</button></td>
                    </tr>
                </table>
            </form>
        </div>

    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by GoGoCars
    </div>

</body>
</html>