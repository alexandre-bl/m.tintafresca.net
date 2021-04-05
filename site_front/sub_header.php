<?php

    $date    = getdate();
    $date    = $date["year"] . "/" . $date["mon"] . "/" . $date["mday"];

    $editor  = get_users( [ 'role__in' => [ 'editor' ] ] )[0]->display_name;

?>

<div id="sub_header">

    <p  id="edition"> Edição: <?php echo get_edition(); ?> </p>

    <p  id="diretor"> Diretor: <?php echo $editor; ?> </p>

    <p  id="data"> Data: <?php echo $date; ?> </p>

</div>