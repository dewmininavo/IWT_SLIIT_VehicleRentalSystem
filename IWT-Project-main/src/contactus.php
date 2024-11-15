<?php
    session_start();
    include 'connect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO contact (name, email, subject, msg) VALUES ('$name', '$email', '$subject', '$msg')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>alert("Message sent successfully")</script>';
        }else{
            echo '<script>alert("Message sending failed")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contactus.css">
    <title>GoGoCars</title>
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
    <div class="body">
        <!-- left side -->
        <div class="bodyLeft">
            <div class="bodyLeftTitle">Send us a message</div>
            <form class="contactForm" method="POST" action="contactus.php">
                <label class="contactFormLabel">Name</label><br>
                <input type="text" class="contactFormInput" name="name"><br>

                <label class="contactFormLabel">Email</label><br>
                <input type="text" class="contactFormInput" name="email"><br>

                <label class="contactFormLabel">Subject</label><br>
                <input type="text" class="contactFormInput" name="subject"><br>

                <label class="contactFormLabel">Message</label><br>
                <textarea class="contactFormInput" id="" cols="30" rows="10" name="msg"></textarea>

                <button class="contactFormSubmitButton" onclick="" name="submit" type="submit">Send Message</button>
            </form>
        </div>

        <!-- right side -->
        <div class="bodyRight">
            <div class="bodyRightTitle">Contact us</div>
            <div class="bodyRightPara">We are open for any suggestions or just to have a chat</div>
            
            <!-- address/phone/email/website -->
            <div class="bodyRightDetails">
                <div class="item">
                    <img src="../asset/contact/location.png" class="icon" alt="">
                    <span class="title">Address : </span>
                    <span class="details">Autolanka, Malabe</span>
                </div>
                <div class="item">
                    <img src="../asset/contact/phone.png" class="icon" alt="">
                    <span class="title">Phone : </span>
                    <span class="details">+94 12345678</span>
                </div>
                <div class="item">
                    <img src="../asset/contact/email.png" class="icon" alt="">
                    <span class="title">Email : </span>
                    <span class="details">autolanka@gmail.com</span>
                </div>
                <div class="item">
                    <img src="../asset/contact/web.png" class="icon" alt="">
                    <span class="title">Web : </span>
                    <span class="details">www.autolanka.com</span>
                </div>
            </div>

            <!-- show previous messages -->
            <table>
                <?php
                    $sql = "SELECT * FROM contact";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '<td><button onclick="location.href=\'contactus_update.php?id='.$row["id"].'\'">Update</button></td>';
                            echo '<td><button onclick="location.href=\'contactus_delete.php?id='.$row["id"].'\'">Delete</button></td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </table>
        </div>
    </div>

    <!-- main footer -->
    <div class="footer">
        Designed by GoGoCars
    </div>
    
</body>
</html>