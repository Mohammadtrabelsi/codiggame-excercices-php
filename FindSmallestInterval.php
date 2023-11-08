<?php include 'parts/headart.php'; ?>
<h1>Find Smallest Interval</h1>
<h2>Excercice</h2>
Je dois implémenter la méthode findSmallestInterval(numbers)
qui retourne le plus petit intervalle positif entre 2 éléments du
tableau numbers(numbers est en fait un array de type int)
<h2>Code</h2>
<pre>
function findSmallestInterval($numbers)
{
    rsort($numbers);
    $small = $numbers[0] - $numbers[1];
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        $diff = $numbers[$i] - $numbers[$i + 1];
        if ($diff < $small && 0 < $small) {
            $small = $diff;
        }
    }
    return $small;
}

$numbers = array(1, 6, 4, 8, 2);
echo '<br> Numbers : ' . json_encode($numbers);
echo '<br> Find Smallest Interval :' . findSmallestInterval($numbers);
</pre>
<h2>Solution</h2>

<?php
function findSmallestInterval($numbers)
{
    rsort($numbers);
    $small = $numbers[0] - $numbers[1];
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        $diff = $numbers[$i] - $numbers[$i + 1];
        if ($diff < $small && 0 < $small) {
            $small = $diff;
        }
    }
    return $small;
}

$numbers = array(1, 6, 4, 8, 2);
echo '<br> Numbers : ' . json_encode($numbers);
echo '<br> Find Smallest Interval :' . findSmallestInterval($numbers);

?>
<?php include 'parts/footerPart.php'; ?>









