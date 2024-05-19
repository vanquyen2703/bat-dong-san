<?php
global $count;

$post_id = get_the_ID();
$info_bds = get_field('info_bds', $post_id);

?>
<div <?php post_class('project-post'); ?> id="post-<?php the_ID(); ?>">
    <div class="entry-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail($count === 1 ? 'medium_large' : 'post-thumbnail', ['alt' => get_the_title()]) ?>
        </a>
    </div>
    <div class="entry-content">
        <h3>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
    </div>
</div>
