<?php
session_start();
require 'config.php';
echo "<H2>Welcome to EcoDrive</H2>";

$result=pg_query($conn, "SELECT 'EcoDrive is Connected!' AS message");

if ($result) {
  $row = pg_fetch-assoc($result);
  echo "<p>" . htmlspecialchars($row['message']) . "</p>";
} else {
    echo "<p> Query failed: " .pg_last_error($conn) . "</p>";
}
// Login and signup logic
// (as shown before)
?>
<!-- HTML omitted for brevity -->
