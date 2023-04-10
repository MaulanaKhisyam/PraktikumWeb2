<html>
    <head>
        <title>Praktikum 302</title>
        <style>
            img{
                width:50px;
            }
        </style>
    </head>
    <body>
        <form action=" " method="POST">
            <label for="">Tinggi :</label>
            <input type="text" name ="tinggi" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>">
            <br>
            <label for="">Alamat Gambar :</label>
            <input type="url" name="gambar" value="<?=isset($_POST['gambar']) ? $_POST['gambar'] : ''?>">
            <br>
            <button type="submit" name="submit">Cetak</button>
        </form>

        <?php 
        
        if (isset ($_POST['submit'])) {
            $tinggi = $_POST['tinggi'];
            $gambar = $_POST['gambar'];
            $i = 1;  
            while( $i <= $tinggi ) {
                $j = 1;
                while( $j < $i ) {
                    echo "<img style='opacity:0;' src='$gambar' >";
                    $j = $j + 1;
                }
                $k = $tinggi;
                while( $k >= $i ) {
                    echo "<img src='$gambar'>";
                    $k = $k - 1;
                }
            echo "<br>";
            $j = 1; $k = $tinggi;
            $i++; 
            }              
        }
        ?>
    </body>
</html>