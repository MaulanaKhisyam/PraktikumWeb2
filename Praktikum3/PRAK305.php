<html>
    <head>
        <title>Praktikum 305</title>
    </head>
    <body>
        <form action=" " method ="POST">
            <input type="text" name="input" value="<?=isset($_POST['input']) ? $_POST['input'] : ''?>">
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php 
        
        if(isset($_POST['submit'])){
            $nilai = $_POST['input'];
            $arraykata = str_split($nilai);
            $totalkata = count($arraykata);

            foreach($arraykata as $dummy){
                $i = 0;
                while($i < $totalkata){
                    if($i == 0){
                        echo strtoupper($dummy);
                    }else{
                        echo strtolower($dummy);
                    }
                $i++;
                }
            }
        }
        
        ?>
    </body>
</html>