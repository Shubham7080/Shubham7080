<?php 

require_once  __DIR__.'/BuildQuery/Query.php';

$id = $_GET['id'];
$query  = new Query();
if ($query->delete('staff')->where('id',$id)->commit()) {
  header('location:show.php');
}
else {
    echo "data not deleted";
}













?>