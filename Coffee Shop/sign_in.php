<?php
    include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <script src = "script.js"></script>
    <title>Sign in</title>
</head>
<body>
    <nav>
        <img src = "images/logo coffee.png">
    </nav>
    <div id = "form-container">
        <form action = 'sign_in.php' method = 'post'>
            <h1>Sign in to Coffee Co</h1>
            <p>Find your favorite corner and your perfect cup. Better coffee, better moments.</p>
            <label for = "emailTxtbox">Email</label>
            <input name = "emailTxtbox" type = "text"><br>
            <label for = "passTxtbox">Password</label>
            <input name = "passTxtbox" type = "password">
            <div id = "checkbox-container">
                <input type = "checkbox" id = "checkbox">
                <p>Keep me Signed in</p>
                <a href = "#">forgot password?</a>
            </div>
            <button type = "submit">Sign in</button>
        </form>
    </div>
    <?php include 'footer.php';?>
</body>
</html>