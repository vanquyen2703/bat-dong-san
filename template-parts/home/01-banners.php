<?php
$banner = get_field('banner');

if ($banner):
    $desktop_image_url = !empty($banner['banner_desktop']['sizes']['large']) ? $banner['banner_desktop']['sizes']['large'] : '';
    $mobile_image_url = !empty($banner['banner_mobile']['sizes']['large']) ? $banner['banner_mobile']['sizes']['large'] : $desktop_image_url;
    $alt_text = !empty($banner['banner_mobile']['alt']) ? $banner['banner_mobile']['alt'] : '';
    ?>
                                    <section class="banner">
                                        <?php if (!empty($desktop_image_url)): ?>
                                                                   <img src="<?php echo esc_url($desktop_image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" class="banner__desktop" />
                                        <?php endif; ?>
                                        <?php if (!empty($mobile_image_url)): ?>
                                                                <img src="<?php echo esc_url($mobile_image_url); ?>" alt="<?php echo esc_attr($alt_text); ?>" class="banner__mobile" />
                                        <?php endif; ?>
                                        <div class="banner__wrap container">
                                            <div class="banner__shortcode">
                                                <?= do_shortcode('[form_search_bds]') ?> 
                                            </div>
                                            <!-- <div class="tabs banner__shortcode">
                                    <ul class="tabs-nav">
                                        <li><a href="#tab-1"><?= esc_html__('Mua bán', 'bat-dong-san'); ?></a></li>
                                        <li><a href="#tab-2"><?= esc_html__('Cho thuê', 'bat-dong-san'); ?></a></li>
                                        <li><a href="#tab-3"><?= esc_html__('Dự án', 'bat-dong-san'); ?></a></li>
                                    </ul>
                                    <div class="tabs-stage">
                                        <div id="tab-1">
                                        <?= do_shortcode('[form_search_bds]') ?>   
                                        </div>
                                            <div id="tab-2">
                                            <?= do_shortcode('[form_search_bds]') ?>     
                                        </div>
                                            <div id="tab-3">
                                            <?= do_shortcode('[form_search_bds]') ?>
                                        </div>
                                    </div>
                                </div> -->
                                        </div>
                                    </section>
<?php endif; ?>