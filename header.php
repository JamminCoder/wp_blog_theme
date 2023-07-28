<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        wp_head();
    ?>
</head>
<body>
    <?php
        wp_nav_menu([
            "menu" => "primary",
            "container" => "",
            "theme_location" => "primary",
            "items_wrap" => '<ul>%3$s</ul>'
        ]);
    ?>