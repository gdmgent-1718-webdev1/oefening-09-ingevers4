<?php

$title = 'Make a form, send with GET-method';
$message = "Contact us";

//als de verzendknop wordt gebruikt.
$isSubmitted = isset($_REQUEST['submit']);

if($isSubmitted) {

    $name = htmlentities($_GET['name'], ENT_QUOTES, 'UTF-8');
    $age = (int)$_GET['age'];
    $email = htmlentities($_GET['email'], ENT_QUOTES, 'UTF-8');
    $text = "Zoekresultaten voor zoekopdracht: Your name is {$name} and your age is {$age} and your email is {$email}";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
</head>
<body>
    <div class="container">

    <?php if ($isSubmitted): ?>
        <p><?=$text?><p>
    <?php else: ?>
    <h1><?=$message?></h1>
    <form action="" method="GET">
        <div>
            <input type="text" name="name" placeholder="name">
            <input type="text" name="age" placeholder="age">
            <input type="text" name="email" placeholder="email">
            <input type="submit" name="submit">
        </div>
    </form>
    </div>

    <?php endif ?>

    
</body>
</html>