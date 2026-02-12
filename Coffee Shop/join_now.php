<?php
session_start();
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $code = trim($_POST['code']);
    
   $minlength = 3;
   $maxlength = 75;
   $x = 0;
   $fields = ['username' => $username, 'password' => $password, 'email' => $email, 'code' => $code];
   $errors = [];

   foreach ($fields as $fieldname => $fieldvalue) {
        if (strlen($fieldvalue) < $minlength) {
            $errors[$x] = $fieldname;
            $x++;
        }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="style.css">
    <title>Join now</title>
</head>
<body>
     <nav>
        <img src = "images/logo coffee.png">
    </nav>
    <div id = "form-container">
        <form action="join_now.php" method = "post">
            <h1>Join Coffee Co</h1>
            <p>Earn points with every purchase towards free drinks.</p>
            <br>
            <label>Username</label>
            <input type = "text" name = 'username' required>
            <label>password</label>
            <input type = "password" name = "password" required>
            <label>Email Address</label>
            <input type = "text" placeholder="email@example.com" name = "email" required>
            <div id = "verification-container">
                <input type = "number" placeholder = "Enter Code" name = "code" required>
                <a href = "#"></a>Send Code</a>
            </div>
            <?php
                if (isset($errors)) {
                    foreach ($errors as $error) {
                        echo "<p id = 'errors'>" . $error . " must be atleast " . $minlength . " characters</p>";
                    }  
                    unset($errors);
                }        
            ?>
            <button>Create Account</button>
        </form>
    </div>       
    <?php include "footer.php"?>
</body>
</html>