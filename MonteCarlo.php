<?php include 'parts/headart.php'; ?>
<h1>Monte Carlo</h1>
<h2>Excercice</h2>
Méthode de Monte Carlo pour le calcul d'aire.
Difficulté : Moyenne

Le but de cette fiche est de présenter la méthode de Monte Carlo pour calculer l'aire sous une courbe représentative d'une fonction. Pour simplifier, on supposera ici que nos fonctions sont toutes positives sur l'intervalle sur lequel on les considère.

Définissons d'abord ce qu'est l'aire sous la courbe représentative d'une fonction sur un intervalle [a,b] : C'est tout simplement l'aire comprise entre la courbe représentative, l'axe des abscisses et les droites x=a et x=b.

Illustration

Décrivons à présent la méthode de Monte Carlo pour calculer l'aire sous la courbe d'une fonction f sur un intervalle [a,b] :

On choisit un rectangle qui contient l'aire qui nous intéresse. Le plus simple est de prendre le rectangle dont un coté est le segment [AB] où A(a,0) et B(b,0) et dont l'autre coté vaut le maximum de f sur [a,b].courbe et rectangle
On choisit des points au hasard dans le rectangle. Plus le nombre de points est important plus notre résultat sera précis.Courbe et points
On compte le nombre de points qui sont dans la surface que l'on cherche à approximer (ici on compte les points sous la courbe).
L'approximation de l'aire cherchée est alors
Créez un programme qui prend en entrée une fonction f et les deux bornes a et b de l'intervalle et qui affiche (avec return) une approximation de l'aire sous la courbe représentative de f sur l'intervalle [a,b] calculée par la méthode de Monte Carlo en utilisant 1 000 000 points aléatoires. Pour valider le test, il faut trouver une valeur à 0.05 près de la valeur exacte.
<h2>Code</h2>
<pre>
$N = 15000; // nbre de repetitions
$n = 0; // nbre sible atteinte
if ($N != 0) {
    //cette fonction génère un nbre aleatoire < 1
    function rnd()
    {
        return rand(-1000, 1000) / 1000;
    }

    for ($i = 1; $i <= $N; $i++) {
        $x = rnd(); // coord x
        $y = rnd(); //coord y
        $r = pow($x, 2) + pow($y, 2);
        if ($r <= 1) {
            $n++;
        }
    }
    $pi = 4 * $n / $N; // valeur approximative de PI
    $pourcent = round(abs((($pi - pi()) / pi()) * 100), 1);
    echo "Avec $N fléchettes, on obtient PI~ <font color=red> $pi </font><br /> Ecart avec pi : $pourcent %";
</pre>
<h2>Solution</h2>
<?php
$N = 15000; // nbre de repetitions
$n = 0; // nbre sible atteinte
if ($N != 0) {
    //cette fonction génère un nbre aleatoire < 1
    function rnd()
    {
        return rand(-1000, 1000) / 1000;
    }

    for ($i = 1; $i <= $N; $i++) {
        $x = rnd(); // coord x
        $y = rnd(); //coord y
        $r = pow($x, 2) + pow($y, 2);
        if ($r <= 1) {
            $n++;
        }
    }
    $pi = 4 * $n / $N; // valeur approximative de PI
    $pourcent = round(abs((($pi - pi()) / pi()) * 100), 1);
    echo "Avec $N fléchettes, on obtient PI~ <font color=red> $pi </font><br /> Ecart avec pi : $pourcent %";
}

?>
<?php include 'parts/footerPart.php'; ?>

