<?php

$news = get_field('tin_tức');
$query = new WP_Query(
    array(
        'post_type'      => 'nha-dat-mua-ban',
        'posts_per_page' => 8,
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
        <h2>
            <?= esc_html($news['tieu_de']); ?>
        </h2>
        <div class="news__wrap">
            <?php
            global $count;
            while ($query->have_posts()):
                $query->the_post();
                get_template_part('template-parts/content-bds');
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>