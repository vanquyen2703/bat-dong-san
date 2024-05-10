<?php

namespace Flux;

class RemoveCate
{


    public function __construct()
    {
        add_filter('get_the_archive_title', 'prefix_category_title');
    }

    public function prefix_category_title($title)
    {
        if (is_category()) {
            $title = single_cat_title('', false);
        }
        return $title;
    }
}