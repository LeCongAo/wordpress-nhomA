<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="box-header">
            <br>
            <h1><?php bloginfo('name'); ?></h1>
            <h4><?php bloginfo('description'); ?></h4>
        </header>

