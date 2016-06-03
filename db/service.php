<?php
$servername = "sql8.freemysqlhosting.net";
$username = "sql8122080";
$password = "i7qYIbxekz";
$dbname = "sql8122080";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `PhraseTable`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["phraseID"]. "*" . $row["wordID"]. "*" . $row["phrase"]."$";
    }
} else {
    echo "#";
}
$conn->close();
?>