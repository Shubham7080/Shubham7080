<?php 

include_once __DIR__.'/BuildQuery/Query.php';
$query = new Query();



$records = $query->select("*")->table('staff')->allRecords();

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
    <table border="2" >
        <th>Id</th>
<th>Name</th>
<th>Email</th>
<th colspan="2" >Action</th>
<?php 

foreach ($records as $row): 
    ?>
    <tr>
    <td><?php echo $row->id; ?></td>
    <td><?php echo $row->name; ?></td>
    <td><?php echo $row->email; ?></td>
    <td><a href="delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
    <td><a href="update.php?id=<?php echo $row->id; ?>">Update</a></td>
</tr>
<?php
endforeach;
?>

    </table>
</body>
</html>

