<!DOCTYPE html>
<html>
<head>
    <title>Discriminant Calculator</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        input { margin-bottom: 10px; padding: 10px; width: 250px; }
        button { padding: 10px 20px; }
        #result { margin-top: 20px; font-size: 20px; font-weight: bold; }
    </style>
</head>
<body>

<h1>Discriminant of a Quadratic Equation</h1>

<form method="POST">
    A <br>
    <input type="number" name="a" placeholder="Value of a"><br>

    B <br>
    <input type="number" name="b" placeholder="Value of b"><br>

    C <br>
    <input type="number" name="c" placeholder="Value of c"><br>

    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if ($a !== "" && $b !== "" && $c !== "") {
        $D = ($b * $b) - (4 * $a * $c);
        echo "<div id='result'>Discriminant = $D</div>";
    } else {
        echo "<div id='result'>Please fill all fields.</div>";
    }
}
?>

</body>
</html>