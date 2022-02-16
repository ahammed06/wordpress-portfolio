<?php
/**
 * ryancv-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ryancv-child
 */

/**
 * Enqueue  styles
 */
function ryancv_child_stylesheets() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ryancv_child_stylesheets' );

/**
 * Load the parent rtl.css file
 */
function ryancv_child_enqueue_rtl_style() {
	// Dynamically get version number of the parent stylesheet
	$theme   = wp_get_theme( 'ryancv' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	if ( is_rtl() ) {
		wp_enqueue_style( 'ryancv-rtl', get_template_directory_uri() . '/rtl.css', array(), $version );
	}
}
add_action( 'wp_enqueue_scripts', 'ryancv_child_enqueue_rtl_style' );


add_action( 'wp_footer', 'cScript' );
function cScript(){
	?>
		<script>
			jQuery(document).on("ready", function() {
				var animateIn = jQuery('.container.opened').attr('data-animation-in')
				var animateOut = jQuery('.container.opened').attr('data-animation-out')
				var goNext = false
				var goPrev = false

				jQuery('.container.opened .card-inner.active').addClass('open')

				jQuery('.container.opened .card-inner').each(function () {
					if(!jQuery(this).hasClass('animated')){
						jQuery(this).addClass('animated')
					}
					
					if(jQuery(this).hasClass('active')){
						jQuery(this).addClass(animateIn)
					}else{
						jQuery(this).addClass(animateOut)
						jQuery(this).addClass('hidden')
					}

					if(!jQuery(this).hasClass('active')){
						jQuery(this).addClass('active')
					}
				});

				// jQuery('#menu-main-menu li a.one-page-menu-item').on('click', function(e){
				// 	e.preventDefault()
				// 	console.log('here');
					window.addEventListener('hashchange', function(){
						// window.history.pushState({}, null, '/');
						window.history.replaceState({}, null, '/');
						history.go(-1)
					});
					// alert("The paragraph was clicked.");
				// });

				let scrollDiv = document.querySelectorAll('.container.opened .card-inner');
				for (let i = 0; i < scrollDiv.length; i++) {
					scrollDiv[i].addEventListener("mousewheel", function (event) {
						var elem = jQuery('.container.opened .card-inner:not(.hidden) .card-wrap');
						var elemInner = jQuery('.container.opened .card-inner:not(.hidden) .card-wrap .type-page');
						var elemId = jQuery('.container.opened .card-inner:not(.hidden)').attr('id').replace('card-','');
						console.log(elemId);
						
						if (elem.scrollTop()+elem.height() >= elemInner[0].scrollHeight && elem.parents('.card-inner').nextAll('.card-inner').length>0 && event.deltaY > 0 && goNext==true) {
							jQuery('#menu-main-menu li a[href="#'+elemId+'"]').parent().removeClass('current-menu-item')
							jQuery('#menu-main-menu li a[href="#'+jQuery('.container.opened .card-inner:not(.hidden)').next().attr('id').replace('card-','')+'"]').parent().addClass('current-menu-item')

							elem.parents('.card-inner').addClass('hidden')
							elem.parents('.card-inner').removeClass(animateIn)
							elem.parents('.card-inner').addClass(animateOut)
							elem.parents('.card-inner').next().removeClass('hidden')
							elem.parents('.card-inner').next().removeClass(animateOut)
							elem.parents('.card-inner').next().addClass(animateIn)

							goNext = false
						}
						else if(elem.scrollTop() <= 0 && elem.parents('.card-inner').prevAll('.card-inner').length>0 && event.deltaY < 0 && goPrev==true) {
							jQuery('#menu-main-menu li a[href="#'+elemId+'"]').parent().removeClass('current-menu-item')
							jQuery('#menu-main-menu li a[href="#'+jQuery('.container.opened .card-inner:not(.hidden)').prev().attr('id').replace('card-','')+'"]').parent().addClass('current-menu-item')

							elem.parents('.card-inner').addClass('hidden')
							elem.parents('.card-inner').removeClass(animateIn)
							elem.parents('.card-inner').addClass(animateOut)
							elem.parents('.card-inner').prev().removeClass('hidden')
							elem.parents('.card-inner').prev().removeClass(animateOut)
							elem.parents('.card-inner').prev().addClass(animateIn)

							goPrev = false
						}

						
						if (elem.scrollTop() <= 0 && event.deltaY < 0) {
							console.log('scrolling up');
							goPrev = true
						}
						else if (elem.scrollTop()+elem.height() >= elemInner[0].scrollHeight && event.deltaY > 0) {
							console.log('scrolling down');
							goNext = true
						}
						else {
							goNext = false
							goPrev = false
						}
						
					}, false);
				}
			});
		</script>
	<?php
}