<?php
    get_header();
    the_title();
    the_content();
?>


<h2>Postitused</h2>
<?php wp_nav_menu(array('theme_location' => 'extra-menu'));?>
<?php
    get_footer();
?>