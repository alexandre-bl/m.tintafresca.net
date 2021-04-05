<div id="singular">
    
    <?php

        $post = get_post();

        $content = $post->post_content;
        $date    = $post->post_date;

    ?>

    <h1 id="post_title"><?php
        echo $sing_title;
    ?></h1>

    <h2 class='post_date'> <?php
        echo $date;
    ?> </h2>

    <div id="post_content"><?php
        echo apply_filters( 'the_content',  $content );
    ?></div>

</div>