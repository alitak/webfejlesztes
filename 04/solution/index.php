<?php

include('constants.php');
include('Database.php');
include('DatabaseUsers.php');
include('DatabaseRooms.php');

$db = new Database(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
//var_dump($db::getI());
//$db2 = new Database(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
//var_dump($db2::getI());

$users = new DatabaseUsers();
foreach ($users->all() as $user) {
    echo $user['id'] . ' | ' . $user['name'] . '<br />';
}

$rooms = new DatabaseRooms();
foreach ($rooms->all() as $room) {
    echo $room['id'] . ' | ' . $room['code'] . '<br />';
}

var_dump($rooms->find(1));
var_dump($users->find(2));

$db->close();
