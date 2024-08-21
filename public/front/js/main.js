
jQuery(document).ready(function () {
    "use strict";

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /******************************************
       Newsletter popup
    ******************************************/

    jQuery('#myModal').appendTo("body");
    function show_modal() {
        jQuery('#myModal').modal('show');
    }

    jQuery('#myModal').modal({
        keyboard: false,
        backdrop: false
    });

    /******************************************
       Navigation
    ******************************************/

    jQuery("#nav > li").hover(function () {
        var el = jQuery(this).find(".jtv-menu-block-wrapper");
        el.hide();
        el.css("left", "0");
        el.stop(true, true).delay(150).fadeIn(300, "easeOutCubic");
    }, function () {
        jQuery(this).find(".jtv-menu-block-wrapper").stop(true, true).delay(300).fadeOut(300, "easeInCubic");
    });
    var scrolled = false;
    jQuery("#nav li.level0.drop-menu").mouseover(function () {
        if (jQuery(window).width() >= 740) {
            jQuery(this).children('ul.level1').fadeIn(100);
        }
        return false;
    }).mouseleave(function () {
        if (jQuery(window).width() >= 740) {
            jQuery(this).children('ul.level1').fadeOut(100);
        }
        return false;
    });
    /******************************************
       Navigation
    ******************************************/
    jQuery("#hot-deal-slider .slider-items").owlCarousel({
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1024, 1], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
        itemsTablet: [768, 1], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: false,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false,
        autoPlay: true,
    });

    /******************************************
       bestsell slider
    ******************************************/
    jQuery("#bestsell-slider .slider-items").owlCarousel({
        items: 5, //10 items above 1000px browser width
        itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [767, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /******************************************
       Top Cat slider
    ******************************************/
    jQuery("#top-cat-slider .slider-items").owlCarousel({
        items: 5, //10 items above 1000px browser width
        itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [767, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /******************************************
       Recently Viewed Products slider
    ******************************************/
    jQuery("#recently-viewed-products .slider-items").owlCarousel({
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1024, 1], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
        itemsTablet: [767, 1], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });

    /* New arrivals slider */
    jQuery("#special-slider .slider-items").owlCarousel({
        items: 3, //10 items above 1000px browser width
        itemsDesktop: [1024, 3], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [768, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /* Brand logo slider */
    jQuery("#brand-logo-slider .slider-items").owlCarousel({
        autoPlay: true,
        items: 3, //10 items above 1000px browser width
        itemsDesktop: [1024, 3], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [600, 2], //2 items between 600 and 0;
        itemsMobile: [320, 1],
        navigation: false,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /* Testimonial slider */
    jQuery("#testimonial-slider .slider-items").owlCarousel({
        autoPlay: true,
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1024, 1], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: [320, 1],
        navigation: false,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });

    /* Category desc slider */
    jQuery("#category-desc-slider .slider-items").owlCarousel({
        autoPlay: true,
        items: 1, //10 items above 1000px browser width
        itemsDesktop: [1024, 1], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 1], // 3 items betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0;
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /* Related products slider */
    jQuery("#related-products-slider .slider-items").owlCarousel({
        items: 5, //10 items above 1000px browser width
        itemsDesktop: [1024, 4], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [768, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /* Upsell products slider */
    jQuery("#upsell-products-slider .slider-items").owlCarousel({
        items: 4, //10 items above 1000px browser width
        itemsDesktop: [1024, 3], //5 items between 1024px and 901px
        itemsDesktopSmall: [900, 3], // 3 items betweem 900px and 601px
        itemsTablet: [768, 2], //2 items between 600 and 0;
        itemsMobile: [360, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    /* Mobile menu */
    jQuery("#jtv-mobile-menu").mobileMenu({
        MenuWidth: 250,
        SlideSpeed: 300,
        WindowsMaxWidth: 767,
        PagePush: true,
        FromLeft: true,
        Overlay: true,
        CollapseMenu: true,
        ClassName: "jtv-mobile-menu"
    });
    /* side nav categories */


    if (jQuery('.subDropdown')[0]) {
        jQuery('.subDropdown').on("click", function () {
            jQuery(this).toggleClass('plus');
            jQuery(this).toggleClass('minus');
            jQuery(this).parent().find('ul').slideToggle();
        });
    }
    jQuery.extend(jQuery.easing, {
        easeInCubic: function (x, t, b, c, d) {
            return c * (t /= d) * t * t + b;
        },
        easeOutCubic: function (x, t, b, c, d) {
            return c * ((t = t / d - 1) * t * t + 1) + b;
        },
    });
    (function (jQuery) {
        jQuery.fn.extend({
            accordion: function () {
                return this.each(function () {
                    function activate(el, effect) {
                        jQuery(el).siblings(panelSelector)[(effect || activationEffect)](((effect == "show") ? activationEffectSpeed : false), function () {
                            jQuery(el).parents().show();
                        });
                    }
                });
            }
        });
    })(jQuery);
    jQuery(function (jQuery) {
        jQuery('.accordion').accordion();
        jQuery('.accordion').each(function (index) {
            var activeItems = jQuery(this).find('li.active');
            activeItems.each(function (i) {
                jQuery(this).children('ul').css('display', 'block');
                if (i == activeItems.length - 1) {
                    jQuery(this).addClass("current");
                }
            });
        });
    });
    /* Top Cart js */
    function slideEffectAjax() {
        jQuery('.jtv-top-cart-box').mouseenter(function () {
            jQuery(this).find(".jtv-top-cart-content").stop(true, true).slideDown();
        });
        jQuery('.jtv-top-cart-box').mouseleave(function () {
            jQuery(this).find(".jtv-top-cart-content").stop(true, true).slideUp();
        });
    }
    jQuery(document).ready(function () {
        slideEffectAjax();
    });
    /*  sticky header  */
    jQuery(window).scroll(function () {
        jQuery(this).scrollTop() > 100 ? jQuery("nav").addClass("jtv-sticky-header") : jQuery("nav").removeClass("jtv-sticky-header")

    });
});
/******************************************
    PRICE FILTER
******************************************/

var priceRangeSlider = $('.slider-range-price'),
    minAmount = $('#minamount'),
    maxAmount = $('#maxamount'),
    minPrice = priceRangeSlider.data('min'),
    maxPrice = priceRangeSlider.data('max'),
    minValue = priceRangeSlider.data('min-value') !== '' ? priceRangeSlider.data('min-value') : minPrice,
    maxValue = priceRangeSlider.data('max-value') !== '' ? priceRangeSlider.data('max-value') : maxPrice;
priceRangeSlider.slider({
    range: true,
    min: minPrice,
    max: maxPrice,
    values: [minPrice, maxPrice],
    slide: function (event, ui) {
        minAmount.val(ui.values[0]);
        maxAmount.val(ui.values[1]);
    }
});
minAmount.val(priceRangeSlider.slider("values", 0));
maxAmount.val(priceRangeSlider.slider("values", 1));



/*---------------------------------------------------
   tooltips
----------------------------------------------------- */
jQuery('[data-toggle=\'tooltip\']').tooltip({ container: 'body' });


/*  UItoTop */
jQuery.fn.UItoTop = function (options) {
    var defaults = {
        text: '',
        min: 200,
        inDelay: 600,
        outDelay: 400,
        containerID: 'toTop',
        containerHoverID: 'toTopHover',
        scrollSpeed: 1200,
        easingType: 'linear'
    };
    var settings = jQuery.extend(defaults, options);
    var containerIDhash = '#' + settings.containerID;
    var containerHoverIDHash = '#' + settings.containerHoverID;
    jQuery('body').append('<a href="#" id="' + settings.containerID + '">' + settings.text + '</a>');
    jQuery(containerIDhash).hide().on("click", function () {
        jQuery('html, body').animate({
            scrollTop: 0
        }, settings.scrollSpeed, settings.easingType);
        jQuery('#' + settings.containerHoverID, this).stop().animate({
            'opacity': 0
        }, settings.inDelay, settings.easingType);
        return false;
    }).prepend('<span id="' + settings.containerHoverID + '"></span>').hover(function () {
        jQuery(containerHoverIDHash, this).stop().animate({
            'opacity': 1
        }, 600, 'linear');
    }, function () {
        jQuery(containerHoverIDHash, this).stop().animate({
            'opacity': 0
        }, 700, 'linear');
    });
    jQuery(window).scroll(function () {
        var sd = jQuery(window).scrollTop();
        if (typeof document.body.style.maxHeight === "undefined") {
            jQuery(containerIDhash).css({
                'position': 'absolute',
                'top': jQuery(window).scrollTop() + jQuery(window).height() - 50
            });
        }
        if (sd > settings.min) jQuery(containerIDhash).fadeIn(settings.inDelay);
        else jQuery(containerIDhash).fadeOut(settings.Outdelay);
    });
};
/* mobileMenu */
var isTouchDevice = ('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0);
jQuery(window).on("load", function () {
    if (isTouchDevice) {
        jQuery('#nav a.level-top').on("click", function (e) {
            jQueryt = jQuery(this);
            jQueryparent = jQueryt.parent();
            if (jQueryparent.hasClass('parent')) {
                if (!jQueryt.hasClass('menu-ready')) {
                    jQuery('#nav a.level-top').removeClass('menu-ready');
                    jQueryt.addClass('menu-ready');
                    return false;
                } else {
                    jQueryt.removeClass('menu-ready');
                }
            }
        });
    }
    jQuery().UItoTop();
});

/*-------------------
       Quantity change
   --------------------- */
   var proQty = $('.pro-qty');
   proQty.prepend('<span class="input-group-addon dec qtybtn" style="cursor: pointer">-</span>');
   proQty.append('<span class="input-group-addon inc qtybtn" style="cursor: pointer">+</span>');
   proQty.on('click', '.qtybtn', function () {
       var $button = $(this);
       var oldValue = $button.parent().find('input').val();
       if ($button.hasClass('inc')) {
           var newVal = parseFloat(oldValue) + 1;
       } else {
           // Don't allow decrementing below zero
           if (oldValue > 0) {
               var newVal = parseFloat(oldValue) - 1;
           } else {
               newVal = 0;
           }
       }
       $button.parent().find('input').val(newVal);

       //updateCart:
       var rowId = $button.parent().find('input').data('rowid');
       updateCart(rowId, newVal);
   });

/*---------------------------------------------------
   cart
----------------------------------------------------- */
function addToCart(productId) {
    $.ajax({
        type: "GET",
        url: "/cart/add",
        data: {
            'productId': productId
        },
        success: function (response) {
            // Cập nhật số lượng và giá tổng
            $('.cart_count').text(response['count']);
            $('.cart_price').text('My Cart / $' + response['total']);

            var cartHover_content = $('.mini-products-list');
            var cartHover_existsItem = cartHover_content.find("li" + "[data-rowId='" + response['cart'].rowId + "']");

            if (cartHover_existsItem.length) {
                // Cập nhật thông tin sản phẩm nếu đã có trong giỏ hàng
                cartHover_existsItem.find('.product-details p').eq(1).html('<strong>' + response['cart'].qty + '</strong> x <span class="price">$' + response['cart'].price.toFixed(2) + '</span>');
            } else {
                // Thêm sản phẩm mới vào giỏ hàng
                var newItem =
                    '<li class="item" data-rowId="' + response['cart'].rowId + '">' +
                    '<div class="item-inner">' +
                    '<a class="product-image" title="' + response['cart'].name + '" href="#">' +
                    '<img class="img-responsive" alt="' + response['cart'].name + '" src="front/images/products/' + response['cart'].options.images[0].path + '">' +
                    '</a>' +
                    '<div class="product-details">' +
                    '<div class="access">' +
                    '<i class="jtv-btn-remove" title="Remove This Item" href="#" onclick="removeCart(\'' + response['cart'].rowId + '\')"></i>' +
                    '<a class="btn-edit" title="Edit item" href="#">' +
                    '<i class="icon-pencil"></i>' +
                    '<span class="hidden">Edit item</span>' +
                    '</a>' +
                    '</div>' +
                    '<p class="product-name">' +
                    '<a href="#">' + response['cart'].name + '</a>' +
                    '</p>' +
                    '<p><strong>' + response['cart'].qty + '</strong> x <span class="price">$' + response['cart'].price.toFixed(2) + '</span></p>' +
                    '</div>' +
                    '</div>' +
                    '</li>';
                cartHover_content.append(newItem);
            }

            alert('Add successfully!\nProduct: ' + response['cart'].name);
            console.log(response);
        },
        error: function (response) {
            alert('Add error!');
            console.log(response);
        },
    });
}
function removeCart(rowId) {
    $.ajax({
        type: "GET",
        url: "/cart/delete",
        data: {
            rowId: rowId
        },
        success: function (response) {
            // Xử lý phần cart header
            $('.cart_count').text(response['count']);
            $('.cart_price').text('My Cart / $' + response['total']);

            var cartHover_content = $('.mini-products-list');
            var cartHover_existsItem = cartHover_content.find("li" + "[data-rowId='" + rowId + "']");
            cartHover_existsItem.remove();

            //Xử lý cho cart/index
            $('.cart-count span').text('Your shopping cart contains: ' + response['count'] + 'Product(s)');
            var cart_tbody = $('.jtv-cart-summary tbody');
            var cart_existsItem = cart_tbody.find("tr" + "[data-rowId='" + rowId + "']");
            cart_existsItem.remove();

            alert('Delete successfully!\nProduct: ' + response['cart'].name);
            console.log(response);
        },
        error: function (response) {
            alert('Delete error!');
            console.log(response);
        },
    });
}
function destroyCart() {
    $.ajax({
        type: "GET",
        url: "/cart/destroy",
        success: function (response) {
            $('.cart_count').text('0');
            $('.cart_price').text('My Cart / $0');

            var cartHover_content = $('.mini-products-list');
            cartHover_content.children().remove();

            //Xử lý cho cart/index
            var cart_tbody = $('.jtv-cart-summary tbody');
            cart_tbody.children().remove();

            $('.cart-count span').text('Your shopping cart contains: 0 Product(s)');
            $('.cart-subtotal span').text('$0');
            $('.cart-total span').text('$0');

            alert('Destroy successfully!');
            console.log(response);
        },
        error: function (response) {
            alert('Destroy error!');
            console.log(response);
        },
    });
}
function updateCart(rowId, qty) {
    $.ajax({
        type: "GET",
        url: "/cart/update",
        data:
        {
            rowId: rowId,
            qty: qty
        },
        success: function (response) {
            $('.cart_count').text(response['count']);
            $('.cart_price').text('My Cart / $' + response['total']);

            var cartHover_content = $('.mini-products-list');
            var cartHover_existsItem = cartHover_content.find("li" + "[data-rowId='" + rowId + "']");
            if (qty === 0) {
                cartHover_existsItem.remove();
            } else {
                cartHover_existsItem.find('.product-details p').eq(1).html('<strong>' + response['cart'].qty + '</strong> x <span class="price">$' + response['cart'].price.toFixed(2) + '</span>');
            }

            //Xử lý cho cart/index
            var cart_tbody = $('.jtv-cart-summary tbody');
            var cart_existsItem = cart_tbody.find("tr" + "[data-rowId='" + rowId + "']");
            if (qty === 0) {
                cart_existsItem.remove();
            } else {
                cart_existsItem.find('.total-price').text('$' + (response['cart'].price * response['cart'].qty));
            }
            $('.cart-count span').text('Your shopping cart contains: ' + response['count'] + ' Product(s)');
            $('.cart-subtotal span').text('$' + response['subtotal']);
            $('.cart-total span').text('$' + response['total']);

            alert('Update successfully!\nProduct: ' + response['cart'].name);
            console.log(response);
        },
        error: function (response) {
            alert('Update error!');
            console.log(response);
        },
    });
}
