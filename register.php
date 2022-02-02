<?php 

require_once __DIR__.'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo url('registerHandler.php'); ?>" method="POST">
Name:
<input type="text" name="name" id="" placeholder="enter name"><br>
Email:
<input type="email" name="email" id="" placeholder="enter email"><br>
<input type="submit" name="submit" id="" value="submit"><br>


    </form>
</body>
</html>
