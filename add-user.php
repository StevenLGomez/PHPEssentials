
<?php
include("config/database.php");

if(isset($_POST['submit'])){
    extract($_POST);

    $sql = "INSERT INTO userdata (username, password, email)
    VALUES
    ('$username', '$password', '$email')";

    $result = conn->query($sql);
//    $result = 0;
    if ($result)
    {
        echo "User has been created";
    }
    else
    {
        echo "Something Wrong";
    }
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Users</title>
</head>
<body>
    <section>
        <h2>Register Form</h2>
        <form action="add-user.php" method ="post">
        <div class="container">

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Username" name="username" required>
            <br />

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br />

            <label for="email"><b>Email</b></label>
            <input type="password" placeholder="Enter Email" name="email" required>
            <br />

            <button type="submit" name="submit">Signup</button>
        </div>
        </form>
        <div class="container">
            <a href="users.php" class="footerbtn">Users</a>

            <a href="logout.php" class="footerbtn">Log out</a>
        </div>
    </section>
    
</body>
</html>

