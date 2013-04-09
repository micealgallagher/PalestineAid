<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Handling 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20121212

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
    // Output the current page title in title tag
	$curPage = get_page();
	$curPageTitle = $curPage->post_title;

	echo "<title>PalestineAid - " . $curPageTitle . "</title>";
?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="wrapper">
	<?php get_header(); ?>
	<div id="page" class="container">
		<div id="content">
			<div>
                <?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">

				<!-- Display event title -->
				<h2 class="entry-title"><?php the_title(); ?></h2>

			</header><!-- .entry-header -->
	
			<div class="entry-content">
				<!-- Get event information, see template: event-meta-event-single.php -->
               <h4>Event Details</h4>
                <?php
                    echo "<ul><li><strong>Start: </strong>".eo_get_the_start('jS M Y',get_the_ID())."</li></ul>";
                ?>
				<!-- The content or the description of the event-->
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			<footer class="entry-meta">
			
			<?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->

			</article><!-- #post-<?php the_ID(); ?> -->		

		<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>

</body>
</html>
