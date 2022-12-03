<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site for Portfolio">
    <title>Resume</title>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <?php
    wp_nav_menu([
        'container'       => 'div',
        'container_class' => 'container',
    ]) ?>
</header>