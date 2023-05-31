<?php
// protect against xss attacks and sql injection
function cleaningData($name) {
    global $connect;
    $sqlInjection = mysqli_escape_string($connect, $name);
    $xss = htmlspecialchars($sqlInjection);
    return $xss;
}
?>