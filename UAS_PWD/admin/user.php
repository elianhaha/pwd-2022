<?php
$connect = mysqli_connect('localhost', 'root', '', 'test');

function delete($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM users WHERE id = '$id'");
    return mysqli_affected_rows($connect);
}
