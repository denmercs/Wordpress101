/**
 * Created by test on 3/27/2017.
 */
(function($){
    wp.customize('ju_header_show_search', function(value) {
        value.bind(function(newVal) {
            if(newVal) {
                $("#top-search").show();
            } else {
                $("#top-search").hide();
            }
        });
    });

    wp.customize('ju_header_show_cart', function(value) {
        value.bind(function(newVal) {
            if(newVal) {1
                $("#top-cart").show();
            } else {
                $("#top-cart").hide();
            }
        });
    });
})(jQuery);