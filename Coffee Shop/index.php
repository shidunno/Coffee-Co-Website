<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Coffee Co</title>
</head>
<body>
    <?php include 'navbar.php';?>
    <header id = "hero">
        <img id = "background" src = "images/background.jpg">
        <div>
            <h1>Coffee Co: Brews & Bakes</h1>
            <h2>Crafting warm moments with every cup and every bite.</h2>
        </div>
        <img id = "coffeeProduct" src = "images/coffee hero.png">
    </header>
    <div id = "highlights">
        <h1>Top Picks</h1>
        <div class = "carousel">
            <div class = "group">
                <div class = "card"><p>Breakfast Blend: Regular Coffee</p><img src = "images/h1.jpg"></div> 
                <div class = "card"><p>Swedish Cinnamon Buns</p><img src = "images/h2.jpg"></div> 
                <div class = "card"><p>Bundt Cake</p><img src = "images/h3.jpg"></div> 
                <div class = "card"><p>Peanut Drizzle Croissant</p><img src = "images/h4.jpg"></div> 
                <div class = "card"><p>Chocolate Chip Cookie</p><img src = "images/h5.jpg"></div> 
                <div class = "card"><p>Breakfast Platter</p><img src = "images/h6.jpg"></div> 
            </div>
             <div aria-hidden class = "group">
                <div class = "card"><p>Breakfast Blend: Regular Coffee</p><img src = "images/h1.jpg"></div> 
                <div class = "card"><p>Swedish Cinnamon Buns</p><img src = "images/h2.jpg"></div> 
                <div class = "card"><p>Bundt Cake</p><img src = "images/h3.jpg"></div> 
                <div class = "card"><p>Peanut Drizzle Croissant</p><img src = "images/h4.jpg"></div> 
                <div class = "card"><p>Chocolate Chip Cookie</p><img src = "images/h5.jpg"></div> 
                <div class = "card"><p>Breakfast Platter</p><img src = "images/h6.jpg"></div> 
            </div>
        </div>
        
    </div>
    <?php include 'footer.php';?>
</body>
</html>