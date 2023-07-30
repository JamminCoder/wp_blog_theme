<footer>
    <?php 
        wp_nav_menu([
            "menu" => "footer",
            "container" => "",
            "theme_location" => "footer",
            "items_wrap" => '<ul>%3$s</ul>'
        ]);

        wp_footer(); 
    ?>
</footer>
</body>
</html>