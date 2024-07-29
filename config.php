<?php
define('host', 'localhost');
define('user', 'root');
define('password', 'root');
define('dbname', 'skill_gap');

$conn = mysqli_connect(host, user, password, dbname);
if (mysqli_connect_errno()) {
    echo 'Failed connection: ' . mysqli_connect_errno();
} else {
    echo 'Connected';
}
?>
