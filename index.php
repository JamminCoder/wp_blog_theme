<?php
get_header();

$page = get_queried_object();
setup_postdata($page);

the_content();

get_footer();