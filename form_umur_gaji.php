<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input - Hitung Umur dan Gaji</title>
</head>
<body>
    <h1>Form Input Data</h1>
    <form method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="tgl_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tgl_lahir" name="tgl_lahir" required><br><br>

        <label for="pekerjaan">Pilih Pekerjaan:</label><br>
        <select id="pekerjaan" name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Manajer">Manajer</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nama = htmlspecialchars($_POST["nama"]);
        $tgl_lahir = $_POST["tgl_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        
        $tanggal_lahir = new DateTime($tgl_lahir);
        $tanggal_sekarang = new DateTime();
        $umur = $tanggal_sekarang->diff($tanggal_lahir)->y;

        
        $gaji = 0;
        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 8000000;
                break;
            case "Desainer":
                $gaji = 7000000;
                break;
            case "Manajer":
                $gaji = 10000000;
                break;
            default:
                $gaji = 0;
        }

        
        echo "<h2>Hasil Input</h2>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Tanggal Lahir: $tgl_lahir</p>";
        echo "<p>Umur: $umur tahun</p>";
        echo "<p>Pekerjaan: $pekerjaan</p>";
        echo "<p>Gaji: Rp. " . number_format($gaji, 0, ",", ".") . "</p>";
    }
    ?>
</body>
</html>
