<div id="singular">
    
    <?php

        $post = get_post();

        $content = $post->post_content;

    ?>

    <h1 id="post_title"><?php
        echo $sing_title;
    ?></h1>

    <?php
        echo $content;
    ?>

</div>