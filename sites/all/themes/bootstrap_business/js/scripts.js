(function ($) {
    $(document).ready(function () {
        $('.view-product-hot .views-row').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
        $('.view-product-list .views-row').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
	$('.view-ho-so-nang-luc .views-row').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });

	$('.views-field-field-embed a').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	    });

    })
})(jQuery)
