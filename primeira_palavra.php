<?php

$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

preg_match('/\b\w+\b/i', $texto, $result);

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1><?php echo $result[0] ?></h1>
</body>

</html>
