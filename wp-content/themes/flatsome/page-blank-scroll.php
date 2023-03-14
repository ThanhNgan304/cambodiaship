<?php
/*
Template name: Page - Full Width Scroll
*/
get_header(); ?>
<?php do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>
		
	<?php endwhile; // end of the loop. ?>

</div>

<?php do_action( 'flatsome_after_page' ); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.20/lodash.min.js" integrity="sha512-90vH1Z83AJY9DmlWa8WkjkV79yfS2n2Oxhsi2dZbIv0nC4E6m5AbH8Nh156kkM7JePmqD6tcZsfad1ueoaovww==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA==" crossorigin="anonymous"></script>
<script type="text/javascript">
	(function($) {
		$(document).ready(function () {
			$('#wrapper').before('<span class="point-scroll" style="position: fixed; bottom: 0;left: -100px;">&nbsp;</span>')
			$('html, body').animate({
				scrollTop: 0
			}, 0);
			
			$('.back-to-top').on('click', function(){
				window.onscrollStatus = true;
				setTimeout(function () {
					window.onscrollStatus = false;
				}, 1200)
			});
			window.onscrollStatus = false;
			window.lastScrollTop = window.pageYOffset;
			window.currentScrollIndex = 0
			const sections = document.querySelectorAll("section");
			window.listPage = []
			sections.forEach(function (item) {
				window.listPage.push('#' + item.id)
			})
			const idUrl = window.location.hash
			if ($(idUrl) !== undefined && idUrl !== "") {
				const idOffset = $(idUrl).offset().top
				console.log(idUrl)
				for(let page in window.listPage) {
					if ($(window.listPage[page]).offset().top > idOffset) {
						window.currentScrollIndex = parseInt(page)
						break;
					}
				}
				scrollToIDA(idUrl)
			}
			$(document).on('scroll', _.debounce(handleScroll, 200))
			function handleScroll(e) {
				if($(window).width() < 960){
					return true;
				}
				if (window.onscrollStatus) {
					e.preventDefault();
					e.stopPropagation();
					return true;
				}
				const scroll = $('.point-scroll').offset().top;
				let scrollOffset = 0;
				const menuHeight = 0;
				let listPage = [...window.listPage];
				const headerStuck = $('.header-wrapper').hasClass('stuck')
				const headerHeight = headerStuck ? $('.header-wrapper').height() : 0
				if(scroll > window.lastScrollTop) {
					const indexScroll = (window.currentScrollIndex + 1) > (window.listPage.length - 1) ? 0 : (window.currentScrollIndex + 1)
					const id = window.listPage[indexScroll]
					window.currentScrollIndex = indexScroll
					scrollOffset = $(id).offset().top
					scrollToIDA(id);
				} else {
					const indexScroll = (window.currentScrollIndex - 1) < 0 ? 0 : (window.currentScrollIndex - 1)
					const id = window.listPage[indexScroll]
					window.currentScrollIndex = indexScroll
					scrollOffset = $(id).offset().top
					scrollToIDA(id);
				}
				window.lastScrollTop = scrollOffset;
			}
		})
		var scrolltoOffset = $('#header').outerHeight() - 2;
		$(document).on('click', '.header-nav a', function(e) {
			console.log(e)
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				scrollToIDA(this.hash)
			}
		});
		function scrollToIDA(id) {
			console.log(id)
			if (id === "" || window.onscrollStatus) {
				return true
			}
			window.onscrollStatus = true;
			const headerStuck = $('.header-wrapper').hasClass('stuck')
			const scrolltoOffset = 0
			let scrollto = Math.round($(id).offset().top) - scrolltoOffset;
			$('html, body').animate({
				scrollTop: scrollto
			}, 500);
			setTimeout(function () {
				window.lastScrollTop = $('.point-scroll').offset().top
				window.onscrollStatus = false
			}, 800)
		}
	})(jQuery);
</script>
<?php get_footer(); ?>
