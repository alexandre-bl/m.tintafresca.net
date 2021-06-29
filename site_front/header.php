<?php

global $wpdb;
$table_name = "adds";
$table_name = $wpdb->prefix . $table_name;
$charset_collate = $wpdb->get_charset_collate();
require_once(ABSPATH . "wp-admin/includes/upgrade.php");

dbDelta(" CREATE TABLE IF NOT EXISTS $table_name ( img TEXT, link TEXT ) $charset_collate; ");

$query = $wpdb->get_results(" SELECT * FROM $table_name ");

$add = array( "img" => "", "url" => "" );

if( !empty( $query[0] ) ) {
    echo "got here";
    $add["img"] = str_replace( "http://tintafresca.net", "https://tintafresca.net", $query[0]->img );
    $add["url"] = str_replace( "http://tintafresca.net", "https://tintafresca.net", $query[0]->link);
}

?>

<div id="header">

    <a href="<?php echo get_site_url(); ?>">

        <img id="icon" src="<?php echo $logo; ?>">

        <h1 id="title"><?php echo $title; ?></h1>

    </a>

    <a href="<?php

        if( $page != "pages" ) {

            $og = $_SERVER['REQUEST_URI'];

            echo get_site_url();
            echo "?pages=yes&og=$og";

        } else {

            echo get_site_url()."/".$_GET["og"];

        }

    ?>">
        <img id="menu_button" src="<?php echo get_template_directory_uri()."/hamburger.png"; ?>">
    </a>

</div>
<a class="add" id="header_add" href="<?php echo $add["url"]; ?>"> <img src="<?php echo $add["img"]; ?>"> </a>