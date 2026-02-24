<?php
$servername = "kn02b-db";
$username = "root";
$password = "rootpass";

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