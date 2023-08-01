<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
    <?php
        wp_head();
    ?>
</head>
<body>
    <nav class='nav'>
        <div>
            <?php 
            if (function_exists("the_custom_logo")) {
                $logo_id = get_theme_mod("custom_logo");
                $logo_data = wp_get_attachment_image_src($logo_id);
                $logo_src = $logo_data[0];
            } 
            ?>
            <img src="<?php echo $logo_src ?>" width="40"/>
        </div>
        <div>
            <div class="collapse-btn">
                <div class="collapse-btn__line"></div>
                <div class="collapse-btn__line"></div>
                <div class="collapse-btn__line"></div>
            </div>
            <div class="nav__content">
                <?php
                    wp_nav_menu([
                        "menu" => "primary",
                        "container" => "",
                        "theme_location" => "primary",
                        "items_wrap" => '<ul>%3$s</ul>',
                        "menu_class" => "nav-list",
                    ]);
                ?>
            </div>
        </div>
    </nav>