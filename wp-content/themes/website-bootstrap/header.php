<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
        wp_title('|', true, 'right'); ?></title>
    <?php
    wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <?php
    wp_nav_menu('theme_location=top-menu'); ?>
</nav>
<main class="container">
    <div class="row">
        <div class="col-lg-8">
