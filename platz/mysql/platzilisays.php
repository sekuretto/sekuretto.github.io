 <?php
$servername = "localhost";
$username = "root";
$password = "sala";
$database = "platz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

$sql = "INSERT INTO KAYTTAJA (kayttajanimi, salasana, email, kaupunki)
VALUES ('nimi', MD5('salasana'), 'sähköposti@sposti.com', 'kaupunki')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 