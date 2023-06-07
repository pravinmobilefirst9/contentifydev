<?php

$_SERVER['HTTP_HOST'] = 'contentify.betabularasa.com';
// Redirect to the desired URL
function internalRedirect($url) {
    header("HTTP/1.1 200 OK");
    echo "<html><body>";
    echo "<iframe src='$url' style='width: 100%; height: 100vh; border: none;'></iframe>";
    echo "</body></html>";
    exit;
}

// Check if the request is for https://example.com
if ($_SERVER['HTTP_HOST'] === 'contentify.betabularasa.com') {
    // Perform internal redirect to https://contentify.betabularasa.com/public/
    internalRedirect('https://contentify.betabularasa.com/public/');
} else {
    // Handle other requests as needed
    echo "Handle other requests as needed"
}
