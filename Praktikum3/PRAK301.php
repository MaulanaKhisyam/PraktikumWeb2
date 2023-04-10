<html>
    <head>
        <title>Praktikum 301</title>
        <style>
            .merah {
                color: red;
            }
            .hijau {
                color: darkgreen;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <label for="">Nilai </label>
            <input type="text" name="nilai" value ="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>">
            <br>
            <button type="submit" name="submit">Cetak</button>
        </form>
        <?php 
        if (isset ($_POST['submit'])) {
            $angka = $_POST['nilai'];

            $nilai= 1;
            while($nilai <= $angka){
                if ($nilai %2 == 0){
                    echo "<p class = merah> <b> Peserta ke $nilai </b> </p>";
                }else if ($nilai % 2 == 1){
                    echo "<p class = hijau> <b> Peserta ke $nilai </b> </p>";
                }
            $nilai++;
            }
        }
        ?>
    </body>
</html>