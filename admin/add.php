<?php
include('../lib/function.php');
function add()
{
    $add_data = array(
        'id' => intval($_POST['id']),
        'ds_name' => escape($_POST['ds_name']),
        'ds_address' => escape($_POST['ds_address']),
        'ds_desc' => escape($_POST['ds_desc'])
    );
    save('danhsach', $add_data);
}
add();
