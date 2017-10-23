Number.prototype.formatMoney = function(c, d, t){
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
(function ($) {
    $(document).ready(function () {
        $('.view-product-hot .views-row').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });
        $('.view-product-list .views-row').matchHeight({
            byRow: false,
            property: 'height',
            target: null,
            remove: false
        });
	$('.view-ho-so-nang-luc .views-row').matchHeight({
            byRow: false,
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
	
	$('.view-partner .views-field-field-image img').each(function(){
		var cw = $(this).width();
		$(this).css({
		    'height': Math.round(cw*9/16) + 'px'
		});
	})


    $('.html').on('change','#webform-client-form-26 input,#webform-client-form-26 select',function(){
            var dForm=$('.html').find('#webform-client-form-26');
        if(
            dForm.find('#edit-submitted-layout-left-name').val() !="" &&
            dForm.find('#edit-submitted-layout-left-type').val() !="" &&
            dForm.find('#edit-submitted-layout-left-office').val() !="" &&
            dForm.find('#edit-submitted-layout-left-phone').val() !="" &&
            dForm.find('#edit-submitted-layout-right-number').val()!="" &&
            dForm.find('#edit-submitted-layout-right-so-lan-thue').val()!="" &&
            dForm.find('#edit-submitted-layout-right-email').val()!="" &&
            dForm.find('#edit-submitted-layout-right-lease-term').val()!=""
        ){
            dForm.find('.webform-component--layout-right--price-1 .price-list .price').hide();
            dForm.find('.webform-component--layout-right--price-1').show();
            var price=0;
            var type=dForm.find('#edit-submitted-layout-left-type').val();
            if (type=='Nhà nước'){
                dForm.find('.webform-component--layout-right--price-1 .price-list .price-1').show();
                price=parseInt(dForm.find('.webform-component--layout-right--price-1 .price-list .price-1').attr('data-price'));
            }else if(type=='Công ty'){
                dForm.find('.webform-component--layout-right--price-1 .price-list .price-2').show();
                price=parseInt(dForm.find('.webform-component--layout-right--price-1 .price-list .price-2').attr('data-price'));
            }else if(type=='Cá nhân'){
                dForm.find('.webform-component--layout-right--price-1 .price-list .price-3').show();
                price=parseInt(dForm.find('.webform-component--layout-right--price-1 .price-list .price-3').attr('data-price'));
            }else{

            }
            var quantity=parseInt(dForm.find('#edit-submitted-layout-right-number').val());
            var period=parseInt(dForm.find('#edit-submitted-layout-right-lease-term').val());

            var total=quantity*period*price;
            dForm.find('.price-total').text(total.formatMoney(0,'.',',')+'đ')


        }else{
            dForm.find('.webform-component--layout-right--price-1').hide();
        }

    })

    })


})(jQuery)
