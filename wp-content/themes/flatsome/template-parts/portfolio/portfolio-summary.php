<?php if(!flatsome_option('portfolio_title')) { ?>
	<div class="featured_item_cats breadcrumbs mb-half">
		<?php echo get_the_term_list( get_the_ID(), 'featured_item_category', '', '<span class="divider">|</span>', '' ); ?>
	</div>
	<h1 class="entry-title uppercase"><?php the_title(); ?></h1>
	<?php $portfolio_date = get_the_date($entry->post_date); ?>
    <div style="display: flex; align-items:center; " class='date-container minor-meta portfolio-posted-on'> <?php echo $portfolio_date ?></div>
	<div class="divider clearfix" style="width:100%;height:1px;background-color:#828286;margin: 1rem 0;"></div>
<?php } ?>

<?php $right_custom_sidebar = get_field('block_right_sidebar', get_the_ID()); ?>
<?php if(!empty($right_custom_sidebar)) { ?>
	<div style="font-weight: bold; color: #333333;"><?php the_excerpt();?></div>
	<div style="margin-bottom: 1rem;"><?php the_post_thumbnail('original');; ?></div>
<?php } ?>

<?php if ( get_theme_mod( 'portfolio_share', 1 ) ) : ?>
	<div class="portfolio-share">
		<?php echo do_shortcode( '[share style="small"]' ) ?>
	</div>
<?php endif; ?>

<?php if(get_the_term_list( get_the_ID(), 'featured_item_tag')) { ?>
<div class="item-tags is-small bt pt-half uppercase">
	<strong><?php _e('Tags','woocommerce'); ?>:</strong>
	<?php echo strip_tags (get_the_term_list( get_the_ID(), 'featured_item_tag', '', ' / ', '' )); ?>
</div>
<?php } ?>
