<?php

function get_edition($date=null) {

    if( empty($date) ) {

        $date = getdate()

    }

    $edition = $date["year"]*12 + $date["mon"] - 24011;

    return $edition;

}

?>