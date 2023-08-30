<?php #db.inc.php
require 'env.php';
if ( function_exists( 'mysqli_connect' ) ) {
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
} else {
    die("MySQL PHP Extension not detected.");
}

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
?>