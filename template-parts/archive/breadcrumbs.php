<div class="breadcrumbs">
    <div class="breadcrumb__wrap">
        <div class="container">
            <h1 class="archive-title">
                    <?php
                    $current_term = get_queried_object();
                    echo $current_term->name;
                    ?>
                </h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
            }
            ?>
        </div>
    </div>
</div>