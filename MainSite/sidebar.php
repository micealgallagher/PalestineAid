<div id="sidebar">
	<div>
        <?php
            $curPage = get_page();
            $curPageTitle = $curPage->post_title;

            if("Events" == $curPageTitle) {
                echo do_shortcode("[eo_calendar]" );
            } else {
	            echo "<h2>Recent Events</h2>";
                echo "<ul class='style1'>";

                $events = eo_get_events(array('event_start_before'=>'today', 'numberposts'=>3,'order' => 'DESC', ));
                $first = false;

                if($events): 
                   foreach ($events as $event): 
                        
                        if($first){
                            echo "<li>";
                        } else {
                            echo "<li class='first'>";
                            $first = true;
                        }

                        echo "<h3>" . date('j F, Y', strtotime($event->StartDate)) . " - " . $event->post_title . "</h3>";
                        echo "<p><a href='#'>" . substr($event->post_content, 0, 110) . "...</a></p>";
                        echo "</li>";

                    endforeach; 
                    echo '</ul>'; 
                 endif; 
        		echo "</ul>";
            }
       ?>
	</div>
</div>
