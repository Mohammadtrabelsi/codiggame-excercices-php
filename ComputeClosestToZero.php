<?php include 'parts/headart.php'; ?>

<h1>Compute Closest To Zero</h1>
<h2>Exercice</h2>
Cette fonction prend un tableau de température $ts en paramètre et renvoie la températures la plus proche
de zéro.
<br>
Si le tableau est vide, la fonction soit renvoyer 0
<br>
Si deux températures sont aussi proches de zéro, la fonction devra renvoyer  la température
positive(ex : -5 et 5, renvoyez 5)
<br>
<h2>Code</h2>
<pre>
    function computeClosestToZero(array $ts) {
  // Write your code here
  // To debug (equivalent to var_dump): error_log(var_export($var, true));
  $response = 0;
  if(sizeof($ts) > 0)
   $response = $ts[0];

  foreach($ts as $val){
    if((abs($response)> abs($val)) || (abs($response) == abs($val) && ($response < $val)))
      $response =$val;

  }
  return $response;
}

$tab = [2, 10, -12, -1, 200];
echo 'Tab  :' .json_encode($tab).'<br>';
echo 'ComputeClosestToZero  :' . computeClosestToZero($tab);
</pre>
<h2>Solution</h2>
<?php
function computeClosestToZero(array $ts)
{
    $response = 0;
    if (sizeof($ts) > 0)
        $response = $ts[0];

    foreach ($ts as $val) {
        if ((abs($response) > abs($val)) || (abs($response) == abs($val) && ($response < $val)))
            $response = $val;

    }
    return $response;
}

$tab = [2, 10, -12, -1, 200];
echo 'Tab  :' .json_encode($tab).'<br>';
echo 'ComputeClosestToZero  :' . computeClosestToZero($tab);
?>
<?php include 'parts/footerPart.php'; ?>

