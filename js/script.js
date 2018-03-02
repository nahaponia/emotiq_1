$(document).ready(function () {
    var body = $('body');
    var executed = false;

    //$( ".associate" )
    //    .mouseover(function() {
    //        if(inAnimFlag) return;
    //        inAnimFlag = true;
    //        removeFlag();
    //        $(this).addClass('active');
    //        $(this).find('.more-info').show('400').removeClass('fadeOutRight').addClass('fadeInRight');
    //    })
    //    .mouseout(function() {
    //        if(inAnimFlag) return;
    //        inAnimFlag = true;
    //        removeFlag();
    //        $(this).removeClass('active');
    //        $(this).find('.more-info').hide('400').removeClass('fadeInRight').addClass('fadeOutRight');
    //    });

    if($(document).width() < 600) {
        var siteWidth = 600;
        //var scale = screen.width /siteWidth;
        var scale = 0.5;
        document.querySelector('meta[name="viewport"]').setAttribute('content', 'width='+siteWidth+', initial-scale='+scale+', maximum-scale=1, user-scalable=no');

    }
    //console.log($(document).scrollTop());
    //console.log($('#team').offset());
    //if($(document).scrollTop() > ($('#team').offset().top-300) && !executed){
    //    console.log($(document).scrollTop())
    //    showAssoc();
    //}


    setTimeout(function() {
        if (location.hash) {
            /* we need to scroll to the top of the window first, because the browser will always jump to the anchor first before JavaScript is ready, thanks Stack Overflow: http://stackoverflow.com/a/3659116 */
            window.scrollTo(0, 0);
            target = location.hash.split('#');
            smoothScrollTo($('#'+target[1]));
        }
    }, 1);

    // taken from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
    $('a[href*=\\#]:not([href=\\#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            smoothScrollTo($(this.hash));
            return false;
        }
    });

    function checkScrollbar() {
        var el = $('<div style="width:100px;height:100px;overflow:scroll;position:absolute;top:-9999px;"/>'),
            elDom = el.get(0);

        el.appendTo('body');

        if (elDom.offsetWidth === elDom.clientWidth) {
            $('.wrapper').addClass('no-shift');
        }

        el.remove();
    }

    checkScrollbar();
    function showAssoc() {
        executed = true;
        var num = 1;
        var assoc = $('.associate');
        assoc.each(function(){
            var obj = $(this);
            console.log(obj);
            console.log(250+250*obj.index());
            setTimeout(function(){
                obj.removeClass('invisible').addClass('animated fadeInLeft');
            },250+250*obj.index());
        });
        //var interv = setInterval(function(){
        //    if (num > assoc.length){
        //        clearInterval(interv);
        //        return;
        //    }
        //    assoc.eq(num++).removeClass('invisible').addClass('animated fadeInLeft');
        //},250);

    }
    function freezePage() {
        $('.wrapper').addClass('no-scroll');
    }

    function unfreezePage() {
        $('.wrapper').removeClass('no-scroll');
    }

    function showPopUpsWrapper() {
        $('.pop-ups-wrapper').addClass('visible');
    }

    function hidePopUpsWrapper() {
        $('.pop-ups-wrapper').removeClass('visible');
    }

    function getOuterWidth(el) {
        var elStyle = window.getComputedStyle(el);
        return elStyle.display == 'none' ? 0 : parseFloat(elStyle.width) + parseFloat(elStyle.marginRight);
    }

    function hideOverlay() {
        $('.overlay').removeClass('visible');
    }

    function showOverlay() {
        $('.overlay').addClass('visible');
    }

    /* slider platform mobile*/
    //$('.platform-slider').owlCarousel({
    //    items: 1,
    //    //touchDrag: false,
    //    //mouseDrag: false
    //});
    $('.platform-slider').bxSlider({
        speed: 700,
        mode: 'horizontal',
        pagerCustom: '.platform-slider-nav',
        //auto: true,
        nextText: '',
        prevText: '',
        prevSelector:'#platform-slider-left',
        nextSelector:'#platform-slider-right',
        infiniteLoop: true,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        slideMargin: 10
    });
    ///* slider nav */
    //$('.platform-slider-nav').on('click', '.platform-slider-nav-item', function () {
    //    $(this).addClass('selected').siblings('.selected').removeClass('selected');
    //    $('.platform-slider').trigger('to.owl.carousel', $(this).data('index'));
    //});
    var pageHeaderMenu = (function () {
        var openBtn = $('.menu-open-btn'),
            closeBtn = $('.menu-close-btn'),
            pageHeader = $('.page-header'),
            categories = $('.page-header-categories-wrapper'),
            hiddenElements = document.getElementsByClassName('hidden-elements-list')[0];

        var init = function () {
            openBtn.on('click', openMenu);
            closeBtn.on('click', closeMenu);

            pageHeader.find('.nav-toogle').on('click', function (e) {
                if ($(this).is('.active')) {
                    hideHiddenElements();
                }
                else {
                    e.stopImmediatePropagation();

                    showHiddenElements();

                    $(window).one('click', clickOutsideHndlr);
                }

                $(this).toggleClass('active');
            });


            pageHeader.on('mouseover', '.page-header-nav-item.open-menu-item', function () {
                if (window.matchMedia('(min-width: 1200px)').matches) {
                    showCategories();
                }
            });

            pageHeader.on('mouseout', '.page-header-nav-item', function (e) {
                if (window.matchMedia('(min-width: 1200px)').matches) {
                    var relTarget = $(e.relatedTarget);

                }
            });
            $(".page-header-nav-item a").click(function() {
                var lnk = $(this).attr('href');
                if($(this).closest('.page-header').hasClass('menu-opened')){
                    closeMenu();
                    window.location = lnk;
                }
                $('html, body').animate({
                    scrollTop: $(lnk).offset().top
                }, 1000);
                return false;
            });
        };

        function openMenu() {
            pageHeader.addClass('menu-opened');
            freezePage();
        }

        function closeMenu() {
            pageHeader.removeClass('menu-opened');
            unfreezePage();
        }

        function showHiddenElements() {
            pageHeader.find('.hidden-elements').addClass('visible');
        }

        function hideHiddenElements() {
            pageHeader.find('.hidden-elements').removeClass('visible');
        }

        function clickOutsideHndlr(e) {
            if ($(e.target).closest('.hidden-elements').length) {
            }
            else {
                hideHiddenElements();
                pageHeader.find('.nav-toogle').removeClass('active');
                $(window).off('click', clickOutsideHndlr);
            }
        }
        return {
            init: init
        };
    }()).init();

    /*Открытие попапов*/
    $('[data-pop-up-open]').on('click', function () {
        $('[data-pop-up]').removeClass('visible');
        $('[data-pop-up="' + $(this).data('pop-up-open') + '"]').addClass('visible');
        freezePage();
        showPopUpsWrapper();
    });
    /*Закрытие попапов*/
    $('.pop-up-close-button').on('click', function () {
        $(this).closest('.pop-up').removeClass('visible');
        if (!$('.page-header').is('.menu-opened')) {
            unfreezePage();
        }
        hidePopUpsWrapper();
    });


    /*Маски для полей*/
    //$('.phone-field').inputmask({'mask': '+7 (999) 99 999 99'});
    //
    //$('.catalogue-price input[type="text"]').inputmask({'mask': '9 999 999', placeholder: '', numericInput: true});

    /*Валидация форм*/
    $('.validate-form').each(function () {
        $(this).validate();
    });

    $.validator.addMethod('phoneValidation', function (phone) {
            var regex = /^\+7 \(\d{3}\) \d{2} \d{3} \d{2}$/;
            return regex.test(phone);
        },
        'введите валидный номер телефона');

    $.validator.addMethod('cardValidation', function (card) {
            var regex = /^\d{4} \d{4} \d{4}$/;
            return regex.test(card);
        },
        'введите валидный номер карты');

    $.validator.addMethod('myNameRequired', $.validator.methods.required, 'enter your name');
    $.validator.addMethod('myNamelastRequired', $.validator.methods.required, 'enter your last name');

    $.validator.addMethod('myEmailRequired', $.validator.methods.required, 'enter your email');

    $.validator.addMethod('fieldRequired', $.validator.methods.required, 'this fields are required');

    $.validator.addMethod('myEmail', $.validator.methods.email, 'enter valid email');


    $.validator.addClassRules({
        'phone-field': {
            phoneValidation: true
        },
        'name-field': {
            myNameRequired: true
        },
        'last-name-field': {
            myNamelastRequired: true
        },
        'email-field': {
            myEmail: true
        },
        'email-field-required': {
            myEmailRequired: true
        },
        'field-required': {
            fieldRequired: true
        },
        'max-quantity': {
            myMaxQuantity: true
        }
    });
});
function smoothScrollTo(target) {
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

    if (target.length) {
        $('html,body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }
}