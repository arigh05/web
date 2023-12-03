<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>
<body>

    <h2>PHP Form Handling</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>

        <input type="submit" value="Submit with POST">
    </form>

    <?php
        // Handling form data using POST method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);

            echo "<h3>Form Data Submitted using POST:</h3>";
            echo "Name: $name <br>";
            echo "Email: $email <br>";
        }
    ?>

    <hr>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <label for="name_get">Name:</label>
        <input type="text" name="name_get" required>
        <br>

        <label for="email_get">Email:</label>
        <input type="email" name="email_get" required>
        <br>

        <input type="submit" value="Submit with GET">
    </form>

    <?php
        // Handling form data using GET method
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $name_get = htmlspecialchars($_GET["name_get"]);
            $email_get = htmlspecialchars($_GET["email_get"]);

            echo "<h3>Form Data Submitted using GET:</h3>";
            echo "Name: $name_get <br>";
            echo "Email: $email_get <br>";
        }
    ?>

</body>
</html>
