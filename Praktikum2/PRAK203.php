<html>
    <head>
        <title>Praktikum 203</title>
    </head>
    <body>
        <form action=" " method="POST">
            <label for=" ">Nilai :</label>
                <input type="text" name="nilai">
                <br>
            <label for=" ">Dari :</label><br>
                <input type="radio" name="suhuawal" id="acelcius" value="celcius">celcius
                <br>
                <input type="radio" name="suhuawal" id="afahrenheit" value="fahrenheit">Fahrenheit
                <br>
                <input type="radio" name="suhuawal" id="areamur" value="reamur">Reamur
                <br>
                <input type="radio" name="suhuawal" id="akelvin" value="kelvin">Kelvin
                <br>
            <label for=" ">Ke :</label><br>
                <input type="radio" name="suhuakhir" id="tcelcius" value="celcius">celcius
                <br>
                <input type="radio" name="suhuakhir" id="tfahrenheit" value="fahrenheit">Fahrenheit
                <br>
                <input type="radio" name="suhuakhir" id="treamur" value="reamur">Reamur
                <br>
                <input type="radio" name="suhuakhir" id="tkelvin" value="kelvin">Kelvin
                <br>
            <button type="submit" name="submit">Konversi</button>
            <br>
            <br>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $nilai = $_POST['nilai'];
            $suhuawal = $_POST['suhuawal'];
            $suhuakhir = $_POST['suhuakhir'];
            $hasil = 0;

            if($suhuawal == "celcius" && $suhuakhir == "kelvin"){
                $hasil = $nilai + 273.15;
                echo "<b> Hasil Konversi: $hasil &#176K </b>";
            }
            else if ($suhuawal == "celcius" && $suhuakhir =="celcius"){
                $hasil = $nilai;
                echo "<b> Hasil Konversi: $hasil &#176C </b>";
            }
            else if ($suhuawal == "celcius" && $suhuakhir =="fahrenheit"){
                $hasil = $nilai *(9/5) +32;
                echo "<b> Hasil Konversi: $hasil &#176F </b>";
            }
            else if ($suhuawal == "celcius" && $suhuakhir =="reamur"){
                $hasil = (4/5)*$nilai;
                echo "<b> Hasil Konversi: $hasil &#176R </b>";
            }
            else if ($suhuawal == "fahrenheit" && $suhuakhir =="celcius"){
                $hasil = ($nilai -32) * 5/9;
                echo "<b> Hasil Konversi : $hasil &#176C </b>";
            }
            else if ($suhuawal == "fahrenheit" && $suhuakhir =="fahrenheit"){
                $hasil = $nilai;
                echo "<b> Hasil Konversi: $hasil &#176F </b>";
            }
            else if ($suhuawal == "fahrenheit" && $suhuakhir =="raemur"){
                $hasil = 4/9 * ($nilai - 32);
                echo "<b> Hasil Konversi: $hasil &#176R </b>";
            }
            else if ($suhuawal == "fahrenheit" && $suhuakhir =="kelvin"){
                $hasil = ($nilai + 459.67) * 5/9;
                echo "<b> Hasil Konversi: $hasil &#176K </b>";
            }
            else if ($suhuawal == "reamur" && $suhuakhir =="celcius"){
                $hasil = $nilai / 0.8;
                echo "<b> Hasil Konversi: $hasil &#176C </b>";
            }
            else if ($suhuawal == "reamur" && $suhuakhir =="fahrenheit"){
                $hasil = ($nilai * 2.25) + 32;
                echo "<b> Hasil Konversi: $hasil &#176F </b>";
            }
            else if ($suhuawal == "reamur" && $suhuakhir =="reamur"){
                $hasil = $nilai;
                echo "<b> Hasil Konversi: $hasil &#176R </b>";
            }
            else if ($suhuawal == "reamur" && $suhuakhir =="kelvin"){
                $hasil =  ($nilai / 0.8) + 273.15;
                echo "<b> Hasil Konversi: $hasil &#176K </b>";
            }
            else if ($suhuawal == "kelvin" && $suhuakhir =="celcius"){
                $hasil =  $nilai - 273.15;
                echo "<b> Hasil Konversi: $hasil &#176C </b>";
            }
            else if ($suhuawal == "kelvin" && $suhuakhir =="fahrenheit"){
                $hasil =  ($nilai  * 9/5) - 459.67;
                echo "<b> Hasil Konversi: $hasil &#176F </b>";
            }
            else if ($suhuawal == "kelvin" && $suhuakhir =="reamur"){
                $hasil =  4/5 * ($nilai -273);
                echo "<b> Hasil Konversi: $hasil &#176R </b>";
            }
            else if ($suhuawal == "kelvin" && $suhuakhir =="kelvin"){
                $hasil =  $nilai;
                echo "<b> Hasil Konversi: $hasil &#176K </b>";
            }    
        }
        ?>
    </body>
</html>