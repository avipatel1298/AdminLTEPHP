<?php
if(isset($_GET['id']))
    {

$user_id=$_GET['id'];

$deletedata = new DB_con();

$sql=$deletedata->delete($user_id);

if($sql)
{

echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='oopview.php'</script>";
}
    }
?>