<?php
require('config/database.php');

/**
 * @param $table
 * @param $options
 * @return array|void
 */
function get_all($table, $options = array())
{
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE '.$options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY '.$options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT '.$options['offset'].','.$options['limit'] : '';
    global $linkConnectDB;
    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
    $query = mysqli_query($linkConnectDB, $sql) or die(mysqli_error($linkConnectDB));
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}

/**
 * @param $table
 * @param $id
 * @param $select
 * @return array|false|void|null
 */
function get_a_record($table, $id, $select = '*')
{
    $id = intval($id);
    global $linkConnectDB;
    $sql = "SELECT $select FROM `$table` WHERE id=$id";
    $query = mysqli_query($linkConnectDB, $sql) or die(mysqli_error($linkConnectDB));
    $data = null;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $data;
}

/**
 * @param $str
 * @return string
 */
function escape($str)
{
    global $linkConnectDB;
    return mysqli_real_escape_string($linkConnectDB, $str);
}

/**
 * @param $table
 * @param $data
 * @return int|string|void
 */
function save($table, $data = array())
{
    $values = array();
    global $linkConnectDB;
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($linkConnectDB, $value);
        $values[] = "`$key`='$value'";
    }
    $id = intval($data['id']);
    if ($id > 0) {
        $sql = "UPDATE `$table` SET ".implode(',', $values)." WHERE id=$id";
    } else {
        $sql = "INSERT INTO `$table` SET ".implode(',', $values);
    }
    mysqli_query($linkConnectDB, $sql) or die(mysqli_error($linkConnectDB));
    return ($id > 0) ? $id : mysqli_insert_id($linkConnectDB);
}

/**
 * @param $table
 * @param $options
 * @param $select
 * @return array|false|void|null
 */
function select_a_record($table, $options = array(), $select = '*')
{
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE '.$options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY '.$options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT '.$options['offset'].','.$options['limit'] : '';
    global $linkConnectDB;
    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
    $query = mysqli_query($linkConnectDB, $sql) or die(mysqli_error($linkConnectDB));
    $data = null;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $data;
}

/**
 * @param $id
 * @return void
 */
function ds_delete($id)
{
    global $linkConnectDB;
    $id = intval($id);
    $sql = "DELETE FROM danhsach WHERE id=$id";
    mysqli_query($linkConnectDB, $sql) or die(mysqli_error($linkConnectDB));
}