<?php
include "config.php";
if(isset($_GET['id']))
    {

$user_id = $_GET['id'];

$deletedata = new DB_con();

$sql = $deletedata->delete($user_id);

if($sql)    
{
 echo "success";
    
}
else
{
    echo "error";
}
}
    
?>