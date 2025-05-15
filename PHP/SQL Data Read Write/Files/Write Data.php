<?php
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

// Get data from POST request
$sensor = $_POST['sensor'];
$location = $_POST['location'];
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$value3 = $_POST['value3'];
$reading_time = $_POST['reading_time'];

// Insert data into database
$sql = "INSERT INTO SensorData (sensor, location, value1, value2, value3, reading_time) VALUES ('$sensor', '$location', '$value1', '$value2', '$value3', '$reading_time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
