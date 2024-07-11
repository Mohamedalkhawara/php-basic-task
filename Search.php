<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST['url'];

    if (!preg_match("/^https?:\/\//", $url)) {
        $url = 'http://' . $url;
    }

    header("Location: $url");
    
} else {
    echo "Invalid request method.";
}
?>
