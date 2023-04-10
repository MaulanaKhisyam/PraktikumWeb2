<html>
    <head>
        <title>Praktikum 304</title>
        <style>
            img{
                width: 50px;
            }
        </style>
    </head>
    <body>
        <?php 
            $jmlBintang = null;
            $gambar = "<Img src=\"star-image.png\">";

            if(isset($_GET['jmlBintang'])){
                $jmlBintang = $_GET['jmlBintang'];
            }
            if(isset($_GET['tambah'])){
                $jmlBintang +=1;
            }
            if(isset($_GET['kurang'])){
                $jmlBintang -=1;
            }
            if(empty($jmlBintang)){
                ?>
                <form action="" method="get">
                    <label for="jmlBintang">Jumlah Bintang : </label>
                    <input type="text" name="jmlBintang" id="jmlBintang">
                    <br>
                    <button type="submit">Submit</button>
                </form>
                
                <?php 

            }elseif(!empty($jmlBintang)){
                echo "Jumlah Bintang : ".$jmlBintang;
                echo "<br>";
                $i = 0;
                while($i < $jmlBintang){
                    echo $gambar;
                    $i++;
                }
                ?>
                <form action="" method="get">
                    <input type="text" name="jmlBintang" value="<?= $jmlBintang ?>"  hidden>
                    <button type="submit" name="tambah" value="tambah">Tambah</button>
                    <button type="submit" name="kurang" value="kurang">Kurang</button>
                </form>
                <?php
            }


        ?>
    </body>
</html>