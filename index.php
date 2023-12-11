<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Diri</title>
    <style>
        input[type=text],[type=email],[type=password],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: lightskyblue;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="form">
        <h2>Formulir Data Diri</h2>
        <form action="proses.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password_email">Password Email:</label>
            <input type="password" id="password_email" name="password_email" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <button type="submit">Simpan</button>
        </form>
    </div>

    <script>
        // Untuk menangani redirect pada halaman index.html setelah menampilkan popup terima kasih
        const urlParams = new URLSearchParams(window.location.search);
        const successMessage = urlParams.get('success');

        if (successMessage === 'true') {
            alert('Terima kasih! Data berhasil disimpan.');
        }
    </script>
</body>

</html>