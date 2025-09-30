<?php
include('config.php');

// Cek apakah parameter id ada dan valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id']; // Pastikan id adalah integer

    // Cek apakah koneksi berhasil
    if ($conn) {
        // Persiapkan query DELETE
        $sql = "DELETE FROM produk WHERE id = ?";
        if ($stmt = $conn->prepare($sql)) {
            // Bind parameter dan eksekusi query
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                // Jika sukses, redirect ke halaman utama
                header('Location: index.php');
                exit;
            } else {
                // Jika query gagal dieksekusi
                echo "Error executing query: " . $stmt->error;
            }
        } else {
            echo "Error preparing query: " . $conn->error;
        }
    } else {
        echo "Koneksi ke database gagal!";
    }
} else {
    echo "ID tidak valid!";
}

$conn->close();
?>
