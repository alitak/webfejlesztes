<?php

// @todo change to const
// @todo include file
// @todo create db managing class

$sql_l = mysqli_connect('localhost', 'root', 'a', 'webfejlesztes');

$sql = mysqli_query($sql_l, 'SELECT * FROM users');

while ($row = $sql->fetch_object()) {
    echo $row->id . chr(13) . $row->name;
}

mysqli_close($sql_l);
