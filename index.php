<?php

// List of IP addresses
$ipAddresses = array("192.168.1.1", "192.168.1.2", "192.168.1.3");

foreach ($ipAddresses as $ip) {
    // Set the desired IP address
    ini_set("display_errors", "On");
    ini_set("error_reporting", E_ALL);
    ini_set("max_execution_time", 0);

    // Your PHP script logic goes here
    //echo "Running script for IP: $ip\n";

    // Example: Execute a command with the current IP address
    $output = shell_exec("php ytScript.php $ip");
    echo $output;
}
?>
<html>
    <head></head>
</html>