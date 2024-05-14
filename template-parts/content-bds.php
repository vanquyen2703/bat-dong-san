<?php
global $count;

$post_id = get_the_ID();
$info_bds = get_field('info_bds', $post_id);

?>
<div <?php post_class('bds-post'); ?> id="post-<?php the_ID(); ?>">
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
        <div class="info-bds">
            <?php if (!empty($info_bds['gia'])): ?>
                        <div class="info-item price">
                            <?php Flux\Icon::output('money') ?>
                            <?php echo esc_html($info_bds['gia']); ?>
                        </div>
            <?php endif; ?>
            <?php if (!empty($info_bds['dien_tich'])): ?>
                        <div class="info-item area">
                            <?php Flux\Icon::output('acreage') ?>
                            <?php echo esc_html($info_bds['dien_tich']); ?>
                        </div>
            <?php endif; ?>
        </div>
    </div>
</div>
