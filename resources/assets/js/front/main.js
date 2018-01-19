/*
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	skel.breakpoints({
		xlarge: '(max-width: 1680px)',
		large: '(max-width: 1280px)',
		medium: '(max-width: 980px)',
		small: '(max-width: 736px)',
		xsmall: '(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$wrapper = $('#wrapper');

		// Hack: Enable IE workarounds.
			if (skel.vars.IEVersion < 12)
				$body.addClass('ie');

		// Touch?
			if (skel.vars.mobile)
				$body.addClass('touch');

		// Transitions supported?
			if (skel.canUse('transition')) {

				// Add (and later, on load, remove) "loading" class.
					$body.addClass('loading');

					$window.on('load', function() {
						window.setTimeout(function() {
							$body.removeClass('loading');
						}, 100);
					});

				// Prevent transitions/animations on resize.
					var resizeTimeout;

					$window.on('resize', function() {

						window.clearTimeout(resizeTimeout);

						$body.addClass('resizing');

						resizeTimeout = window.setTimeout(function() {
							$body.removeClass('resizing');
						}, 100);

					});

			}

		// Scroll back to top.
			$window.scrollTop(0);

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Panels.
			var $panels = $('.panel');

			$panels.each(function() {

				var $this = $(this),
					$toggles = $('[href="#' + $this.attr('id') + '"]'),
					$closer = $('<div class="closer" />').appendTo($this);

				// Closer.
					$closer
						.on('click', function(event) {
							$this.trigger('---hide');
						});

				// Events.
					$this
						.on('click', function(event) {
							event.stopPropagation();
						})
						.on('---toggle', function() {

							if ($this.hasClass('active'))
								$this.triggerHandler('---hide');
							else
								$this.triggerHandler('---show');

						})
						.on('---show', function() {

							// Hide other content.
								if ($body.hasClass('content-active'))
									$panels.trigger('---hide');

							// Activate content, toggles.
								$this.addClass('active');
								$toggles.addClass('active');

							// Activate body.
								$body.addClass('content-active');

						})
						.on('---hide', function() {

							// Deactivate content, toggles.
								$this.removeClass('active');
								$toggles.removeClass('active');

							// Deactivate body.
								$body.removeClass('content-active');

						});

				// Toggles.
					$toggles
						.removeAttr('href')
						.css('cursor', 'pointer')
						.on('click', function(event) {

							event.preventDefault();
							event.stopPropagation();

							$this.trigger('---toggle');

						});

			});

			// Global events.
				$body
					.on('click', function(event) {

						if ($body.hasClass('content-active')) {

							event.preventDefault();
							event.stopPropagation();

							$panels.trigger('---hide');

						}

					});

				$window
					.on('keyup', function(event) {

						if (event.keyCode == 27
						&&	$body.hasClass('content-active')) {

							event.preventDefault();
							event.stopPropagation();

							$panels.trigger('---hide');

						}

					});

		// Header.
			var $header = $('#header');

			// Links.
				$header.find('a').each(function() {

					var $this = $(this),
						href = $this.attr('href');

					// Internal link? Skip.
						if (!href
						||	href.charAt(0) == '#')
							return;

					// Redirect on click.
						$this
							.removeAttr('href')
							.css('cursor', 'pointer')
							.on('click', function(event) {

								event.preventDefault();
								event.stopPropagation();

								window.location.href = href;

							});

				});

		// Footer.
			var $footer = $('#footer');

			// Copyright.
			// This basically just moves the copyright line to the end of the *last* sibling of its current parent
			// when the "medium" breakpoint activates, and moves it back when it deactivates.
				$footer.find('.copyright').each(function() {

					var $this = $(this),
						$parent = $this.parent(),
						$lastParent = $parent.parent().children().last();

					skel
						.on('+medium', function() {
							$this.appendTo($lastParent);
						})
						.on('-medium', function() {
							$this.appendTo($parent);
						});

				});

		// Main.
			var $main = $('#main');

			// Thumbs.
				$main.children('.thumb').each(function() {

					var	$this = $(this),
						$image = $this.find('.image').first(), $image_img = $image.children('img'),
						x;

					// No image? Bail.
						if ($image.length == 0)
							return;

					// Image.
					// This sets the background of the "image" <span> to the image pointed to by its child
					// <img> (which is then hidden). Gives us way more flexibility.

						// Set background.
							$image.css('background-image', 'url(' + $image_img.attr('src') + ')');

						// Set background position.
							if (x = $image_img.data('position'))
								$image.css('background-position', x);

						// Hide original img.
							$image_img.hide();

					// Hack: IE<11 doesn't support pointer-events, which means clicks to our image never
					// land as they're blocked by the thumbnail's caption overlay gradient. This just forces
					// the click through to the image.
						if (skel.vars.IEVersion < 11)
							$this
								.css('cursor', 'pointer')
								.on('click', function() {
									$image.trigger('click');
								});

				});

			// Poptrox.
			var gallerySettings = {
			    preload:                    false,          // If true, preload fullsize images in the background
			    baseZIndex:                 20000,          // Base Z-Index
			    fadeSpeed:                  300,            // Global fade speed
			    overlayColor:               '#000000',      // Overlay color
			    overlayOpacity:             0,              // Overlay opacity
			    windowMargin:               25,             // Window margin size (in pixels; only comes into play when an image is larger than the viewport)
			    windowHeightPad:            0,              // Window height pad
			    selector:                   'a.image',      // Anchor tag selector
			    caption: 					getCaption,		// Caption settings (see docs)
			    popupSpeed:                 300,            // Popup (resize) speed
			    popupWidth:                 200,            // Popup width
			    popupHeight:                50,             // Popup height
			    popupIsFixed:               false,          // If true, popup won't resize to fit images
			    useBodyOverflow:            true,           // If true, the BODY tag is set to overflow: hidden when the popup is visible
			    usePopupEasyClose:          true,           // If true, popup can be closed by clicking on it anywhere
			    usePopupForceClose:         true,           // If true, popup can be closed even while content is loading
			    usePopupLoader:             true,           // If true, show the popup loader
			    usePopupCloser:             false,          // If true, show the popup closer button/link
			    usePopupCaption:            true,           // If true, show the popup image caption
			    usePopupNav:                true ,          // If true, show (and use) popup navigation
			    usePopupDefaultStyling:     false,          // If true, default popup styling will be applied (background color, text color, etc)
				    popupBackgroundColor:       '#FFFFFF',      // (Default Style) Popup background color (when usePopupStyling = true)
				    popupTextColor:             '#000000',      // (Default Style) Popup text color (when usePopupStyling = true)
				    popupLoaderTextSize:        '2em',          // (Default Style) Popup loader text size
				    popupCloserBackgroundColor: '#000000',      // (Default Style) Popup closer background color (when usePopupStyling = true)
				    popupCloserTextColor:       '#FFFFFF',      // (Default Style) Popup closer text color (when usePopupStyling = true)
				    popupCloserTextSize:        '20px',         // (Default Style) Popup closer text size
				    popupPadding:               10,             // (Default Style) Popup padding (when usePopupStyling = true)
				    popupCaptionHeight:         60,             // (Default Style) Popup height of caption area
				    popupCaptionTextSize:       null,           // (Default Style) Popup caption text size
				    popupBlankCaptionText:      '(untitled)',   // Applied to images that don't have captions (when captions are enabled)
				    popupCloserText:            '',       		// Popup closer text
				    popupLoaderText:            '&bull;&bull;', // Popup loader text
				    popupClass:                 'poptrox-popup',// Popup class
				    popupSelector:              null,           // (Advanced) Popup selector (use this if you want to replace the built-in popup)
				    popupLoaderSelector:        '.loader',      // (Advanced) Popup Loader selector
				    popupCloserSelector:        '.closer',      // (Advanced) Popup Closer selector
				    popupCaptionSelector:       '.caption',     // (Advanced) Popup Caption selector
				    popupNavPreviousSelector:   '.nav-previous',// (Advanced) Popup Nav Previous selector
				    popupNavNextSelector:       '.nav-next',    // (Advanced) Popup Nav Next selector
				onPopupClose: 				closeModal,		// Called when popup closes
				onPopupOpen: 				openModal		// Called when popup opens
			};

				function getCaption($a) {
					var caption = '';
					var cameraModel = $a.data('camera');
					var galleryTitle = $a.siblings('.gallery-title').text();
					var photoCaption = $a.data('caption');

					caption += '<div class="caption-camera">' + cameraModel + '</div>';
					caption += '<div class="caption-gallery">' + galleryTitle + '</div>';
					caption += '<div class="caption-photo">' + photoCaption + '</div>';

					return caption;
				}

				function closeModal(){
					$body.removeClass('modal-active');
				}

				function openModal(){
					$body.addClass('modal-active');
				}

				// Create the galleries
				$('#cayman-islands-2017').poptrox(gallerySettings);
				$('#england-2015').poptrox(gallerySettings);
				$('#us-virgin-islands-2014').poptrox(gallerySettings);
				$('#washington-dc-2013').poptrox(gallerySettings);
				$('#arizona-2012').poptrox(gallerySettings);
				$('#hawaii-2012').poptrox(gallerySettings);
				$('#spain-2010').poptrox(gallerySettings);
				$('#san-francisco-2008').poptrox(gallerySettings);
				$('#dallister-2008').poptrox(gallerySettings);
				$('#lonjillian-2008').poptrox(gallerySettings);

	});

})(jQuery);
