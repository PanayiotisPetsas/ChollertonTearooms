<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World php script</title>
</head>
<body>
<p>
    <?php
    echo "Hello World!\n";
    $a=2;
    $b=4;
    $c=20 + 30 * $a + 25 * $b;
    echo "The value of c is: $c";
    for ($i = 0; $i<=12; $i++)
    {
        $twelve=12;
        $answer = 12 * $i;
        echo "$answer <br />";
    }
    ?>
</p>
</body>
</html>

/*
--------------.
Data types: | \.
--------------.
- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource
*/