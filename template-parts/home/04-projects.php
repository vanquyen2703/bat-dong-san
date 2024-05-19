<?php

$news = get_field('project');
$query = new WP_Query(
    array(
        'post_type'      => 'nha-dat-mua-ban',
        'posts_per_page' => 5,
        'post_status'    => 'publish',
        'no_found_rows'  => true,
    ),
);
if (!$query->have_posts()) {
    return;
}

?>
<section class="projects">
    <div class="container">
        <h2 class="section-heading">
            <?= esc_html($news['title_project']); ?>
        </h2>
        <div class="projects__wrap">
            <?php
            global $count;
            while ($query->have_posts()):
                $query->the_post();
                   get_template_part('template-parts/content-project');
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>