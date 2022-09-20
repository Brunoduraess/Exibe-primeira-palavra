<?php

$texto = "Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.";

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