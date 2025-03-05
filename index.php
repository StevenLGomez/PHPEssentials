
<?php

$server = "localhost";
$user = "root";
$pass = "";

$info = mysqli_connect($server, $user, $pass);

if (! $info)
{
    die("connection is not done successfully: " . mysqli_connect_error() );
}
// echo "Form Submitted Successfully";

$Name = $_POST['Name'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Description = $_POST['Description'];

$mysql = "INSERT INTO fullform (Name, Gender, Age, Email, Phone, Description, Date) VALUES
('$Name', '$Gender', '$Age' '$Email', '$Phone', '$Description', current_timestamp())";

// echo $mysql;

// if($info->query($mysql) == true){
//     echo "Form Submitted Successfully";
// }
// else {
//    echo "ERROR: $mysql <br /> $info->error()";
// }
// $info->close();

if ($_POST['Name'])
{
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to First Form</title>
    <link rel="stylesheet" href="CSS/style.css"></link>
</head>
<body>
    <div class="img">
    <div class="container"></div>
        <h1>Welcome to my official College Form</h1>
        <p>Enter your details and submit this form</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    
    </div>

    <script src="index.js"></script>

</body>
</html>





