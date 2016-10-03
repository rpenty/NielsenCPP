<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nielsen-cpp
 */

$apply_page_title = get_field('apply_page_title');
$apply_page_text = get_field('apply_page_text');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
		<div class="banner-partners">
			<div class="banner-partners-inner">
		    	<h1><?php echo $apply_page_title; ?></h1>
		    </div>
	   	</div>
	   	<div class="apply">
	   		<p><?php echo $apply_page_text; ?></p>
	   	</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

