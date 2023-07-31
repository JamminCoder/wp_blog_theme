<?php 

get_header();
get_post();

?>


<main class='container'>
    <?php
        the_post();
        get_template_part("template-parts/content", "article");
    ?>
</main>


<?php get_footer() ?>

