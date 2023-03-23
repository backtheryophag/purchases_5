<?php
include './exec/connect.php';
if (!$_SESSION['user']){
    header('location: ../index.php');
}
include './src/head.php';
include './src/header.php';
include './exec/create_table.php';
$data = mysqli_fetch_all(mysqli_query($link, "select * from purchases"),1);
$tabl = create_table($data);
print_r($tabl);


?>

<!--select
a.id as act_no,
e.title as name,
ea.name as headphones,
ea.sn as sn,
a.createdate as creation,
a.closedate as uvolen,
a.condit as con
from acts a left join employee e on a.owner_id = e.id
left join earphones ea on e.earphones_id = ea.id*/-->