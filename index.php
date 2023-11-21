<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas acara kesenian</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <div class="container">
        <h2>Pendaftaran Peserta Acara Kesenian Sekolah</h2>
        <form action="input.php" method="post">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" name="nama" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <!-- <label for="jenis">jenis seni</label> -->
            jenis seni :
            <select id="jenis" name="jenis_seni" required>
                <option value="seni rupa">seni rupa</option>
                <option value="seni musik">seni musik</option>
                <option value="seni teater">seni teater</option>
                <option value="seni tari">seni tari</option>
            </select>

            <label for="alamatrumah">Alamat Rumah:</label>
            <input type="text" id="alamatrumah" name="alamatrumah" required>
            
            <label for="waktu">Waktu Seni:</label>
            <input type="time" id="waktu" name="waktu" required>

            <label for="tanggalseni">Tanggal Seni</label>
            <input type="date" id="tanggalseni" name="tanggalseni" required>

         

            <input type="submit" value="Daftar" name="submit">
        </form>
    </div>
</body>

</html>