<?php
$id = filter_input(INPUT_GET,
    'roomId',
    FILTER_VALIDATE_INT,
    ["options" => ["min_range"=> 1]]
);
var_dump( $id );
