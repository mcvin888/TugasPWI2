<?php
include('config.php');

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "UPDATE produk SET nama_produk = ?, harga = ?, deskripsi = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nama_produk, $harga, $deskripsi, $id);
    $stmt->execute();

    header('Location: index.php');
    exit;
}

// Fetch product data based on ID
$sql = "SELECT * FROM produk WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #222;
            color: #fff;
        }
        .header {
            background-image: url('path_to_your_car_image.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .header h1 {
            font-size: 36px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .container {
            margin: 20px auto;
            max-width: 600px;
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #444;
            color: white;
        }
        form .btn {
            display: inline-block;
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
        form .btn:hover {
            background-color: #0056b3;
        }
        a.btn {
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <h1>Edit Produk</h1>
    </div>

    <!-- Form Section -->
    <div class="container">
        <form action="edit_product.php?id=<?php echo $product['id']; ?>" method="POST">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" value="<?php echo htmlspecialchars($product['nama_produk']); ?>" required>

            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" value="<?php echo $product['harga']; ?>" required>

            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" required><?php echo htmlspecialchars($product['deskripsi']); ?></textarea>

            <button type="submit" class="btn">Update</button>
        </form>
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>
</html>

<?php $conn->close(); ?>
