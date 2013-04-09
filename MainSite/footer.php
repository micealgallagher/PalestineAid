</div>
<div id="footer-content" class="container">
	<div id="fbox1">
        <h2>Site Map</h2>
		<ul class="style4">
            <?php
                // Output the pages in menu_order
                $pages = get_pages(array('parent' => 0, 'sort_column' => 'menu_order'));
                foreach ($pages as $page) {

                    $pageTitle = $page->post_title;
                    $pageUrl = get_page_link($page->ID);
                
                    echo "<li><a href='" . $pageUrl . "'>" .  $pageTitle . "</a></li>";
                }
            ?>
		</ul>
	</div>
	<div id="fbox2">
<h2>Social Networks -  Come Join Us</h2>
            <?php
                if ( function_exists( 'icit_spot' ) )
                    icit_spot( 'Social Networks' );
            ?>
	</div>
	<div id="fbox3">
		<h2>About this site</h2>
		<ul class="style4">
			<li><a href="#">Powered by WordPress</a></li>
			<li><a href="#">Designed by FCT</a></li>
			<li><a href="#">Implemented by the_seeker_who</a></li>
		</ul>
	</div>
</div>
<div id="footer" class="container">
	<p>Copyright (c) 2013 PalestineAid.org. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>.  Palestine flag-face, artist unknown occupiedpalestine.wordpress.com</a>.</p>
</div>
