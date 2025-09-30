<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Kota</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #333333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #f9f9f9;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #f9f9f9;
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            color: #333;
        }

        li:hover {
            background-color: #f0f0f0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Nama Kota di Indonesia</h1>
        <ul>
            <?php
                // Membuat array untuk menampung nama kota
                $kota = array("Jakarta", "Surabaya", "Bandung", "Medan", "Yogyakarta");

                // Menampilkan nama kota dengan perulangan foreach
                foreach ($kota as $k) {
                    echo "<li>" . $k . "</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>