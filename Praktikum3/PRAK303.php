<html>
    <head>
        <title>Praktikum 303</title>
        <style>
            img {
                height: 30px;
                width: 30px;
            }
            p {
                color: red;
            }
        </style>
    </head>
    <body>
        <form action=" " method="POST">
            <label for="">Batas Bawah :</label>
                <input type="text" name="bawah" value="<?=isset($_POST['bawah']) ? $_POST['bawah'] : ''?>">
                <br>
            <label for="">Batas Atas :</label>
                <input type="text" name="atas" value="<?=isset($_POST['atas']) ? $_POST['atas'] : ''?>">
                <br>
            <button type="submit" name="submit">Cetak</button>
        </form>

        <?php 
        
        if(isset($_POST['submit'])){
            $bawah = $_POST['bawah'];
            $atas = $_POST['atas'];
            if($bawah > $atas){
                echo"<p class = eror> Batas bawah tidak boleh melebihi batas atas</p>";
            }else{
                do {
                    if(($bawah + 7) % 5 == 0){
                        echo"<img src=\"star-image.png\">";
                    }else{
                        echo" $bawah ";
                    }
                $bawah++;
                }while($bawah <= $atas);
            }
        }

        ?>
    </body>
</html>