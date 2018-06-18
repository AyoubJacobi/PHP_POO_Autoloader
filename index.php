<?php
use \app\Html\BootsrapForm;
use \app\Autoload;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Theme Simply Me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php


require 'class/Autoloader.php';
Autoload::Register();
$form = new BootsrapForm($_POST);

/**var_dump(Text::whithZero(4));*/

?>
<form action="#" methode="post">
    <?php

    echo $form -> input('username');
    echo $form -> input('password');
    ?>

</form>

</body>


