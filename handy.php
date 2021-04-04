<?php

function get_edition($date=null) {

    $year  = 0000;
    $month = 00;

    if( empty($date) ) {

        $date = getdate();

        $year  = $date["year"];
        $month = $date["mon"];

    } else {

        $year  = (string) array_slice( (array) $date, 0, 4 );
        $month = (string) array_slice( (array) $date, 5, 2 );

    }

    $edition = (int) $year*12 + (int) $month - 24011;

    return $edition;

}

?>