<!DOCTYPE html>
<html>
<head>
    <title>Eligibility Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = intval($_POST["age"]);

        if ($age < 18) {
            echo "Hello $name, you are not eligible to vote.";
        } else {
            echo "Welcome $name to the online voting system.";
        }
    } else {
        echo "Form submission error.";
    }
    ?>
</body>
</html>
