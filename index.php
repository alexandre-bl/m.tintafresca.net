<?php

    require_once __DIR__ . "/handy.php";

    $page = page();

    $logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $logo_id , 'full' )[0];
    
    $title = get_bloginfo( 'name' );
    $sing_title = $title;

    $meta_img = get_site_icon_url();
    if( is_single() ) {
        if( !empty(wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0]) ) {
            $meta_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
        }
    }

    $desc = get_bloginfo( 'description' );

    $meta_desc = get_post_meta( get_post()->ID, "Description", TRUE );

    if( $page == "singular" ) {

        $sing_title = get_the_title();

        if( !empty( $meta_desc ) ) {

            $desc = $meta_desc;

        }

    }

?>

<!DOCTYPE html>
<html>

    <head>

        <title><?php echo $sing_title; ?></title>
        <meta name="description" content="<?php echo $desc; ?>">
        <meta name="og:image" content="<?php echo $meta_img; ?>">
        <link rel="icon" href="<?php echo $logo; ?>">

        <link rel='stylesheet' href='<?php echo get_template_directory_uri()."/style.css"; ?> '>

        <meta charset="utf-8">

        <?php if( $page == "pages" ) {

        echo "<meta name="robots" content="noindex,nofollow" />";

        } ?>


    </head>

    <body> <?php

        require_once __DIR__ . "/site_front/header.php";
        require_once __DIR__ . "/site_front/sub_header.php";

        if( $page == "pages" ) {

            require_once __DIR__ . "/site_front/pages.php";

        } else if( $page == "posts" ) {

            require_once __DIR__ . "/site_front/posts.php";

        } else if( $page == "singular" ) {

            require_once __DIR__ . "/site_front/singular.php";

        }

    ?> </body>

</html>