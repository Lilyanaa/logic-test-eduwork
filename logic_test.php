<?php 
# No 1
function faktorial($angka=1) 
{
    if($angka==1) {
        return 1;
    } else {
        return $angka * faktorial($angka-1);
    }
}
echo "4*3*2*1 = ".faktorial(4);
echo "<br>";
echo "8*7*6*5*4*3*2*1 = ".faktorial(8);

echo "<hr>";

# No 2
$input_kata = "abcde";
$output = strlen($input_kata);

for ($i=($output-1) ; $i >= 0 ; $i--)
    {
        echo $input_kata[$i];
    }

echo "<hr>";

# No 3
$angka = "9.86-A5.321";
function printDigitValue($value)
{
    $n = strlen($value);
    $result = "";
    for ($i = 0; $i < $n; $i++) {
        if (is_numeric($value[$i])) {
            $result .= $value[$i];
        }
            
        }
    echo $result . "<br>";
    $n = strlen($result);
    for ($i = 0; $i < $n; $i++) {
        echo str_pad($result[$i], $n - $i, '0', STR_PAD_RIGHT) . "<br>";
    }
}
printDigitValue($angka);
echo "<hr>";


# No 4
$a = 3;
$b = 7;

echo "a = ".$a.", b = ".$b;
echo "<br>";

list($a, $b) = array($b, $a);
echo "a = ".$a.", b = ".$b;
echo "<hr>";


# No 5
function terbilang($angka) {
    $angka = abs($angka);
    $baca = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $terbilang  = "";

    if ($angka < 0 or $angka > 100) {
        echo "silahkan masukkan bilangan 1-100";
    } elseif ($angka < 12) { // antara 1 - 11
        $terbilang = ' ' . $baca[$angka];
    } elseif ($angka < 20) { // antara 12 - 19
        $terbilang = terbilang($angka - 10) . " belas";
    } elseif ($angka < 100) { // antara 20 - 99
        $terbilang = terbilang($angka / 10) . " puluh" . terbilang($angka % 10);
    } else {
        echo "seratus";
    }

    return $terbilang;
}
echo "4   = " . terbilang(1) . "<br>";
echo "20  = " . terbilang(20) . "<br>";
echo "39  = " . terbilang(39) . "<br>";
echo "104 = " . terbilang(104) . "<br>";
echo "<hr>";

# No 6
$array = array(1, 4, 7, 9, 12);
$hasil = [];

foreach ($array as $value) {
    if ($value > 2 and $value < 15 ) {
        array_push($hasil, $value);
    }
}
print_r($hasil);
echo "<hr>";

# No 7
$array = array(1, 4, 7, 9, 12);
$hasil = [];

foreach ($array as $value) {
    if ($value > 2 and $value < 15 ) {
        array_push($hasil, $value);
    }
}
print_r(count($hasil));
echo "<hr>";

# No 8
$int = 15;
    for ($i = 1; $i<=$int; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "EduWork <br>";
        } else if ($i % 3 == 0) {
            echo "Edu <br>";
        } else if ($i % 5 == 0) {
            echo "Work <br>";
        } else {
            echo $i . "<br>";
        }
    }
echo "<hr>";

# No 9
$data = array(4, 2, 6, 88, 3, 11);
$min = $data[0];
$max = $data[0];

for ($i=0; $i < count($data) ; $i++) { 
    if($data[$i] < $min){
        $min = $data[$i];
    }else if($data[$i] > $max){
        $max = $data[$i];
    }
}

echo "low : " . $min;
echo "<br>";
echo "high : " . $max;
echo "<hr>";

# No 10
$input_thn = 2024;

function kabisat($tahun){
    if ($tahun % 4 == 0) {
        echo "$tahun adalah tahun kabisat <br>";
    } else {
        echo "$tahun bukan tahun kabisat <br>";
    }
}
kabisat($input_thn);
?>