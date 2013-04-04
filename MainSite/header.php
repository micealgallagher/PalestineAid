	<div id="header" class="container">
		<div id="logo">
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" width="350px" />
		</div>
		<div id="menu">
			<ul>
                <?php
                    $pages = get_pages(array('parent' => 0, 'sort_column'=>'menu_order'));

                    $curPage = get_page();
                    $curPageTitle = $curPage->post_title;

                    foreach ($pages as $page) {

                        $pageTitle = $page->post_title;
                        $pageUrl = get_page_link($page->ID);
                        $class = "";

                        if($curPageTitle == $pageTitle){
                            $class = " class='active'";
                        }
                    
                        echo "<li " . $class . "><a href='" . $pageUrl . "'>" .  $pageTitle . "</a></li>";
                    }
                ?>
			</ul>
		</div>
	</div>
<?php

    if( is_front_page() ){
        ?>
	<div id="banner" class="container">
		<div id="column1">
            <?php
                if ( function_exists( 'icit_spot' ) )
                    icit_spot( 'Our Mission In Palestine' );
            ?>
		</div>
		<div id="column2"><img src="<?php bloginfo('template_url'); ?>/images/pics02.jpg" width="792" height="500" alt="" /></div>
	</div>
        <?php
    }else{
        ?>

    <div id="banner" class="container" style="height: 100px">
		<div id="column1">

		</div>
		<div id="column2"><img src="<?php bloginfo('template_url'); ?>/images/pics02small.jpg" width="792" height="100" alt="" /></div>
	</div>

        <?php
    }
?>
