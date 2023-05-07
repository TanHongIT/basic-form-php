<?php

include('../lib/function.php');

$storeData = array(
    'id' => intval($_POST['id']),
    'ds_name' => escape($_POST['ds_name']),
    'ds_address' => escape($_POST['ds_address']),
    'ds_desc' => escape($_POST['ds_desc'])
);
save('danhsach', $storeData);

header('location:add.php');