<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'basic-form';

$linkConnectDB = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
or die("Can not connect database");

mysqli_set_charset($linkConnectDB, 'UTF8');
