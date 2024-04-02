<?php

// Check for form submission 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get form data
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $jekel = $_POST['jekel'];
    $ipk = $_POST['ipk'];

    // Output form data
    echo '<html>';
    echo '<head>';
    echo '<style>';
    echo 'body {font-family: Arial; background-color: #f2f2f2; padding: 20px;}';
    echo 'h2 {text-align: center;}';
    echo 'p {background-color: #fff; padding: 10px; border-radius: 4px;}'; 
    echo '</style>';
    echo '</head>';
    echo '<body>';
    echo '<h2>Data Pendaftar</h2>';
    echo '<p>Nama: ' . $nama . '</p>';
    echo '<p>NIM: ' . $nim . '</p>';
    echo '<p>Kelas: ' . $kelas . '</p>';
    echo '<p>Jurusan: ' . $jurusan . '</p>';
    echo '<p>Jenis Kelamin: ' . $jekel . '</p>';
    echo '<p>IPK: ' . $ipk . '</p>';
    echo '</body>';
    echo '</html>';

    } else {
    echo "No form submission";
    }

?>