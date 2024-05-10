jQuery(function ($) {
    function gallerySlider() {
        $('#imageGallery').lightSlider({
            gallery: true,
            item: 1,
            mode: 'slide',
            auto: true,
            pause: 5000,
            loop: true,
            prevHtml: '<i class="fa fa-angle-left"></i>',
            nextHtml: '<i class="fa fa-angle-right"></i>',
            thumbItem: 5,
            autoWidth: false,
            enableDrag: false,
            currentPagerPosition: 'left',
            slideMargin: 0,
            thumbMargin: 10,
            galleryMargin: 10,
            onSliderLoad: function (el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }
        });
    }
    gallerySlider();
});