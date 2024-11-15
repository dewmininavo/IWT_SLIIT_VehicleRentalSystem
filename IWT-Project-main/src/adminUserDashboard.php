<?php
    include 'connect.php';
    
    //read data from database
    $readUser = "SELECT * FROM user_table";
    $userArray = mysqli_query($conn, $readUser); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminUserDashboard.css">
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
            <a class="headingCenterItem" href="adminDashboard.php">Dashboard</a>
            <a class="headingCenterItem" href="adminVehicleDashboard.php">Vehicles</a>
            <a class="headingCenterItem" href="adminUserDashboard.php">Users</a>
            <a class="headingCenterItem" href="adminAddVehicle.php">New Vehicle</a>
        </div>

        <!-- heading right -->
        <div class="headingRight">
            <div class="headRightItem">Hellow Boss</div>
        </div>
    </div>

    <!-- search bar -->
    <div class="searchBar">
        <input type="text">
        <button type="submit">Search</button>
    </div>
    
    <!-- items body -->
    <div class="container">
        <script src="../script.js"></script>
        <?php
            while($user = mysqli_fetch_assoc($userArray)){
            echo '
                <div class="element">
                    <!-- left side contents -->
                    <div class="elementLeft">
                        <span class="elementDetail">User ID : '.$user["UserID"].'</span>
                        <span class="elementDetail">Name : '.$user["Firstname"].' '.$user["Lastname"].'</span>
                        <span class="elementDetail">Mobile : '.$user["Number"].'</span>
                    </div>

                    <!-- center contents -->
                    <div class="elementImage">
                        <img src="'.$user["Image"].'">
                    </div>
                    
                    <!-- right side contents -->
                    <div class="elementRight">
                        <button onclick="location.href=\'editUser.php?editUserId='.$user["UserID"].'\'" class="elementEdit">Edit</button>
                        <button onclick="deleteUserConfirm('.$user["UserID"].')" class="elementDelete">Delete</button>
                    </div>
                </div>
                ';
            }
            ?>
        </div>

    <!-- main footer -->
    <div class="footer">
        Designed by GoGoCars
    </div>

</body>
</html>