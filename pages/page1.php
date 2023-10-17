<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" type="text/css" href="../styles/updet.css">
    <style>
        /* Gaya CSS untuk kontainer */
        .container {
            display: flex;
        }

        /* Gaya CSS untuk sidebar */
        .sidebar {
            width: 200px;
        }

        /* Gaya CSS untuk konten */
        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Gaya CSS untuk formulir */
        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px; /* Bordered */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px; /* Lebar formulir */
            margin: 20px; /* Jarak antara formulir dan elemen lain */
        }

        /* Gaya CSS untuk input dan label di formulir */
        label {
            margin: 10px 0;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="number"],
        input[type="text"],
        select,
        input[type="file"] {
            width: 100%; /* Mengisi seluruh lebar formulir */
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 5px 0;
        }

        /* Gaya CSS untuk elemen radio dan checkbox */
        fieldset {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin: 0 5px;
        }

        /* Gaya CSS untuk tombol di formulir */
        .form-buttons {
            display: flex;
            justify-content: center;
        }

        input[type="submit"],
        input[type="reset"],
        input[type="button"] {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<<<<<<< HEAD:pages/page1.php
    <div class="navbar">
        <a href="../pages/main.php">Home</a>
        <a href="../pages/about.php">About</a>
        <a href="../index.php">Logout</a>
        <a href="#">      </a>
        <a href="#">      </a>
    </div>

=======
    <header class="navbar">
        <nav>
            <a href="../pages/main.html">Home</a>
            <a href="../pages/about.html">About</a>
            <a href="../index.html">Logout</a>
            <a href="#"> </a>
            <a href="#"> </a>
        </nav>
    </header>
>>>>>>> db945645268f663a798fdd6d8c5162404406fa22:pages/page1.html

    <div class="container">
        <div class="sidebar">
            <a href="../pages/main.html">Halaman Utama</a>
            <a href="../pages/page1.html">Profil</a>
            <a class="sidebar-toggle" onclick="toggleSidebar()">Surat</a>
            <div class="sidebar-content" id="sidebarContent">
                <a href="../pages/page2.html">Jenis Surat</a>
                <a href="../pages/status.html">Status Surat</a>
            </div>
        </div>

        <main class="content">
            <h3>Form Biodata</h3>
            <form action=".php" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap Anda">

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap Anda">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email Anda">

                <label for="jenjang">Jenjang Studi:</label>
                <select id="jenjang" name="jenjang">
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                </select>

                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" placeholder="NIM Anda">

                <label for="prodi">Program Studi:</label>
                <input type="text" id="prodi" name="prodi" placeholder="Program Studi Anda">

                <label for="ipk">IPK:</label>
                <input type="number" step="0.01" id="ipk" name="ipk" placeholder="IPK Anda">

                <label for="angkatan">Angkatan:</label>
                <input type="number" id="angkatan" name="angkatan" placeholder="Angkatan Anda">

                <label for="kontak">Kontak:</label>
                <input type="text" id="kontak" name="kontak" placeholder="Nomor Kontak Anda">

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir Anda">

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">

                <fieldset>
                    <legend>Jenis Kelamin:</legend>
                    <label for="laki">
                        <input type="radio" id="laki" name="jk" value="l" checked> Laki-laki
                    </label>
                    <label for="perempuan">
                        <input type="radio" id="perempuan" name="jk" value="p"> Perempuan
                    </label>
                </fieldset>

                <div class="form-buttons">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                    <input type="button" value="Update" onclick="updateData()">
                </div>
            </form>
        </main>
    </div>

    <script>
        function updateData() {
            // Implementasi logika pembaruan di sini (biasanya dengan JavaScript atau server-side script).
            alert("Data berhasil diperbarui!");
        }
    </script>
    <script src="../styles/script.js"></script>
   
</body>
</html>
