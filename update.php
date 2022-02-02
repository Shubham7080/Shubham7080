<?php 

require_once __DIR__.'/BuildQuery/Query.php';
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
    
<form action="" method="POST">
Name:
<input type="text" name="name" id="" placeholder="Enter Updated Name"><br>
Email:
<input type="email" name="email" id="" placeholder="Enter Updated Email"><br>
<input type="submit" name="submit" id="" value="submit"><br>


    </form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
$name = post('name');
$email = post('email');
$id = $_GET['id'];

$query = new Query();

$check=$query->update('staff',[
    'name'=>$name,
    'email'=>$email,
])->where('id',$id)->commit();

if($check){
  header('location:show.php');
      }
      else {
         
          echo "error";
      }

    }
?>