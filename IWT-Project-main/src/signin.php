 <?php

    include 'connect.php';

    //get data from signin.html
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $number = $_POST['number'];
        $street = $_POST['street'];
        $town = $_POST['town'];
        $city = $_POST['city'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_pass = $_POST['confirm-password'];
        $avatar = $_POST['image'];

        //send data to database
        $create = "INSERT INTO user_table (Firstname, Lastname, Birthday, Number, Street, Town, City, Username, Password, Image) 
                VALUES ('$firstname', '$lastname', '$birthday', '$number', '$street', '$town', '$city', '$username', '$password', '$avatar')";

        if($password != $confirm_pass) {
            echo "<script>alert('Password does not match. Please check again');</script>";
        }
        elseif($number < 10) {
            echo "<script>alert('Invalid Mobile Number. Please check again');</script>";
        }
        else {
            try {
                mysqli_query($conn, $create);
                echo "<script>
                       if(confirm('Registration Successful')) {
                           location.href = 'login.php';
                       }
                       </script>";
            } 
            catch (mysqli_sql_exception) {
                echo "<script>alert('Registration Failed');</script>";
            }
        }
        
    }
    mysqli_close($conn);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>GoGoCars</title>
    <link rel="stylesheet" href="../css/signin.css">
</head>
<body>

    <div class="main">
        <!-- title -->
        <h4>Create Brand New Account</h4>

        <form action="signin.php" method="POST">
            <div class="details">
                <!-- first name -->
                <div class="input-box">
                    <span class="user">First Name</span>
                    <input type="text" placeholder="your first name" name="firstname" required>
                </div>

                <!-- last name -->
                <div class="input-box">
                    <span class="user">Last Name</span>
                    <input type="text" placeholder="your last name" name="lastname" required>
                </div>

                <!-- DOB -->
                <div class="input-box">
                    <span class="user">Date of Birth</span>
                    <input type="date" placeholder="dd/mm/yyyy" name="birthday" required>
                </div>

                <!-- mobile number -->
                <div class="input-box">
                    <span class="user">Mobile Phone Number</span>
                    <input type="number" placeholder="Phone Number" name="number" required>
                </div>

                <!-- address -->
                <div class="input-box1">
                    <span class="user1">Home Address</span>
                    <input type="text" placeholder="Street No" name="street" required>
                    <input type="text" placeholder="Town" name="town" required>
                    <input type="text" placeholder="City" name="city" required>
                </div>

                <!-- username -->
                <div class="input-box1">
                    <span class="user1">Username</span>
                    <input type="text" placeholder="Type username" name="username" required>
                </div>

                <!-- new password -->
                <div class="input-box1">
                    <span class="user1">Password</span>
                    <input type="password" placeholder="password" name="password" required>
                </div>

                <!-- confirm password -->
                <div class="input-box1">
                    <span class="user1">Confirm Password</span>
                    <input type="password" placeholder="Confirm password" name="confirm-password" required>
                </div>

                <div class="input-box1">
                    <span class="user1">Avatar</span>
                    <input type="text" placeholder="Input Avatar Link" name="image">
                </div>
                
                <!-- create account button -->
                <input type="submit" name="submit" class="create" value="Create Account">
                
            </div>

        </form>
      
    </div>
    </body>
    </html>