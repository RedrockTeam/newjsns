/*!
 Slimbox v2.05 - The ultimate lightweight Lightbox clone for jQuery
 (c) 2007-2013 Christophe Beyls <http://www.digitalia.be>
 MIT-style license.
 */
!function($) {
    /*
     Internal functions
     */
    function position() {
        var l = win.scrollLeft(), w = win.width();
        $([ center, bottomContainer ]).css("left", l + w / 2), compatibleOverlay && $(overlay).css({
            left: l,
            top: win.scrollTop(),
            width: w,
            height: win.height()
        });
    }
    function setup(open) {
        if (open) {
            $("object").add(ie6 ? "select" : "embed").each(function(index, el) {
                hiddenElements[index] = [ el, el.style.visibility ], el.style.visibility = "hidden";
            });
        } else $.each(hiddenElements, function(index, el) {
            el[0].style.visibility = el[1];
        }), hiddenElements = [];
        var fn = open ? "bind" : "unbind";
        win[fn]("scroll resize", position), $(document)[fn]("keydown", keyDown);
    }
    function keyDown(event) {
        var code = event.which, fn = $.inArray;
        // Prevent default keyboard action (like navigating inside the page)
        return fn(code, options.closeKeys) >= 0 ? close() : fn(code, options.nextKeys) >= 0 ? next() : fn(code, options.previousKeys) >= 0 ? previous() : null;
    }
    function previous() {
        return changeImage(prevImage);
    }
    function next() {
        return changeImage(nextImage);
    }
    function changeImage(imageIndex) {
        return imageIndex >= 0 && (activeImage = imageIndex, activeURL = images[activeImage][0], 
        prevImage = (activeImage || (options.loop ? images.length : 0)) - 1, nextImage = (activeImage + 1) % images.length || (options.loop ? 0 : -1), 
        stop(), center.className = "lbLoading", preload = new Image(), preload.onload = animateBox, 
        preload.src = activeURL), !1;
    }
    function animateBox() {
        console.log(preload.width);
        var cW = document.body.clientWidth, ratio = preload.width / preload.height;
        preload.width >= cW && (preload.width = cW / 1.3, preload.height = preload.width * (1 / ratio)), 
        center.className = "", $(image).css({
            backgroundImage: "url(" + activeURL + ")",
            visibility: "hidden",
            display: "",
            backgroundSize: "contain",
            backgroundPosition: "center center"
        }), $(sizer).width(preload.width), $([ sizer, prevLink, nextLink ]).height(preload.height), 
        $(caption).html(images[activeImage][1] || ""), $(number).html((images.length > 1 && options.counterText || "").replace(/{x}/, activeImage + 1).replace(/{y}/, images.length)), 
        prevImage >= 0 && (preloadPrev.src = images[prevImage][0]), nextImage >= 0 && (preloadNext.src = images[nextImage][0]), 
        centerWidth = image.offsetWidth, centerHeight = image.offsetHeight;
        var top = Math.max(0, middle - centerHeight / 2);
        center.offsetHeight != centerHeight && $(center).animate({
            height: centerHeight,
            top: top
        }, options.resizeDuration, options.resizeEasing), center.offsetWidth != centerWidth && $(center).animate({
            width: centerWidth,
            marginLeft: -centerWidth / 2
        }, options.resizeDuration, options.resizeEasing), $(center).queue(function() {
            $(bottomContainer).css({
                width: centerWidth,
                top: top + centerHeight,
                marginLeft: -centerWidth / 2,
                visibility: "hidden",
                display: ""
            }), $(image).css({
                display: "none",
                visibility: "",
                opacity: ""
            }).fadeIn(options.imageFadeDuration, animateCaption);
        });
    }
    function animateCaption() {
        prevImage >= 0 && $(prevLink).show(), nextImage >= 0 && $(nextLink).show(), $(bottom).css("marginTop", -bottom.offsetHeight).animate({
            marginTop: 0
        }, options.captionAnimationDuration), bottomContainer.style.visibility = "";
    }
    function stop() {
        preload.onload = null, preload.src = preloadPrev.src = preloadNext.src = activeURL, 
        $([ center, image, bottom ]).stop(!0), $([ prevLink, nextLink, image, bottomContainer ]).hide();
    }
    function close() {
        return activeImage >= 0 && (stop(), activeImage = prevImage = nextImage = -1, $(center).hide(), 
        $(overlay).stop().fadeOut(options.overlayFadeDuration, setup)), !1;
    }
    // Global variables, accessible to Slimbox only
    var options, images, activeURL, prevImage, nextImage, compatibleOverlay, middle, centerWidth, centerHeight, // DOM elements
    overlay, center, image, sizer, prevLink, nextLink, bottomContainer, bottom, caption, number, win = $(window), activeImage = -1, ie6 = !window.XMLHttpRequest, hiddenElements = [], // Preload images
    preload = (document.documentElement, {}), preloadPrev = new Image(), preloadNext = new Image();
    /*
     Initialization
     */
    $(function() {
        // Append the Slimbox HTML code at the bottom of the document
        $("body").append($([ overlay = $('<div id="lbOverlay" />').click(close)[0], center = $('<div id="lbCenter" />')[0], bottomContainer = $('<div id="lbBottomContainer" />')[0] ]).css("display", "none")), 
        image = $('<div id="lbImage" />').appendTo(center).append(sizer = $('<div style="position: relative;" />').append([ prevLink = $('<a id="lbPrevLink" href="#" />').click(previous)[0], nextLink = $('<a id="lbNextLink" href="#" />').click(next)[0] ])[0])[0], 
        bottom = $('<div id="lbBottom" />').appendTo(bottomContainer).append([ $('<a id="lbCloseLink" href="#" />').click(close)[0], caption = $('<div id="lbCaption" />')[0], number = $('<div id="lbNumber" />')[0], $('<div style="clear: both;" />')[0] ])[0];
    }), /*
     API
     */
    // Open Slimbox with the specified parameters
    $.slimbox = function(_images, startImage, _options) {
        // The function is called for a single image, with URL and Title as first two arguments
        return options = $.extend({
            loop: !1,
            // Allows to navigate between first and last images
            overlayOpacity: .8,
            // 1 is opaque, 0 is completely transparent (change the color in the CSS file)
            overlayFadeDuration: 400,
            // Duration of the overlay fade-in and fade-out animations (in milliseconds)
            resizeDuration: 400,
            // Duration of each of the box resize animations (in milliseconds)
            resizeEasing: "swing",
            // "swing" is jQuery's default easing
            initialWidth: 250,
            // Initial width of the box (in pixels)
            initialHeight: 250,
            // Initial height of the box (in pixels)
            imageFadeDuration: 400,
            // Duration of the image fade-in animation (in milliseconds)
            captionAnimationDuration: 400,
            // Duration of the caption animation (in milliseconds)
            counterText: "Image {x} of {y}",
            // Translate or change as you wish, or set it to false to disable counter text for image groups
            closeKeys: [ 27, 88, 67 ],
            // Array of keycodes to close Slimbox, default: Esc (27), 'x' (88), 'c' (67)
            previousKeys: [ 37, 80 ],
            // Array of keycodes to navigate to the previous image, default: Left arrow (37), 'p' (80)
            nextKeys: [ 39, 78 ]
        }, _options), "string" == typeof _images && (_images = [ [ _images, startImage ] ], 
        startImage = 0), middle = win.scrollTop() + win.height() / 2, centerWidth = options.initialWidth, 
        centerHeight = options.initialHeight, $(center).css({
            top: Math.max(0, middle - centerHeight / 2),
            width: centerWidth,
            height: centerHeight,
            marginLeft: -centerWidth / 2
        }).show(), compatibleOverlay = ie6 || overlay.currentStyle && "fixed" != overlay.currentStyle.position, 
        compatibleOverlay && (overlay.style.position = "absolute"), $(overlay).css("opacity", options.overlayOpacity).fadeIn(options.overlayFadeDuration), 
        position(), setup(1), images = _images, options.loop = options.loop && images.length > 1, 
        changeImage(startImage);
    }, /*
     options:	Optional options object, see jQuery.slimbox()
     linkMapper:	Optional function taking a link DOM element and an index as arguments and returning an array containing 2 elements:
     the image URL and the image caption (may contain HTML)
     linksFilter:	Optional function taking a link DOM element and an index as arguments and returning true if the element is part of
     the image collection that will be shown on click, false if not. "this" refers to the element that was clicked.
     This function must always return true when the DOM element argument is "this".
     */
    $.fn.slimbox = function(_options, linkMapper, linksFilter) {
        linkMapper = linkMapper || function(el) {
            // return [el.href, el.title];
            return [ el.href, $(el).attr("data-content") || el.title ];
        }, linksFilter = linksFilter || function() {
            return !0;
        };
        var links, self = this;
        return self.on("click", ".js-open_box", function(ev) {
            ev.preventDefault(), // Build the list of images that will be displayed
            links = self.find(".js-link");
            var filteredLinks, length, link = this, startIndex = 0, i = 0;
            // We cannot use jQuery.map() because it flattens the returned array
            for (filteredLinks = $.grep(links, function(el, i) {
                return linksFilter.call(link, el, i);
            }), length = filteredLinks.length; length > i; ++i) filteredLinks[i] == link && (startIndex = i), 
            filteredLinks[i] = linkMapper(filteredLinks[i], i);
            return $.slimbox(filteredLinks, startIndex, _options);
        });
    };
}(jQuery);