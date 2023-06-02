<?php

function db_connect()
{
    global $conn;
    $db = func_get_arg(0);
    $conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
    if (!$conn) {
        die("Kết nối không thành công" . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "UTF-8");
}

function db_query($string_query){
    global $conn;
    $query_string = mysqli_query($conn, $string_query);
    if(!$query_string){
       mysqli_error($conn);
    }
    return $query_string;
}
