

<?php

// Prints in array format
echo "<pre>";
print_r ($_POST);
// exit;

if (isset($_POST['submit']))
{
    echo $_POST["username"] . "<br />";
    echo $_POST["password"] . "<br />";
    echo $_POST["email"] . "<br />";
}


?>

<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="">
        <div>
            <label for="">Username:</label>
            <input type="text" placeholder="username" name="username">
        </div>
        <br />
        <div>
            <label for="">Password:</label>
            <input type="password" placeholder="password" name="password">
        </div>
        <br />
        <div>
            <label for="">Email:</label>
            <input type="email" placeholder="Email" name="email">
        </div>
        <br />
        <div>
            <button type="submit">Login Page</button>
        </div>
        <br />
    </form>
    <a href="./post_method.php">Home Page</a>
</body>
</html>

