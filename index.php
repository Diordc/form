<?php  include "main.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">

    <input type="text" name='firstName'>

    <input type="email" name='email'>

    <input type="tel" name='tel'>

    <div>
        <p >
            <?php echo $sucess; ?>
        </p>
        <p >
            <?php echo $failed; ?>
        </p>
    </div>

    <button type='submit' name='submit' data-submit="...sending"></button>
    </form>

</body>
</html>