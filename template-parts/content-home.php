<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nielsen-cpp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
		<div class="banner-home">
	        <h1>Unleash the Power of Your Network</h1>
	        <h2>THE NIELSEN CONNECTED PARTNER PROGRAM</h2>
	        <p>There's power in partnering up. With Nielsen's Connected Partner Program you can easily connect your network. Now, you can shift from managing and analyzing data to making smarter, faster decisions. Because when the data and analytics get smarter, everyone wins.</p>
	        <a href="#" class="cpp-btn">FIND A PARTNER &gt;</a>
	      </div>
	      <div class="featured-partners-home">
	        <h3>Featured Partners</h3>
	        <p>Helping you make smarter decisions and take faster actions</p>
	        <ul class="clearfix">
	          <li><a href="#"><img src="wp-content/themes/nielsen-cpp/images/logo-eversight.jpg"></a></li>
	          <li><a href="#"><img src="wp-content/themes/nielsen-cpp/images/logo-prevedere.jpg"></a></li>
	          <li><a href="#"><img src="wp-content/themes/nielsen-cpp/images/logo-mobify.jpg"></a></li>
	          <li><a href="#"><img src="wp-content/themes/nielsen-cpp/images/logo-market-track.jpg"></a></li>
	        </ul>
	        <a href="#" class="cpp-btn">Explore All Partners &gt;</a>
	      </div>
	      <div class="apply-now-home">
	        <div class="apply-now-home-inner clearfix">
	          <div class="connected-partner-logo">
	            <img src="wp-content/themes/nielsen-cpp/images/nielsen-connected-partner.png">
	          </div>
	          <div class="connected-partner-text">
	            <h3>Interested in Becoming a Member?</h3>
	            <p>You'll gain access to data and resources that will make you even more valuable to your clients.</p>
	          </div>
	          <div class="connected-partner-apply">
	            <a href="#" class="cpp-btn-sm">Apply Now &gt;</a>
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

