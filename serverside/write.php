<?php
$key = $_GET["key"];
$message = $_GET["message"];
try {
    $f = fopen($key, "w") or die("FAILED");
    fwrite($f, $message);
    fclose($f);
    echo "SUCCESS";
} catch(Exception $e) {
    echo "FAILED";
}
?>
