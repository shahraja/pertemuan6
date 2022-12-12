<?php 

    function intToRoman($integer) {
        $roman_numerals = array(
            'M'  => 1000,
            'CM' => 900,
            'D'  => 500,
            'CD' => 400,
            'C'  => 100,
            'XC' => 90,
            'L'  => 50,
            'XL' => 40,
            'X'  => 10,
            'IX' => 9,
            'V'  => 5,
            'IV' => 4,
            'I'  => 1
        );
        $result = '';
        foreach ($roman_numerals as $roman => $number) {
            $matches = intval($integer/$number);
            $result .= str_repeat($roman, $matches);
            $integer = $integer % $number;
        }
        return $result;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    <div class="root">
        <div class="container">
            <h1>Praktikum 6</h1>
            <form action="." method="get">
                <input type="number" name="value" placeholder="masukan bilangin Romawi" autocomplete="off">
                <input type="submit" value="Check">
            </form>
            <div class="result">
                <?php
                    if(isset($_GET['value'])){
                        $value = $_GET['value'];

                        echo "<p>Hasil konversi dari <b>". $value ."</b> = <b>".intToRoman($value)."</b></p>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>