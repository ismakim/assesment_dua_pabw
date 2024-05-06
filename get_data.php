<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assesment_dua_pabw";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM pasien";
$result = $conn->query($sql);

// Format data menjadi JSON
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);
$conn->close();
?>
