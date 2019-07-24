(function($) {

    /*EQUAL HEIGHTS FUNC*/

    $.fn.equalHeights = function() {
        var maxHeight = 0,
            $this = $(this);

        $this.each(function() {
            var height = $(this).innerHeight();

            if (height > maxHeight) { maxHeight = height; }
        });

        return $this.css('height', maxHeight);
    };

    // auto-initialize plugin
    $('[data-equal]').each(function() {
        var $this = $(this),
            target = $this.data('equal');
        $this.find(target).equalHeights();
    });



    $(document).ready(function() {
        $('.photo-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            focusOnSelect: true,
            prevArrow: '<button class="slide-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.filter ul li').click(function() {
            $('.filter ul li').prev().removeClass('prev');
            $(this).addClass('current');
            $('.filter ul li').not($(this)).removeClass('current');
            $(this).prev().addClass('prev');
        })

        $('.filter ul li').each(function() {
            if ($(this).hasClass('current')) {
                $(this).prev().addClass('prev');
                console.log(this);
            }
        })

        /*HOTELS COLUMN EQUAL HEIGHTS*/
        if ($(window).width() > 800) {
            $('.hotels .column-wrapper .column').equalHeights();
        }

        /*FANCYBOX PHOTOS GALLERY*/
        $("a.photo-open").fancybox({
            'transitionIn': 'elastic',
            'transitionOut': 'elastic'
        });

        /*------SVG OVERLAY RESPONSIVE HEIGHT RESIZE------*/
        $('.clip-overlay').height($(window).width() * 0.09);

        if ($(window).width() > 2000) {
            $('.clip-overlay').height($(window).width() * 0.06);

        }

        /*MENU OPEN BUTTON*/
        $('.menu-button').click(function() {
            $(this).toggleClass('open');
            $('.main-nav').toggleClass('menu-open');
            $('html').toggleClass('body-option');
        })

    });

    $(window).resize(function() {
        /*------SVG OVERLAY RESPONSIVE HEIGHT RESIZE------*/
        $('.clip-overlay').height($(window).width() * 0.09);

        if ($(window).width() > 2000) {
            $('.clip-overlay').height($(window).width() * 0.06);
        }
    });
})(jQuery);