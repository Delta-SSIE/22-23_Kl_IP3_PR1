<?php

function exceptions_error_handler($severity, $message, $filename, $lineno) {
        throw new ErrorException($message, 0, $severity, $filename, $lineno);
}

set_error_handler('exceptions_error_handler');
//$i = 1;
//$j = 0;
//echo $i/$j;

try{
    $name = "Eduard";
    echo "Na večeři přijde $namee";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

function inverse($x) {
    if (!$x) {
                throw new Exception('Division by zero.');
            }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

// Continue execution
echo "Hello World\n";