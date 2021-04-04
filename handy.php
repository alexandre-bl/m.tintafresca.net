<?php

function get_edition($date=null) {

    $year  = 0000;
    $month = 00;

    if( empty($date) ) {

        $date = getdate();

        $year  = $date["year"];
        $month = $date["mon"];

    } else {

        $year  = (int) explode( " ", $date )[0];
        $month = (int) explode( " ", $date )[1];

    }

    $edition = $year*12 + $month - 24009;

    return $edition;

}

?>