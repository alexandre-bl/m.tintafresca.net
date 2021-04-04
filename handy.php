<?php

function get_edition($date=null) {

    $year  = 0000;
    $month = 00;

    if( empty($date) ) {

        $date = getdate();

        $year  = $date["year"];
        $month = $date["mon"];

    } else {

        $year  = array_slice( (array) $date, 0, 4 );
        $month = array_slice( (array) $date, 5, 2 );

    }

    $edition = $year*12 + $month - 24011;

    return $edition;

}

?>