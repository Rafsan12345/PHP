<?php
// সেন্সর থেকে পাঠানো ডেটা রিসিভ করা
$temperature = $_GET['temperature'] ?? 'N/A';
$humidity = $_GET['humidity'] ?? 'N/A';

// সময় সহ করে সংরক্ষণ করা
$line = date("Y-m-d H:i:s") . " - Temp: $temperature °C | Humidity: $humidity %\n";

// ফাইলে লেখা (append mode)
file_put_contents("sensor_data.txt", $line, FILE_APPEND);

// সফলতার মেসেজ
echo "Data saved.";
?>
