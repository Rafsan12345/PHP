<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "example_esp_data";
$password = "example_esp_data";
$dbname = "example_esp_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data
$sql = "SELECT sensor, location, value1, value2, value3, reading_time FROM SensorData";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

$conn->close();
?>
