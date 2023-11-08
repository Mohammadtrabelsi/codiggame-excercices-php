<?php include 'parts/headart.php'; ?>

<h1>filterDuplicates</h1>
<h2>Excercice</h2>
Filter out duplicate values in array using php
<h2>Code</h2>
<pre>
function doubonsV2($data)
{
    $uniqueData = [];
    foreach ($data as $d) {
        if (!in_array($d, $uniqueData)) {
            $uniqueData[] = $d;
        }
    }
    return $uniqueData;
}

function doubons($data)
{

    for ($i = 0; $i < count($data) - 1; $i++) {
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$i] == $data[$j])
                $data[$j] = "";
        }
    }

// On crée le tableau tab le tableau sans doublon
    $j = 0;
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i] != "") {
            $tab[$j++] = $data[$i];
        }
    }
    return $tab;
}

$tab = array(1, 2, 3, 4, 2, 1);
echo '<br> Tab :' . json_encode($tab);
echo '<br> Doubons :' . json_encode(doubons($tab));
echo '<br> Doubons V2 :' . json_encode(doubonsV2($tab));
</pre>
<h2>Solution</h2>

<?php
function doubonsV2($data)
{
    $uniqueData = [];
    foreach ($data as $d) {
        if (!in_array($d, $uniqueData)) {
            $uniqueData[] = $d;
        }
    }
    return $uniqueData;
}

function doubons($data)
{

    for ($i = 0; $i < count($data) - 1; $i++) {
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$i] == $data[$j])
                $data[$j] = "";
        }
    }

// On crée le tableau tab le tableau sans doublon
    $j = 0;
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i] != "") {
            $tab[$j++] = $data[$i];
        }
    }
    return $tab;
}

$tab = array(1, 2, 3, 4, 2, 1);
echo '<br> Tab :' . json_encode($tab);
echo '<br> Doubons :' . json_encode(doubons($tab));
echo '<br> DoubonsV2 :' . json_encode(doubonsV2($tab));
?>

<?php include 'parts/footerPart.php'; ?>
