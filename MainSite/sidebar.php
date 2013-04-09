<div id="sidebar">
	<div>
        <?php
            // Get the current page title
            $curPage = get_page();
            $curPageTitle = $curPage->post_title;

            // When displaying the events page show mini calendar
            if( strpos($curPageTitle, 'Event') !== FALSE) {
                echo do_shortcode("[eo_calendar]" );
            } else {

                // Ouput the three most recent events that have taken place
	            echo "<h2>Recent Events</h2>";
                echo "<ul class='style1'>";

                $events = eo_get_events(array('event_start_before'=>'today', 'numberposts'=>3,'order' => 'DESC', ));
                $first = false;

                if($events): 
                   foreach ($events as $event): 
                        
                        // The first event needs to be styled accordingly
                        if($first){
                            echo "<li>";
                        } else {
                            echo "<li class='first'>";
                            $first = true;
                        }


                            printf("<h3><a href='%s'>%s - %s</a></h3>", 
                              get_permalink($event->ID), 
                              date('j F, Y', strtotime($event->StartDate)),
                              get_the_title($event->ID)
                            ); 

                        echo "<p>" . substr($event->post_content, 0, 110) . "...</p>";
                        echo "</li>";

                    endforeach; 
                    echo '</ul>'; 
                 endif; 
        		echo "</ul>";
            }
       ?>
	</div>
</div>
