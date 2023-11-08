<?php include 'parts/headart.php'; ?>

<h1> Somme TAB</h1>
<h2>Excercice</h2>
<h2>Code</h2>
<pre>
function calc($array, $n1, $n2)
{

    if ($n2 > count($array) || $n1 > $n2 || $n1 < 0) {
        echo 'erreur';
    } else {
        $somme = 0;
        for ($i = $n1; $i <= $n2; $i++) {
            $somme = $somme + $array[$i];
        }
        return $somme;
    }
}

$array = [0, 1, 2, 3, 4, 5, 3];
$n1 = 1;
$n2 = 5;
echo '<br> N1 : ' . $n1;
echo '<br> N2 : ' . $n2;
echo '<br> $array : ' . json_encode($array);
echo '<br> calc : ' . calc($array, $n1, $n2);
</pre>
<h2>Solution</h2>

<?php
function calc($array, $n1, $n2)
{

    if ($n2 > count($array) || $n1 > $n2 || $n1 < 0) {
        echo 'erreur';
    } else {
        $somme = 0;
        for ($i = $n1; $i <= $n2; $i++) {
            $somme = $somme + $array[$i];
        }
        return $somme;
    }
}

$array = [0, 1, 2, 3, 4, 5, 3];
$n1 = 1;
$n2 = 5;
echo '<br> N1 : ' . $n1;
echo '<br> N2 : ' . $n2;
echo '<br> $array : ' . json_encode($array);
echo '<br> calc : ' . calc($array, $n1, $n2);

?>
<?php include 'parts/footerPart.php'; ?>


