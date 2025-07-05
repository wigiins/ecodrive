<?php
require 'config.php';

echo "<h2>EcoDrive Admin Dashboard</h2>";

$query = "SELECT * FROM stations LIMIT 10"; // Replace with your actual table
$result = pg_query($conn, $query);

if ($result) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Location</th></tr>";
    while ($row = pg_fetch_assoc($result)) {
        echo "<tr><td>" . htmlspecialchars($row['id']) . "</td><td>" . 
             htmlspecialchars($row['name']) . "</td><td>" . 
             htmlspecialchars($row['location']) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p> Error fetching data: " . pg_last_error($conn) . "</p>";
}
?>
