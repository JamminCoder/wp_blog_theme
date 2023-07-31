<?php
get_header();



$posts = get_posts();

foreach ($posts as $post) {
    the_post();

    ?>
    <div>
        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </div>

    <?php
}

get_footer();