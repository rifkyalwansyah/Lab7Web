<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator dan Kondisi</title>
</head>
<body>
    <h1>Demonstrasi Operator dan Kondisi</h1>

    <h2>Operator</h2>
    <?php
    $gaji = 1000000; 
    $pajak = 0.1;   
    $thp = $gaji - ($gaji * $pajak); 

    echo "<p>Gaji sebelum pajak = Rp. $gaji</p>";
    echo "<p>Gaji yang dibawa pulang = Rp. $thp</p>";
    ?>

    <h2>Kondisi dengan IF</h2>
    <?php
    $nama_hari = date("l"); 

    echo "<p>Hari ini adalah: ";
    if ($nama_hari == "Sunday") {
        echo "Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } elseif ($nama_hari == "Tuesday") {
        echo "Selasa";
    } elseif ($nama_hari == "Wednesday") {
        echo "Rabu";
    } elseif ($nama_hari == "Thursday") {
        echo "Kamis";
    } elseif ($nama_hari == "Friday") {
        echo "Jumat";
    } else {
        echo "Sabtu";
    }
    echo "</p>";
    ?>

    <h2>Kondisi dengan SWITCH</h2>
    <?php
    echo "<p>Hari ini adalah: ";
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        case "Wednesday":
            echo "Rabu";
            break;
        case "Thursday":
            echo "Kamis";
            break;
        case "Friday":
            echo "Jumat";
            break;
        default:
            echo "Sabtu";
    }
    echo "</p>";
    ?>

</body>
</html>
