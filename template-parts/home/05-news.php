<?php

$news = get_field('tieu_de_tin_tuc');
$query = new WP_Query(
    array(
        'posts_per_page' => 5,
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'no_found_rows'  => true,
    ),
);
if (!$query->have_posts()) {
    return;
}

?>
<section class="news">
    <div class="container">
        <h2 class="section-heading">
            <?= esc_html($news['tieu_de']); ?>
        </h2>
        <div class="news__wrap">
            <?php
            global $count;
            while ($query->have_posts()):
                $query->the_post();
                get_template_part('template-parts/content');
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>