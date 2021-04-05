<div id="header">

    <a href="<?php echo get_site_url(); ?>">
        <img id="icon" src="<?php echo $logo; ?>">
        <h1 id="title"><?php echo $title; ?></h1>
    </a>

    <p  id="edition"> Edição: <?php echo get_edition(); ?> </p>

    <p  id="diretor"> Diretor: <?php echo $editor; ?> </p>

    <p  id="data"> Data: <?php echo $date; ?> </p>

    <img id="menu_button" src="<?php echo get_template_directory_uri()."/hamburger.png"; ?>">

</div>