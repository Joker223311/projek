<?php
session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["signup"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Hash password (disarankan menggunakan hashing untuk keamanan)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menambahkan data user baru ke database
        $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Pendaftaran Berhasil!");</script>';
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
     // Bagian Login
elseif (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query untuk memeriksa login
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION['fullname'] = $row['fullname'];
            echo '<script>alert("Login Berhasil!");</script>';
            header("Location: home.php");
            exit();
        } else {
            echo '<script>alert("Gagal, Password Berbeda!");</script>';
        }
    } else {
        echo '<script>alert("User Belum Terdaftar!");</script>';
    }

    $stmt->close();
}

}

$conn->close();
?>
