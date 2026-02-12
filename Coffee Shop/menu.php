<?php 
    include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel = "stlyesheet" href = "style.css">
    <script src = "script.js"></script>
</head>
<body>
    <?php include "navbar.php"?>
    <div id = "main-menu-container">
        <section id = "side-menu-container">
            <button class = "side-menu-button">Espresso Classics</button>
            <button class = "side-menu-button">Brewed Coffee</button>
            <button class = "side-menu-button">Hot Tea</button>
            <button class = "side-menu-button">Iced Tea</button>
            <button class = "side-menu-button">Iced Coffees</button>
            <button class = "side-menu-button">Refreshers</button>
            <button class = "side-menu-button">Breakfast</button>
            <button class = "side-menu-button">Pastries & Bakery</button>
            <button class = "side-menu-button">Sandwiches & Savory</button>
            <button class = "side-menu-button">Salads & Bowls</button>
            <button class = "side-menu-button">Iced Coffees</button>
        </section>
        <section id = "menu-container">
            
        </section>
    </div>
    <?php include "footer.php"?>
</body>
</html>