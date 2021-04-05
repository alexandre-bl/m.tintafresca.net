<div id="header">

    <a href="<?php echo get_site_url(); ?>">

        <img id="icon" src="<?php echo $logo; ?>">

        <h1 id="title"><?php echo $title; ?></h1>

    </a>

    <a href="<?php

        if( $page != "pages" ) {

            $og = $_SERVER['REQUEST_URI'];

            echo get_site_url();
            echo "?page=pages&og=$og";

        } else {

            echo get_site_url()."/".$_GET["og"];

        }

    ?>">
        <img id="menu_button" src="<?php echo get_template_directory_uri()."/hamburger.png"; ?>">
    </a>

</div>