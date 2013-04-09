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
    $eventDate = eo_get_event_archive_date('Y-m-d');
    // Output the current page title in title tag
	$curPageTitle = "Events for ".$eventDate;

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
                <?php
                    if( eo_is_event_archive('day') )
	                    //Viewing date archive
	                    echo '<h2>'.__('Events: ','eventorganiser').' '.eo_get_event_archive_date('jS F Y').'</h2>';
                    elseif( eo_is_event_archive('month') )
	                    //Viewing month archive
	                    echo '<h2>'.__('Events: ','eventorganiser').' '.eo_get_event_archive_date('F Y').'</h2>';
                    elseif( eo_is_event_archive('year') )
	                    //Viewing year archive
	                    echo '<h2>'.__('Events: ','eventorganiser').' '.eo_get_event_archive_date('Y').'</h2>';
                    else
	                    '<h2>'._e('Events','eventorganiser').'</h2>';
                ?>

                <?php 
                    $events = eo_get_events(array('ondate'=> $eventDate ,'order' => 'DESC', ));

                    if($events) {
                        foreach ($events as $event): 

                            echo "<p>";
                            printf("<h3><a href='%s'>%s</a></h3>", 
                              get_permalink($event->ID), 
                              get_the_title($event->ID)
                            ); 

                            echo "<p>" . substr($event->post_content, 0, 500) . "...</a></p>";
                            echo "</p>";

                            echo "<br>";

                        endforeach; 
                    } else {
                        echo "No events found of the selected day.";
                    }
                ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>

</body>
</html>
