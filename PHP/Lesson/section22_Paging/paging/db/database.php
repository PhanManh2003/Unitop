<?php

// Connect PHP and MySQL
function db_connect()
{
    global $conn;
    $db = func_get_arg(0);
    $conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
    if (!$conn) {
        die("Fail to connect") . mysqli_connect_error();
    }
    // else {
    //     echo "Connect successfully";
    // }
}

// Perform a query 
function db_query($query_str)
{
    global $conn;
    $result = mysqli_query($conn, $query_str);
    if (!$result) {
        db_sql_error('Query Error', $query_str);
    }
    return $result;
}
// Get a record in DB
function db_fetch_row($query_str)
{
    $result = array();
    $mysqli_result = db_query($query_str);
    $result = mysqli_fetch_assoc($mysqli_result);
    mysqli_free_result($mysqli_result); // Giải phóng bộ nhớ của con trỏ trả về của câu query
    return $result;
}


// Get 1 array of records from DB
function db_fetch_array($query_str)
{
    $result = array();
    $mysqli_result = db_query($query_str);
    while ($row = mysqli_fetch_assoc($mysqli_result)) {
        $result[] = $row;
    }
    return $result;
}


// Get number of records
function db_num_rows($query_str)
{
    $mysqli_result = db_query($query_str);
    return mysqli_num_rows($mysqli_result);
}


// Insert 
function db_insert($table, $data)
{
    global $conn;
    $fields = "(" . implode(", ", array_keys($data)) . ")";
    $values = "";
    foreach ($data as $field => $value) {
        if ($value === NULL)
            $values .= "NULL, ";
        else
            $values .= "'" . escape_string($value) . "', ";
    }
    $values = substr($values, 0, -2);
    db_query("
            INSERT INTO `{$table}` $fields
            VALUES($values)
        ");
    return mysqli_insert_id($conn); // lấy ra ID(primary key) được sinh tự động từ câu lệnh INSERT mới nhất mà bạn đã thực thi trước đó.
}

// Update 
function db_update($table, $data, $where)
{
    global $conn;
    $sql = "";
    foreach ($data as $field => $value) {
        if ($value === NULL)
            $sql .= "$field=NULL, ";
        else
            $sql .= "$field='" . escape_string($value) . "', ";
    }
    $sql = substr($sql, 0, -2); // Lấy tất cả chuỗi $sql trừ 2 kí tự cuối cùng
    db_query("
            UPDATE `{$table}`
            SET $sql
            WHERE $where
   ");
    return mysqli_affected_rows($conn);
}

// Delete 
function db_delete($table, $where)
{
    global $conn;
    $query_string = "DELETE FROM `{$table}` WHERE $where";
    db_query($query_string);
    return mysqli_affected_rows($conn);
}

// Clean string
function escape_string($str)
{
    global $conn;
    return mysqli_real_escape_string($conn, $str); // hàm này được sử dụng để làm sạch chuỗi trước khi chèn vào câu lệnh SQL, nhằm ngăn chặn các cuộc tấn công SQL Injection
}

// Show SQL erro
function db_sql_error($message, $query_string = "")
{
    global $conn;

    $sqlerror = "<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
    $sqlerror .= "<tr><th colspan='2'>{$message}</th></tr>";
    $sqlerror .= ($query_string != "") ? "<tr><td nowrap> Query SQL</td><td nowrap>: " . $query_string . "</td></tr>\n" : "";
    $sqlerror .= "<tr><td nowrap> Error Number</td><td nowrap>: " . mysqli_errno($conn) . " " . mysqli_error($conn) . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Date</td><td nowrap>: " . date("D, F j, Y H:i:s") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> IP</td><td>: " . getenv("REMOTE_ADDR") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Browser</td><td nowrap>: " . getenv("HTTP_USER_AGENT") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Script</td><td nowrap>: " . getenv("REQUEST_URI") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Referer</td><td nowrap>: " . getenv("HTTP_REFERER") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> PHP Version </td><td>: " . PHP_VERSION . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> OS</td><td>: " . PHP_OS . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Server</td><td>: " . getenv("SERVER_SOFTWARE") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Server Name</td><td>: " . getenv("SERVER_NAME") . "</td></tr>\n";
    $sqlerror .= "</table>";
    $msgbox_messages = "<meta http-equiv=\"refresh\" content=\"9999\">\n<table class='smallgrey' cellspacing=1 cellpadding=0>" . $sqlerror . "</table>";
    echo $msgbox_messages;
    exit;
}
