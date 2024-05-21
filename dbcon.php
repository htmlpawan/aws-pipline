<?php
$servername = "localhost"; // For example, "127.0.0.1" or "localhost"
$username = "root";
$password = "Beta@1234";
$dbname = "bhajidb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Assuming $conn is already established from previous code

$sql = "SELECT * FROM add_home_slider";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["Name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
