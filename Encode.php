<?php include 'parts/headart.php'; ?>

<h1>encode</h1>
<h2>Exercice</h2>
cette fonction retour une chaine avec avec le nombre d'occurences consécutives de chaque lettre
<br>
ex : aaabbbz => 3a3b1z
<h2>Code</h2>
<pre>
function encode(string $paintText): string
{
    $chars = str_split($paintText);
    $char = $chars[0];
    $cpt = 0;
    $reponse = "";

    foreach ($chars as $item) {
        if ($char == $item) {
            $cpt++;
        } else {
            $reponse .= $cpt . $char;
            $cpt = 1;
            $char = $item;
        }
    }
    $reponse .= $cpt . $char;
    return $reponse;
}

$chaine = "aaabbz";
echo '<br>Chaine : ' . $chaine;
echo '<br>Encode : ' . encode($chaine);
</pre>
<h2>Solution</h2>

<?php
function encode(string $paintText): string
{
    $chars = str_split($paintText);
    $char = $chars[0];
    $cpt = 0;
    $reponse = "";

    foreach ($chars as $item) {
        if ($char == $item) {
            $cpt++;
        } else {
            $reponse .= $cpt . $char;
            $cpt = 1;
            $char = $item;
        }
    }
    $reponse .= $cpt . $char;
    return $reponse;
}

$chaine = "aaabbz";
echo '<br>Chaine : ' . $chaine;
echo '<br>Encode : ' . encode($chaine);

?>
<?php include 'parts/footerPart.php'; ?>

