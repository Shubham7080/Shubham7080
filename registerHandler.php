
<?php 

require_once __DIR__.'/BuildQuery/Query.php';
require_once __DIR__.'/functions.php';



 $name = post('name');
 $email = post('email');




 $query = new Query();
 
if ($query->insert('staff',[
    "name"=>$name,
    "email"=>$email,
    ])
    ) {
    echo "data inserted with PK".$query->getId();
}
else {
    echo "insert error";
}
$update = new Query();
if(
    $update->update('emp',[
           'name'=>$name,
           'email'=>$email
       ])->where('id',$id)->commit()){
           echo "data updated";
       }
       else {
           echo "error";
       }
?>