<?php
include('../lib/function.php');

$storeData = array(
    'id' => intval($_POST['id']),
    'ds_name' => escape($_POST['name']),
    'ds_address' => escape($_POST['donvi']),
    'ds_desc' => escape($_POST['desc'])
);
save('danhsach', $storeData);

header('location:list.php');
