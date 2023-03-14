<?php get_template_part('template-parts/portfolio/portfolio-title', flatsome_option('portfolio_title')); ?>
<?php $right_custom_sidebar = get_field('block_right_sidebar', get_the_ID()); ?>
<div class="portfolio-top">
	<div class="row">
		<?php if (!empty($right_custom_sidebar)) { ?>
			<div class="large-3 col" style="margin-top: 2rem; border: solid 1px #828286;
  height: fit-content;
    min-height: 30rem;
    ">
				<aside class="" style="">
					<?php echo $right_custom_sidebar ?>
				</aside>
			</div>
			<div style="margin-top: 3rem;max-width: 72%;
    margin-right: 1.5rem;" id="portfolio-content" class="large-9 col col-first" role="main"  >
			<div class="portfolio-inner">
				<?php get_template_part('template-parts/portfolio/portfolio-summary'); ?>
				<?php get_template_part('template-parts/portfolio/portfolio-content'); ?>
			</div>
		<?php } ?>
		
		<?php if (empty($right_custom_sidebar)) { ?>
			<div class="large-4 col col-first"  style="margin-top: 3rem;">
				<div class="tuyen_dung_img_left" style="">
				<?php the_post_thumbnail('original');; ?>
				</div>
			</div>
			<div id="portfolio-content" class="large-8 col " role="main"  style="margin-top: 3rem;">
			<div class="portfolio-inner">
				<?php get_template_part('template-parts/portfolio/portfolio-summary'); ?>
				<?php get_template_part('template-parts/portfolio/portfolio-content'); ?>	
			</div>
		<?php } ?>

	</div>
</div>
<div class="row">
	<div class="divider clearfix" style="width:100%;height:1px;background-color:#828286;margin: 2rem 0;"></div>
</div>
<div class="row" style="margin-bottom:2rem;">
	<?php if (!empty($right_custom_sidebar)) { ?>
		<h1 lang="vi" class="translate_str" style="font-family: Tahoma;
					font-style: normal;
					font-weight: bold; margin-left: 15px;">TIN TỨC LIÊN QUAN</h1>
		<h1 lang="en-GB" class="translate_str" style="font-family: Tahoma;
					font-style: normal;
					font-weight: bold; margin-left: 15px;">RELATED NEWS</h1>
		<h1 lang="km" class="translate_str" style="font-family: Tahoma;
					font-style: normal;
					font-weight: bold; margin-left: 15px;">ព័ត៌មានពាក់ព័ន្ធ</h1>
	<?php } ?>
	<?php if (empty($right_custom_sidebar)) { ?>
		<h1 lang="vi" class="translate_str" style="font-family: Tahoma;
					font-style: normal;
					font-weight: bold;  margin-left: 15px;">VỊ TRÍ TUYỂN DỤNG</h1>
		<h1 lang="en-GB" class="translate_str" style="font-family: Tahoma;
					font-style: normal;
					font-weight: bold;  margin-left: 15px;">VACANCIES</h1>
		<h1 lang="km" class="translate_str" style="font-family: Tahoma;
					font-style: normal;
					font-weight: bold;  margin-left: 15px;">វិបុលភាព</h1>

	<?php } ?>
</div>
<div class="portfolio-bottom">
	<?php get_template_part('template-parts/portfolio/portfolio-next-prev'); ?>
	<?php if(!empty($right_custom_sidebar)) { ?>
		<div class="related_news" style="margin-bottom: 1rem;">
			<?php get_template_part('template-parts/portfolio/portfolio-related'); ?>
		</div>
	<?php } ?>
	<?php if(empty($right_custom_sidebar)) { ?>
		<div class="related_tuyen_dung" style="margin-bottom: 1rem;">
			<?php get_template_part('template-parts/portfolio/portfolio-related'); ?>
		</div>
	<?php } ?>
	
</div>