<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $box = array("hello", "hi", "cool"); 
    echo "array is " . $box[0] . "," . $box[1] . " and " . $box[2] ."<br>";
    $num = array("hello"=>"1", "hi"=>"2", "cool"=>"3");
    foreach($num as $x => $x_value) {
    echo "box=" . $x . ", num=" . $x_value;
    echo "<br>";
    }
?>
</body>
</html>