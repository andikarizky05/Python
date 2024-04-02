<html>

<head>
    <title>Info Beasiswa</title>
    <script type="text/PHP"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }

        form {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: inline-block;
            width: 100px;
        }

        input[type="radio"] {
            display: none;
        }

        input[type="radio"]+span {
            padding: 8px 16px;
            margin: 8px 0;
            display: inline-block;
            cursor: pointer;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
        }

        input[type="radio"]:checked+span {
            background-color: #e0e0e0;
            border-color: #999;
        }

        input[type="text"],
        input[type="radio"],
        select {
            width: 70%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"],
        input[type="reset"] {
            width: auto;
            padding: 8px 16px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            background-color: #1E9DFF;
            color: white;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="output.php" method="post" onsubmit="return validateForm()">
        <h2>PENERIMAAN BEASISWA</h2>
        <label>Nama:</label>
        <input type="text" name="nama">
        <label>NIM:</label>
        <input type="text" name="nim">
        <label>Kelas:</label>
        <input type="text" name="kelas">
        <label>Jurusan:</label>
        <select name="jurusan">
            <option value="Sistem_Informasi">SI</option>
            <option value="Tehnik_Informatika">TI</option>
        </select>
        <label>Jenis Kelamin:</label>
        <input type="radio" name="jekel" value="Pria" id="pria">
        <span onclick="selectGender('Pria')">Pria</span>
        <input type="radio" name="jekel" value="Wanita" id="wanita">
        <span onclick="selectGender('Wanita')">Wanita</span> <br>
        <label>IPK:</label>
        <input type="text" size="4" name="ipk">
        <input type="submit" value="Proses">
        <input type="reset" value="Batal">
    </form>

    <script>
        function selectGender(gender) {
            document.getElementById('pria').checked = (gender === 'Pria');
            document.getElementById('wanita').checked = (gender === 'Wanita');
        }

        function validateForm() {
            var priaChecked = document.getElementById('pria').checked;
            var wanitaChecked = document.getElementById('wanita').checked;

            if (!priaChecked && !wanitaChecked) {
                alert('Pilih jenis kelamin!');
                return false;
            }

            // You can add more validation if needed

            return true;
        }
    </script>
</body>

</html>