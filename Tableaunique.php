<?php include 'parts/headart.php'; ?>

<h1>Tableau unique : filterDuplicates</h1>
<h2>Excercice</h2>
<h2>Code</h2>
<pre>
function filterDuplicates(array $data)
{

    $filter = [];
    $i = 0;

    foreach ($data as $value) {
        $add = TRUE;

        foreach ($filter as $valeur) {
            if ($value == $valeur) {
                $add = FALSE;
            }

        }

        if ($add) {
            $filter[$i] = $value;
            $i++;
        }
    }

    return $filter;
}

$tab = array(7, 3, 6, 4, 3, 3, 4, 9);
echo 'TAB : ' . json_encode($tab);
echo '<br>Filter Duplicates : ' . json_encode(filterDuplicates($tab));
</pre>
<h2>Solution</h2>
<?php
function filterDuplicates(array $data)
{

    $filter = [];
    $i = 0;

    foreach ($data as $value) {
        $add = TRUE;

        foreach ($filter as $valeur) {
            if ($value == $valeur) {
                $add = FALSE;
            }

        }

        if ($add) {
            $filter[$i] = $value;
            $i++;
        }
    }

    return $filter;
}

$tab = array(7, 3, 6, 4, 3, 3, 4, 9);
echo 'TAB : ' . json_encode($tab);
echo '<br>FilterDuplicates : ' . json_encode(filterDuplicates($tab));
?>
<?php include 'parts/footerPart.php'; ?>


