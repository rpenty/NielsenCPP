<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nielsen-cpp
 */

$homepage_banner_title = get_field('homepage_banner_title');
$homepage_banner_subtitle = get_field('homepage_banner_subtitle');
$homepage_banner_text = get_field('homepage_banner_text');
$homepage_banner_cta = get_field('homepage_banner_cta');
$homepage_featured_partners_title = get_field('homepage_featured_partners_title');
$homepage_featured_partners_text = get_field('homepage_featured_partners_text');
$homepage_featured_partners_cta = get_field('homepage_featured_partners_cta');

$partner_apply_section_title = get_field('partner_apply_section_title');
$partner_apply_section_text = get_field('partner_apply_section_text');
$partner_apply_section_cta = get_field('partner_apply_section_cta');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
		<div class="banner-home">
			<div class="banner-home-inner">
		    	<h1><?php echo $homepage_banner_title; ?></h1>
		        <h2><?php echo $homepage_banner_subtitle; ?></h2>
		        <p><?php echo $homepage_banner_text; ?></p>
		    	<a href="/partners/" class="cpp-btn"><?php echo $homepage_banner_cta; ?> &gt;</a>
		    </div>
	   	</div>
	   	<div class="featured-partners-home">
	   		<h3><?php echo $homepage_featured_partners_title; ?></h3>
	        <p><?php echo $homepage_featured_partners_text; ?></p>
	        <ul class="clearfix">
	        	<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-eversight.jpg"></a></li>
	        	<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-prevedere.jpg"></a></li>
	        	<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-mobify.jpg"></a></li>
	       		<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-market-track.jpg"></a></li>
	     	</ul>
	   		<a href="/partners/" class="cpp-btn"><?php echo $homepage_featured_partners_cta; ?> &gt;</a>
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
	            	<a href="/apply/" class="cpp-btn-sm"><?php echo $partner_apply_section_cta; ?> &gt;</a>
	          	</div>
	      	</div>
	   	</div>
	  	<div class="news-home clearfix">
	  		<div class="news-home-title">
	       		<h3>News</h3>
	        </div>
	      	<div class="news-home-text">
	       		<p>Nielsen and Time Warner Medialab Forge Strategic Partnership to Deliver Innovative Consumer Neuroscience Solutions ...</p>
	     	</div>
	 	</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

