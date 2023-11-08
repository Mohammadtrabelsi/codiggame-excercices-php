<?php include 'parts/headart.php'; ?>

<h1>Valeurs Uniques</h1>
<h2>Excercice</h2>
<h2>Code</h2>
<pre>
function ValeursUniques($tableau)
{

    // On récupère les mêmes valeurs dans 1 seule case
    for ($i = 0; $i < count($tableau); $i++)
        $uTableau[$tableau[$i]] = 1;

    // On crée le nouveau tableau
    reset($uTableau);
    for ($i = 0; $i < count($tableau); $i++) {
        $tUnique[] = key($uTableau);
        next($uTableau);
    }
    return ($tUnique);
}

$tVals = array(5, 3, 5, 1, 8, 3, 5, 1, 3, 2, 2, 9, 1);
echo '<br> $tVals : ' . json_encode($tVals);
echo '<br> ValeursUniques : ' . json_encode(ValeursUniques($tVals));
</pre>
<h2>Solution</h2>
<?php
function ValeursUniques($tableau)
{

    // On récupère les mêmes valeurs dans 1 seule case
    for ($i = 0; $i < count($tableau); $i++)
        $uTableau[$tableau[$i]] = 1;

    // On crée le nouveau tableau
    reset($uTableau);
    for ($i = 0; $i < count($tableau); $i++) {
        $tUnique[] = key($uTableau);
        next($uTableau);
    }
    return ($tUnique);
}

$tVals = array(5, 3, 5, 1, 8, 3, 5, 1, 3, 2, 2, 9, 1);
echo '<br> $tVals : ' . json_encode($tVals);
echo '<br> ValeursUniques : ' . json_encode(ValeursUniques($tVals));

?>
<?php include 'parts/footerPart.php'; ?>

