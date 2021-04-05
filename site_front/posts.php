<div id="posts"> <?php

    if( !empty( $_GET["category"] ) ) {

        $category = get_cat_ID( $_GET["category"] );

    } else {

        $category = 0;

    }

    $posts = get_posts( array(
        'numberposts' => -1,
        'category' =>    $category
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