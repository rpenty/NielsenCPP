<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nielsen-cpp
 */

$partners_banner_title = get_field('partners_banner_title');
$partners_banner_subtitle = get_field('partners_banner_subtitle');
$partners_overview_text = get_field('partners_overview_text');

$partner_apply_section_title = get_field('partner_apply_section_title');
$partner_apply_section_text = get_field('partner_apply_section_text');
$partner_apply_section_cta = get_field('partner_apply_section_cta');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
		<div class="banner-partners">
			<div class="banner-partners-inner">
		    	<h1><?php echo $partners_banner_title; ?></h1>
		        <h2><?php echo $partners_banner_subtitle; ?></h2>
		    </div>
	   	</div>
	   	<div class="partners">
	   		<p><?php echo $partners_overview_text; ?></p>
	   	</div>
	  	<div class="apply-now-section">
	      	<div class="apply-now-section-inner clearfix">
	        	<div class="connected-partner-logo">
	            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nielsen-connected-partner.png">
	         	</div>
	         	<div class="connected-partner-text">
	            	<h3><?php echo $partner_apply_section_title; ?></h3>
	            	<p><?php echo $partner_apply_section_text; ?></p>
	          	</div>
	          	<div class="connected-partner-apply">
	            	<a href="#" class="cpp-btn-sm"><?php echo $partner_apply_section_cta; ?> &gt;</a>
	          	</div>
	      	</div>
	   	</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

