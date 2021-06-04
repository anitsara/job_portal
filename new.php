<?php
$data = $_GET['data'];

$data=($data*3)-3;

$query = mysqli_query($c, "select * x limit $data,10");
while(mysqli_fetch_array($query)){
    
}
$v="select count x";
$data = $v/3;
for($a=0;$a<=$v;$a++)
{
    echo $a;
}
?>