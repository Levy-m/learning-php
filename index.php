<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Input Echo Sandbox</title>
        <style>
             body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            }
            input, select {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            }
            button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            }
        </style>
    </head>
    <body>
        <h1>PHP Input Echo Sandbox</h1>
        <form action="process.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="color">Favorite Colour:</label>
            <select id="color" name="color" required>
                <option value="">-- Select a color --</option>
                <option value="Red">Red</option>
                <option value="Blue">Blue</option>
                <option value="Green">Green</option>
                <option value="Yellow">Yellow</option>
                <option value="Purple">Purple</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </body>
</html>