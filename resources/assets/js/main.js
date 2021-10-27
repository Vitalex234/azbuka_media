// Header section script
function headerScripts() {
    var mainHeaderNavigationToggle = $('.main-header-navigation-dropdown-toggle')
    var mainHeaderDropdownToggle = $('.main-header-navigation-dropdown')
    var mainHeaderDropdownFirstToggle = $('.main-header-navigation-dropdown-first')
    var mainHeaderNavigatinListCollection = $('.main-header-navigation-list a')
    var mainHeaderNavigatinItem = $('.main-header-navigation-item')
    // Dropdown Menu 
    function dropdownMenu() {
        mainHeaderNavigationToggle.on('click', function(e) {
            e.preventDefault();
            var target = $(e.target)
            var self = $(this)
            if(!self.parent(mainHeaderDropdownToggle).hasClass('open')) {
                target.parent(mainHeaderDropdownToggle).addClass('open').siblings('li').removeClass('open');
            }
            else {
                target.parent(mainHeaderDropdownToggle).removeClass('open');
            }
        });
    }
    // Highlight current page in Header section 
    function activeMenu() {
        var url = window.location.href;
        mainHeaderNavigatinListCollection.filter(function() {
            return this.href === url;
        }).parent().addClass('active').siblings('.active').removeClass('active');
        if (mainHeaderDropdownToggle.find(mainHeaderNavigatinItem).hasClass('active')) {
            var headerActiveItem = $('.main-header-navigation-item.active');
            headerActiveItem.closest(mainHeaderDropdownToggle).addClass('active');
            headerActiveItem.closest(mainHeaderDropdownFirstToggle).addClass('active');
        }
    }
    // Menu toggle 
    function toggleMenu() {
        var toggleIcon = $('.main-header-toggle')
        var wrapper = $('.page-wrapper')
        toggleIcon.on('click', function() {
            wrapper.toggleClass('open');
            toggleIcon.toggleClass('active');
        });
        $(window).on('resize', function() {
            if ($(window).width() > 767) {
                wrapper.removeClass('open');
                toggleIcon.removeClass('active');
            }
            if ($(window).width() < 766) {
                wrapper.removeClass('open');
                toggleIcon.removeClass('active');
            }
        });
    }
    dropdownMenu()
    activeMenu()
    toggleMenu()
}
function backgroundParallax() {
    var backgroundParallaxCollection = $('.background-parallax-item')
    var backgroundParallax = $('.background-parallax')
    backgroundParallaxCollection.each(function() {
        var element = $(this);
        var valueArray = [];
        var valueArrayBase = $(element).map(function(i, el) {
            valueArray.push($(this).attr('data-src'));
        });
        for(var i = 0; i < valueArray.length; i++) {
            element.eq(i).attr('style', 'display: none').parent(backgroundParallax).eq(i).attr('style', 'background-image: url("' + valueArray[i] + '")')
        }
    })
}
function counterUp() {
    var counterUpItem = $('.counter-item > span')
    counterUpItem.counterUp({
        delay: 10,
        time: 1000
    });
}
// Review Slider Init
function reviewSlider () {
    var review = new Swiper('.review', {
        pagination: '.review-pagination',
        paginationClickable: true,
        autoplay: 10000,
        spaceBetween: 300,
        speed: 2000,
    });
}
// Forms Validtion and Stylization 
function textareaStylization() {
    var textarea = $('textarea');
    function textareaAutoGrow(el) {
        var textareaGrowDeafault = el.style.height = "66px";
        el.style.height = (el.scrollHeight)+"px";
    }
    textarea.on('keyup', function () {
        textareaAutoGrow(this);
    })
}
function appointmentFormValidation() {
    var appointmentForm = $('.appointment-block form');
    var appointmentFormButton = $('.appointment-block form button');
    appointmentForm.validate({
        rules: {
            appemail: {
                required: true,
                email: true,
            },
            appname: {
                required: true,
            },
            apptext: {
                required: true,
            },
            appsubject: {
                required: true,
            },
        },
        messages: {
            appemail: {
                required: 'Please enter your Email.',
                email: 'This Email is not valid', 
            },
            appname: {
                required: 'Please enter your Name.',
            },
            apptext: {
                required: 'Please enter your Message.',
            },
            appsubject: {
                required: 'Please enter Subject of this message.',
            },
        },
        submitHandler: function(form) {
            $.ajax({
                url: 'php/appointment-sending.php',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    if(response != 'success') {
                        appointmentFormButton.addClass('error').text('Error')
                        setTimeout(function() {
                            appointmentFormButton.removeClass('error').text('Send')
                        }, 3000)
                    }
                    else {
                        appointmentFormButton.addClass('valid').text('Success')
                        setTimeout(function() {
                            appointmentFormButton.removeClass('valid').text('Send')
                        }, 3000)
                    }
                },
                error: function(response) {
                    appointmentFormButton.addClass('error').text('Error')
                    setTimeout(function() {
                        appointmentFormButton.removeClass('error').text('Send')
                    }, 3000)
                }         
            });
        }
    })
}
function contactFormValidation() {
    var contactForm = $('.contact-block form')
    var contactFormButton = $('.contact-block form button')
    contactForm.validate({
        rules: {
            conemail: {
                required: true,
                email: true,
            },
            conname: {
                required: true,
            },
            context: {
                required: true,
            },
            consubject: {
                required: true,
            },
        },
        messages: {
            conemail: {
                required: 'Please enter your Email.',
                email: 'This Email is not valid', 
            },
            conname: {
                required: 'Please enter your Name.',
            },
            context: {
                required: 'Please enter your Message.',
            },
            consubject: {
                required: 'Please enter Subject of this message.',
            },
        },
        submitHandler: function(form) {
            $.ajax({
                url: 'php/contact-sending.php',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    if(response != 'success') {
                        contactFormButton.addClass('error').text('Error')
                        setTimeout(function() {
                            contactFormButton.removeClass('error').text('Send')
                        }, 3000)
                    }
                    else {
                        contactFormButton.addClass('valid').text('Success')
                        setTimeout(function() {
                            contactFormButton.removeClass('valid').text('Send')
                        }, 3000)
                    }
                },
                error: function(response) {
                    contactFormButton.addClass('error').text('Error')
                    setTimeout(function() {
                        contactFormButton.removeClass('error').text('Send')
                    }, 3000)
                }         
            });
        }
    })
}
function commentFormValidation() {
    var commentForm = $('.comment-form');
    var commentFormButton = $('.comment-block form button')
    commentForm.validate({
        rules: {
            Commail: {
                required: true,
                email: true,
            },
            Comname: {
                required: true,
            },
            Comtext: {
                required: true,
            },
        },
        messages: {
            Commail: {
                required: 'Please enter your Email.',
                email: 'This Email is not valid', 
            },
            Comname: {
                required: 'Please enter your Name.',
            },
            Comtext: {
                required: 'Please enter your Message.',
            },
        },
        submitHandler: function(form) {
            $.ajax({
                url: '/rest/',
                type: 'POST',
                data: $(form).serialize(),
                success: function(response) {
                    if(response != 'success') {
                        commentFormButton.addClass('error').text('Error')
                        setTimeout(function() {
                            commentFormButton.removeClass('error').text('Send')
                        }, 3000)
                    }
                    else {
                        commentFormButton.addClass('valid').text('Success')
                        setTimeout(function() {
                            commentFormButton.removeClass('valid').text('Send')
                        }, 3000)
                    }
                },
                error: function(response) {
                    commentFormButton.addClass('error').text('Error')
                    setTimeout(function() {
                        commentFormButton.removeClass('error').text('Send')
                    }, 3000)
                }         
            });
        }
    })
}
// Newsletter
function newsletter() {
    var news = $('.footer-newsletter-form')
    if ($('div').is(news)) {
        function mailChimpIntegration() {
            news.formchimp();
        }
        mailChimpIntegration();
    }
}
// Blog Masonry Grid
function blogGrid() {
    var blogBlockContainer = $('.blog-block-masonry')
    blogBlockContainer.masonry({
        itemSelector: '.blog-item-container',
        percentPosition: true,
    });
}
function googleMapsInit() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 17,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(54.857917, 83.111232), // Change This position and see down 

        // How you would like to style the map. 
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('google-map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it (see down)
    var marker = new google.maps.Marker({
        icon: 'images/map-icon.svg',
        position: new google.maps.LatLng(54.857917, 83.111232), // And change this position
        map: map,
        title: 'My Wokring Center',
    });
}
// Home Slider Init
function homeSlider () {
    var home = new Swiper('.home-slider .swiper-container', {
        direction: 'horizontal',
        loop: true,
        nextButton: '.home-slider .swiper-button-next',
        prevButton: '.home-slider .swiper-button-prev',
        speed: 2500,
    });
}
// Price range Slider Configuration 
function priceRangeSlider() {
    if ($('div').is('.sidebar-price')) {
        var priceSliderCounter = $('.sidebar-item-form-range > span');
        var priceSliderInput = $('.sidebar-item-form-range > input');
        priceSliderInput.slider({
            range: true,
            min: 0,
            max: 1500,
            values: [ 0, 1500 ],
            tooltip: 'hide',
        }).on('slide', function(price) {
            priceSliderCounter.text('$' + price.value[0] + ' - ' + '$' + price.value[1])
        }).on('slideStop', function(price) {
            priceSliderCounter.text('$' + price.value[0] + ' - ' + '$' + price.value[1])
        })
        priceSliderCounter.text('$' + priceSliderInput.slider('getValue')[0] + ' - ' + '$' + priceSliderInput.slider('getValue')[1]) 
    }
};
function shopItem() {
    var shopItemLinkList = $('.shop-item-block-content-option > li > a');
    shopItemLinkList.on('click', function(e) {
        e.preventDefault();
        $(this).parent('li').addClass('active').siblings('.active').removeClass('active');
    })
}
function shopItemSlider() {
    var shopSlider = new Swiper('.shop-item-block-image-slider', {
        nextButton: '.shop-item-block-image-slider .swiper-button-next',
        prevButton: '.shop-item-block-image-slider .swiper-button-prev',
        slidesPerView: 2,
    });
    var shopSliderItem = $('.shop-item-block-image-slider-item');
    var shopSlider = $('.shop-item-block-image-slider');
    function shopItemimageHeading() {
        var shopItemBlockImageImg = $('.shop-item-block-image > img')
        var imgSrc = $('.shop-item-block-image-slider-item.active > img').attr('src');
        shopItemBlockImageImg.attr('src', imgSrc);
    }
    shopItemimageHeading();
    shopSliderItem.on('click', function(e) {
        $(this).closest(shopSlider).find('.shop-item-block-image-slider-item.active').removeClass('active');
        $(this).addClass('active');
        shopItemimageHeading();
    });
}
// modal window toggle function
function modal() {
    var modalWrapper = $('.modal-wrapper');
    var modalToggleWrapper = $('.modal-toggle');
    var modalItemClose = $('.modal-item-close');
    function modalToggle() {
        modalToggleWrapper.on('click', function(e) {
            e.preventDefault();
            modalWrapper.addClass('open');
        })
        modalItemClose.on('click', function(e) {
            e.preventDefault();
            modalWrapper.removeClass('open');
        })
    }
    $(document).mouseup(function (e){ 
        var div = $('.modal-item');
        if (!div.is(e.target) && div.has(e.target).length === 0) { 
            modalWrapper.removeClass('open');
        }
    });
    modalToggle()
}
function shopCart() {
    var shopCartQuanUp = $('.shop-cart-item-quantity-up');
    var shopCartQuanDown = $('.shop-cart-item-quantity-down');
    shopCartQuanUp.on('click', function(e) {
        e.preventDefault()
        var input = $(this).siblings('input'),
            numberNew = parseInt(input.val(), 10) + 1;
            1 > numberNew ? input.val("1") : input.val(numberNew);
    })
    shopCartQuanDown.on('click', function(e) {
        e.preventDefault()
        var input = $(this).siblings('input'),
            numberNew = parseInt(input.val(), 10) - 1;
            1 > numberNew ? input.val("1") : input.val(numberNew);
    })
}
// Gallery 
function gallery() {
    // Masonry Without Gutter
    var galleryMasonryNoGutter = $('.gallery-block-masonry-nogutter')
    var galleryMasonryGutter = $('.gallery-block-masonry-gutter')
    var galleryFilterLink = $('.gallery-block-filter > a')
    if ($('div').is(galleryMasonryNoGutter)) {
        var buttonFilter;
        var isotopeGrid = galleryMasonryNoGutter.isotope({
            percentPosition: true,
            filter: function() {
                var self = $(this);
                var buttonResult = buttonFilter ? self.is(buttonFilter) : true;
                return buttonResult
            },
            masonry: {
                itemSelector: '.gallery-block-item',
            }
        })
        galleryMasonryNoGutter.masonry({
            itemSelector: '.gallery-block-item',
        })
        galleryFilterLink.on('click', function(e) {
            e.preventDefault()
            buttonFilter = $(this).attr('data-filter')
            isotopeGrid.isotope()
        })
        galleryFilterLink.each(function(i, buttonGroup) {
            $(buttonGroup).on('click', function() {
                $(this).addClass('active').siblings('.active').removeClass('active');
            });
        });
    }
    // Masonry With Gutter
    if ($('div').is(galleryMasonryGutter)) {
        var buttonFilter;
        var isotopeGrid = galleryMasonryGutter.isotope({
            percentPosition: true,
            filter: function() {
                var self = $(this);
                var buttonResult = buttonFilter ? self.is(buttonFilter) : true;
                return buttonResult
            },
            masonry: {
                itemSelector: '.gallery-block-item',
            }
        })
        galleryMasonryGutter.masonry({
            itemSelector: '.gallery-block-item',
        })
        galleryFilterLink.on('click', function(e) {
            e.preventDefault()
            buttonFilter = $(this).attr('data-filter')
            isotopeGrid.isotope()
        })
        galleryFilterLink.each(function(i, buttonGroup) {
            $(buttonGroup).on('click', function() {
                $(this).addClass('active').siblings('.active').removeClass('active');
            });
        });
    }
}
// Gallery Item 
function galleryItem() {
    var galleryItem = $('.gallery-item-gallery-item')
    var galleryItemGallery = $('.gallery-item-gallery')
    var galleryItemContainer = $('.gallery-item-image')
    function galleryItemChange() {
        if (galleryItem.hasClass('active')) {
            galleryItemContainer.attr('style', 'background-image: url("' + $('.gallery-item-gallery-item.active > img').attr('data-src') + '"');
        } 
    }
    galleryItem.on( 'click', function() {
        galleryItemGallery.find('.gallery-item-gallery-item.active').removeClass('active');
        $(this).addClass('active');
        galleryItemChange();
    });
    galleryItemChange();
}
// Preloader 
$(".preloader").fakeLoader({
    timeToHide:1200, //Time in milliseconds for fakeLoader disappear
    zIndex:"999",//Default zIndex
    spinner:"spinner6",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
    bgColor:"#333333", //Hex, RGB or RGBA colors
});

$(document).ready(function() {
    'use strict'
    // images PolyFill 
    objectFitImages();
    // header 
    headerScripts()
    // Parallax
    $(window).stellar();
    backgroundParallax();
    // CounterUp
    counterUp();
    // Smooth Scroll 
    $('body').easeScroll({
		frameRate: 60,
		animationTime: 1000,
		stepSize: 120,
		pulseAlgorithm: !0,
		pulseScale: 8,
		pulseNormalize: 1,
		accelerationDelta: 20,
		accelerationMax: 1,
		keyboardSupport: !0,
		arrowScroll: 50
	});
    // Review Slider Init
    reviewSlider();
    // Forms Validtion and Stylization 
    textareaStylization();
    appointmentFormValidation();
    contactFormValidation();
    commentFormValidation();
    // Blog Block Masonry 
    blogGrid();
    // Home Slider 
    homeSlider();
    // Price Range Slider 
    priceRangeSlider();
    // Shop Item 
    shopItem();
    shopItemSlider();
    // Shop Cart 
    shopCart();
    // Select Customization 
    $('select').selectpicker();
    // Gallery 
    gallery();
    galleryItem();
    // Modal 
    modal();
    // Newsletter 
    newsletter();
    // Tabs 
    var tabsLink = $('.tabs-block > .tabs > li > a');
    var tabPane = $('.tab-pane');
    var tabBlock = $('.tabs-block');
    var tabContent = $('.tab-content');
    tabsLink.on('click', function(e) {
        e.preventDefault();
        var tabLink = $(this).attr('href');
        var tabContentContainer = $(this).closest(tabBlock).children(tabContent);
        var tabContentItem = tabContentContainer.find(tabPane);
        tabContentItem.each(function(i) {
            $(this).removeClass('active');
            if ($(this).attr('id') === tabLink) {
                $(this).addClass('active')
            }
        })
    })
});

// Google Maps Init 
if ($('div').is($('#google-map'))) {
    google.maps.event.addDomListener(window, 'load', googleMapsInit);
}	
// IE Masonry Fix 
$(window).on('scroll', function() {
    'use strict'
    var blogMasonry = $('.blog-masonry');
    var galleryMasonry = $('.gallery-block-masonry-nogutter');
    var galleryMasonryGutter = $('.gallery-block-masonry-gutter');
    if (/MSIE 10/i.test(navigator.userAgent) || /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /Edge\/\d./i.test(navigator.userAgent)) {
        if ($('div').is(blogMasonry)) {
            blogMasonry.masonry({
                itemSelector: '.blog-small-wrapper',
                percentPosition: true,
            });     
        }
    }
    if (/MSIE 10/i.test(navigator.userAgent) || /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /Edge\/\d./i.test(navigator.userAgent)) {
        if ($('div').is(galleryMasonry)) {
            galleryMasonry.masonry({
                itemSelector: '.gallery-block-item',
            })
        }
    }
    if (/MSIE 10/i.test(navigator.userAgent) || /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /Edge\/\d./i.test(navigator.userAgent)) {
        if ($('div').is(galleryMasonryGutter)) {
            galleryMasonryGutter.masonry({
                itemSelector: '.gallery-block-item',
            })
        }
    }
});