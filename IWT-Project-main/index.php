<?php

    session_start();

    if(isset($_GET["vehicle_type"]))
    {
        if($_SESSION) {
            setcookie('no_of_days',$_GET["numofdays"], time()+(5000*30), '/');
            header('Location: src/selectVehicle.php?vehicle_type='.$_GET["vehicle_type"].'&pickup_date='.$_GET["pickup_date"].'&return_date='.$_GET["return_date"].'&pickup_time='.$_GET["pickup_time"].'&return_time='.$_GET["return_time"].'&location='.$_GET["location"].'');
        }
        else {
            header("Location: src/login.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device- width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <title>GoGoCars</title>
</head>
<body>

    <!-- main headding row -->
    <div class="head">
        <!-- heading left -->
        <div class="headingLeft">
            <div class="headingLogoContainer">
                <img class="headingLogo" src="asset/home/logo.png" alt="">
            </div>
        </div>

        <!-- heading center -->
        <div class="headingCenter">
            <a class="headingCenterItem" href="#">Home</a>
            <a class="headingCenterItem" href="src/aboutus.php">About</a>
            <a class="headingCenterItem" href="src/services.php">Services</a>
            <a class="headingCenterItem" href="src/contactus.php">Contact</a>
            <?php if($_SESSION){echo '<a class="headingCenterItem" href="src/userProfile.php">My Profile</a>';} ?>
        </div>

        <!-- heading right -->
        <div class="headingRight">
            <div class="headRightItem">
                <?php echo $_SESSION ? 'Hellow '.$_SESSION["name"].'' : 'Hotline +94 717654324'; ?>
            </div>
        </div>
    </div>

    <!-- main body -->
    <div class="body">
        <script></script>
        <!-- option menu -->
        <div class="optionMenuContainer">
            <!-- video background -->
            <video autoplay muted loop src="asset/home/home-background-video.mp4"></video>

            <!-- form -->
            <form class="optionMenu" action="index.php" method="GET">
                <!-- pickup/return location -->
                <label class="optionMenuText" for="">Pickup / Return Location</label><br>
                <input type="text" placeholder="SLIIT Uni - Pittugala" class="optionMenuInput" name="location">

                <div class="optionMenuBottom">
                    <!-- pickup/return/number of days -->
                    <div class="optionMenuLeft">
                        <label class="optionMenuText" for="">Pickup Date</label><br>
                        <input class="optionMenuInput" type="date" placeholder="03/08/2023" name="pickup_date"><br>
                        <label class="optionMenuText" for="">Return Date</label><br>
                        <input class="optionMenuInput" type="date" placeholder="06/08/2023" name="return_date"><br>
                        <label class="optionMenuText" for="">Number of Days</label><br>
                        <input class="optionMenuInput" type="number" placeholder="03" name="numofdays" value=1>
                    </div>
                    <!-- pickup/return time/vehicle type -->
                    <div class="optionMenuRight">
                        <label class="optionMenuText" for="">Pickup Time</label><br>
                        <input class="optionMenuInput" type="time" placeholder="08:00" name="pickup_time"><br>
                        <label class="optionMenuText" for="">Return Time</label><br>
                        <input class="optionMenuInput" type="time" placeholder="13:00" name="return_time"><br>
                        <label class="optionMenuText" for="">Vehicle Type</label><br>
                        <select class="optionMenuInput" name="vehicle_type">
                            <option value="SUV and Cabs">SUVs & Cabs</option>
                            <option value="Cars">Cars</option>
                            <option value="Van and Busses">Vans & Busses</option>
                            <option value="Motorbikes">MotorBikes</option>
                            <option value="Tuk Tuk">Tuk Tuks</option>
                            <option value="Utility Vehicles">Utility Vehicles</option>
                        </select>
                        <div class="optionMenuSubmitBtn">
                            <button type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- why choose us -->
        <div class="chooseContainer">
            <div class="chooseBox">
                <!-- title -->
                <span class="chooseBoxTitle">Why Choose Us ?</span>
                <!-- body items -->
                <div class="chooseBoxBody">
                    <div class="chooseBoxBodyItem">
                        <img src="asset/home/car.png" class="chooseBoxBodyItemImage">
                        <div class="chooseBoxBodyItemText">Over 500 Vehicles</div>
                    </div>
                    <div class="chooseBoxBodyItem">
                        <img src="asset/home/person.png" class="chooseBoxBodyItemImage">
                        <div class="chooseBoxBodyItemText">Our Strength</div>
                    </div>
                    <div class="chooseBoxBodyItem">
                        <img src="asset/home/star.png" class="chooseBoxBodyItemImage">
                        <div class="chooseBoxBodyItemText">Insurance</div>
                    </div>
                    <div class="chooseBoxBodyItem">
                        <img src="asset/home/person.png" class="chooseBoxBodyItemImage">
                        <div class="chooseBoxBodyItemText">24/7 Breakdown Service</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact us -->
        <div class="bodyContactUsContainer">
            <div class="bodyContactUs">
                <span class="bodyContactUsTitle">You have any questions or need additional information ?</span>
                <!-- contact options -->
                <div class="bodyContactUsOptions">
                    <button onclick="location.href='src/contactus.html'" class="bodyContactUsButton">Contact Us</button>
                    <img src="asset/home/whatsapp.png" class="bodyContactUsicon" alt="">
                    <img src="asset/home/facebook-logo-2019.png" alt="" class="bodyContactUsicon">
                </div>
            </div>
        </div>

        <!-- membership -->
        <div class="bodyMembershipContainer">
            <div class="bodyMembership">
                <!-- membership left side -->
                <div class="bodyMembershipOptions">
                    <img src="asset/home/logo-black.png" alt="" class="bodyMembershipIcon">
                    <span class="bodyMembershipTitle">Stay with us for membership Benifits</span>
                </div>
                <!-- membership right side -->
                <div class="bodyMembershipOptions">
                    <button onclick="location.href = 'src/login.php';" class="bodyMembershipBtn">
                        <?php
                            if($_SESSION) {
                                echo 'Logout';
                            } else {
                                echo 'Login';
                            }
                        ?>
                    </button>
                    <a href="src/aboutus.html" class="bodyMembershipBtnTxt">Who are we ?</a>
                </div>
            </div>
        </div>
        
    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by Autolanka
    </div>
    
</body>
</html>