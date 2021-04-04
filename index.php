<?php

    $title = get_bloginfo( 'name' );
    $meta_img = get_site_icon_url();
    if( is_single() ) {
        if( !empty(wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0]) ) {
            $meta_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
        }
    }
    $desc = get_bloginfo( 'description' );
    $meta_desc = get_post_meta( get_post()->ID, "Description", TRUE );

    if( is_singular() ) {

        $title = get_the_title();

        if( !empty( $meta_desc ) ) {

            $desc = $meta_desc;

        }

    }

?>

<!DOCTYPE html>
<html>

    <head>

        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $desc; ?>">
        <meta name="og:image" content="<?php echo $meta_img; ?>">
        <link rel="icon" href="<?php echo get_site_icon_url(); ?>">

        <link rel='stylesheet' href='<?php echo get_template_directory_uri()."/style.css"; ?> '>

        <meta charset="utf-8">

    </head>

    <body>

        <div id="header">

            <h1 id="title"> <?php echo $title ?> </h1>

        </div>

    </body>

</html>