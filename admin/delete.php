<?php
include('../lib/function.php');

$userId = intval($_GET['user_id']);
ds_delete($userId);

header('location:list.php');