<?php

    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );
    
    $pages = get_pages();
    $pages_html = "";

    foreach( $categories as $category ) {

        if( $category->name != "Uncategorized" and
            $category->name != "Destaques"     and
            $category->name != "Opinião"       ) {

            $category_link = get_site_url() . "?category=$category->name";
            $category_title = $category->name;

            $pages_html .= "<li><a href='$category_link'>$category_title</a></li>";

        }

    }

    foreach( $pages as $page ) {

        $page_link = get_page_link( $page->ID );
        $page_title = $page->post_title;

        $pages_html .= "<li><a href='$page_link'>$page_title</a></li>";

    }

?>

<div id="pages">

    <ul>

        <li><a href="<?php echo get_site_url(); ?>">Página Inicial</a></li>
        <?php echo $pages_html; ?>
        <li><a href="<?php echo get_site_url()."/index.php/feed"; ?>">Feed</a></li>

    </ul>

</div>