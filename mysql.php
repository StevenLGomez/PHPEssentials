
<?php
include ("config/database.php");

// $sql = "UPDATE users SET username = 'Joe' WHERE id = 1";
$sql = "DELETE FROM users WHERE id = 1";

$response = $conn->query($sql);
if ($response)
{
    echo "Success";
}
else
{
    echo "FAILED";
}
?>

