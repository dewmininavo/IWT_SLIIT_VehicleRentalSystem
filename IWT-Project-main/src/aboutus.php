<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGoCars</title>
    <link rel="stylesheet" href="../css/aboutus.css">
    
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

    <!-- body -->
    <div class="section">
        <div class="title">
            <h1>About Us</h1>
        </div>
        <div class="services">

            <!-- service 1 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-calendar"></i>&nbsp;<br><br>
                </div>
                <h2>Mission</h2>
                <p>"GoGoCars Car Rental Service is your trusted partner in sustainable travel, providing innovative and customer-centric.""</p>
                <a href="#" class="button">Read More</a>
            </div>

            <!-- service 2 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-key"></i>&nbsp;<br><br>
                </div>
                <h2>Vision</h2>
                <p>"We envision a future where GoGoCars Car Rental is the epitome of convenience and sustainability in travel.."</p>
                <a href="#" class="button">Read More</a>
            </div>

            <!-- service 3 -->
            <div class="card">
                <div class="icon">
                    <i class="fas fa-medal"></i>&nbsp;<br><br>
                </div>
                <h2>Archivment</h2>
                <p>GoGoCars Car Rental Service has expanded globally, offering convenient access in major cities worldwide.."</p>
                <a href="#" class="button">Read More</a>
            </div>
            
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        Designed by GoGoCars
    </div>
</body>
</html>
