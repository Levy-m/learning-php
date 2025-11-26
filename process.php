<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $color = htmlspecialchars($_POST['color']);
    
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Result</title>";
    echo "<style>
            body {
                font-family: Arial, sans-serif;
                max-width: 500px;
                margin: 50px auto;
                padding: 20px;
            }
            .result {
                background-color: #f0f0f0e1;
                padding: 20px;
                border-radius: 5px;
                margin: 20px 0;
            }
            a {
                color: #0055ffff;
                text-decoration: none;
            }
          </style>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Result</h1>";
    echo "<div class='result'>";
    echo "<p>Hello <strong>" . $name . "</strong>, your favorite color is <strong>" . $color . "</strong>.</p>";
    echo "</div>";
    echo "<a href='index.php'>← Go back</a>";
    echo "</body>";
    echo "</html>";
    
} else {
    echo "Please submit the form first!";
}
?>