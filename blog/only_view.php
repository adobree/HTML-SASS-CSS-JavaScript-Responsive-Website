<?php

    include "logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>
<body>
   <div class="container">
        <?php foreach($query1 as $q){?>
            <div class="title">
                <h1><?php echo $q['title'];?></h1>
            </div>
            <p class="text"><?php echo $q['content'];?></p>
        <?php } ?>    
   </div>
</body>
</html>