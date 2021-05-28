<DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Server Response</h1>
    <?php
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Your input: " . $_POST['test1'] . "<br>";
    ?>
</body>