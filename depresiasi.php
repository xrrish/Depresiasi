<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Depresiasi</title>
</head>

<body>

    <h1>Menghitung Depresiasi per-periode<br>dari suatu Aktiva Tetap</h1>

    <form action="depresiasi.php" method="post">
        Biaya Perolehan Aset Tetap <input type="text" name="angka1"><br><br>
        Estimasi Nilai Residu <input type="text" name="angka2"><br><br>
        Estimasi Masa Kegunaan <input type="text" name="angka3"><br><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST["angka1"])) {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $angka3 = $_POST["angka3"];
        $hasil = ($angka1 - $angka2) / $angka3;
        echo $hasil;
    }
    ?>

</body>
aa

</html>