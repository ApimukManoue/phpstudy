<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Operator</title>
</head>
<body>
    <h1>Operator</h1>
    <?php
    $x=8;
    $y=5;

    $add=$x+$y;
    $Minus=$x-$y;
    $Multi=$x*$y;
    $Div=$x/$y;
    $Power=$x**$y;
    $mod=$x%$y;

    Echo '<p class="h2">add</p>'.$add;
    Echo '<p class="h2">Minus</p>'.$Minus;
    Echo '<p class="h2">Multi</p>'.$Multi;
    Echo '<p class="h2">Div</p>'.$Div;
    Echo '<p class="h2">Power</p>'. $Power;
    Echo '<p class="h2">mod</p>'.$mod;
    ?>    
</body>
</html>