<?php
function connectDB(){
    $severName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "quyphp";
    $conn = new mysqli($severName, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("connect error");
    }
    return $conn;

}
function queryDB($sql_txt){
    $conn = connectDB();
    $rs = $conn->query($sql_txt);
    $list = [];
    if($rs->num_rows>0){ // kiem tra xem co du lieu hay ko
        while ($row = $rs->fetch_assoc()){
            $list[] = $row;
        }
    }
    return $list;
}
function updateDB($sql_txt){
    $conn = connectDB();
    return $conn->query($sql_txt) === true;
}