
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptutorials";

$conn = new mysqlI($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("Connection Failed" . $conn->connect_error);
}

echo "We are connected";

?>


