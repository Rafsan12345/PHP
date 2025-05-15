<?php
$filename = "sensor_data.txt";

// ফাইল আছে কিনা চেক করি
if (file_exists($filename)) {
    // ফাইলের সবকিছু পড়া
    $content = file_get_contents($filename);
    
    // ওয়েবপেজে দেখানো
    echo nl2br(htmlspecialchars($content));
} else {
    echo "File not found!";
}
?>
