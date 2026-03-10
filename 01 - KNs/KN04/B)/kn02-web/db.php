<?php
$servername = "m347-kn04-db";
$username = "root";
$password = "rootpassword";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Host, User FROM mysql.user;";
$result = $conn->query($sql);

echo "<html><body>";
echo "<p>Diese Seite macht eine Abfrage auf die Datenbank.</p>";
echo "<p>Das ausgeführte Query ist: <i>" . $sql . "</i></p>";
echo "<p>Das Resultat:</p><ul>";

while($row = $result->fetch_assoc()) {
  echo "<li>" . $row["Host"] . " / " . $row["User"] . "</li>";
}

echo "</ul></body></html>";
$conn->close();
?>