<?php
global $count;
?>

<article <?php post_class('product-post'); ?> id="post-<?php the_ID(); ?>">
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