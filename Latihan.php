<!DOCTYPE html>
<html>

<head>
    <title>Info Beasiswa - Output</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            color: #555;
            margin-bottom: 10px;
        }

        p strong {
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $nim = $_POST["nim"];
            $kelas = $_POST["kelas"];
            $jurusan = $_POST["jurusan"];
            $jekel = $_POST["jekel"];
            $ipk = $_POST["ipk"];

            echo "<h2>DATA PENERIMA BEASISWA</h2>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Kelas:</strong> $kelas</p>";
            echo "<p><strong>Jurusan:</strong> $jurusan</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jekel</p>";
            echo "<p><strong>IPK:</strong> $ipk</p>";
        }
        ?>
    </div>
</body>

</html>
