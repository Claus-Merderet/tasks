<!doctype html>
<html lang="en">
<head>
    <?php include_once $_SERVER['D:main'].'assets/head.html';?>
</head>
<body>
<?php include_once $_SERVER['D:main'].'assets/navbar.html';?>

<main role="main" class="container">
    <div class="jumbotron">
        <h1>Lorem Ipsum</h1>
     <?php
     include $_SERVER['D:main'].'inc/trim_text.php';
     ?>
    </div>
    <div class="jumbotron">
        <h1>Lorem Ipsum</h1>
        <?php
        include $_SERVER['D:main'].'inc/trim_text.php';
        ?>
    </div>
</main>
</html>
