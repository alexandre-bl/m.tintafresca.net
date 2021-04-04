<?php

    require_once __DIR__ . "/handy.php";

    $editor  = get_users( [ 'role__in' => [ 'editor' ] ] )[0]->display_name;
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

            <img id="icon" src="<?php echo get_site_icon_url(); ?>">

            <p  id="edition"> Edição: <?php echo get_edition(); ?> </p>

            <p  id="diretor"> Diretor: <?php echo $editor; ?> </p>

        </div>

        <div id="posts"> <?php

            $posts = get_posts( array(
                'numberposts' => -1 
                )
            );

            $i = 0;

            foreach( $posts as $post ) {

                if( get_edition() == get_edition( get_the_date("Y m") ) or $i < 15 ) {
                    
                    ?> <div class="post">

                        <a class="post_link" href="<?php echo get_post_permalink($post->ID); ?>">

                            <h2 class="post_title"><?php echo $post->post_title; ?></h2>

                            <img class="post_img" src="<?php 
                                echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
                            ?>">

                            <div class="desc"></div>

                        </a>

                    </div> <?php 
                
                    $i += 1;

                }
                
            }

        ?> </div>

    </body>

</html>