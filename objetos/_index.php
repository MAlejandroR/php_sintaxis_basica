<?php
$options=array('options'=>array('default'=>5, 'min_range'=>0, 'max_range'=>9));

$priority=filter_input(INPUT_GET, 'priority', FILTER_VALIDATE_INT, $options);
var_dump($priority);

if (isset($_POST['submit'])) {
    $options =
        [
            'options' =>
                [
                    
                    'default' => "nobody",
                    'regexp' => "/^[a-zA-Z]+$/"
                ],

        ];

    $nombre = filter_var("12141",  FILTER_VALIDATE_REGEXP, $options);
    var_dump($nombre);

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text" name="nombre" id=""><br/>
    <input type="submit" name="submit" value="Enviar">


</form>
</body>
</html>
