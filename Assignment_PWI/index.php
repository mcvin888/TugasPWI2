<?php
include('config.php');

// Fetch product data from the database
$sql = "SELECT * FROM produk";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Price</title>
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
            background-image: url('path_to_your_car_image.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }
        .header h1 {
            font-size: 40px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }
        .container {
            margin: 20px auto;
            max-width: 90%;
        }
        .btn {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-align: center;
            display: block;
            max-width: 200px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .product-card {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
        }
        .product-card h2 {
            font-size: 20px;
            color: #fff;
        }
        .product-card p {
            font-size: 16px;
            color: #ccc;
        }
        .product-card .actions {
            margin-top: 15px;
        }
        .product-card .actions a {
            text-decoration: none;
            margin: 5px;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .product-card .btn-edit {
            background-color: #28a745;
        }
        .product-card .btn-edit:hover {
            background-color: #218838;
        }
        .product-card .btn-delete {
            background-color: #dc3545;
        }
        .product-card .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <h1>Data Produk</h1>
    </div>

    <!-- Content Section -->
    <div class="container">
        <a href="add_product.php" class="btn">Tambah Produk</a>

        <div class="product-grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="product-card">
                    <h2><?php echo htmlspecialchars($row['nama_produk']); ?></h2>
                    <p>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></p>
                    <p><?php echo htmlspecialchars($row['deskripsi']); ?></p>
                    <div class="actions">
                        <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
                        <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); ?>
