<?php
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, $name! <br>";
}
echo "The filename of the currently executing script: " . $_SERVER['PHP_SELF'] . "<br>";
echo "The IP address of the client: " . $_SERVER['REMOTE_ADDR'] . "<br>";
?>