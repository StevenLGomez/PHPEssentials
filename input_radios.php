
<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input_radios.php" method="post">
        <div>
            <label for="">Select Any title:</label><br />
            <input type="radio" value="Web" name="title" id="">Web Development<br />
            <input type="radio" value="React" name="title" id="">React Developer<br />
            <input type="radio" value="PHP" name="title" id="">PHP Developer<br />
            <input type="submit" name="confirm" value="Confirm">
        </div>
        <br />
    </form>

    <?php 
    // Display results (easy method)
    if (isset($_POST["confirm"]))
    {
        $title = $_POST['title'];

        if ($title == 'Web')
        {
            echo "You selected the course: " . $title;
        }
        else if ($title == 'React')
        {
            echo "You selected the course: " . $title;
        }
        else if ($title == 'PHP')
        {
            echo "You selected the course: " . $title;
        }
        else
        {
            echo "Please select one of the courses";
        }

        // Display results (advanced method)
        echo "<br />";
        $title = isset($_POST["title"]) ? $_POST["title"] : null;
        if ($title === "Web" || $title === "React" || $title === "PHP")
        {
            echo "You Selected the Course: " . $title;
        }
        else
        {
            echo "Please select a Valid Course";
        }
    }

    ?>

</body>
</html>

