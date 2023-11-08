<?php include 'parts/headart.php'; ?>

<h1>
    Compute Join Point
</h1>
<h2>Exercice</h2>
We consider the sequence of numbers in which a number is followed by the same number plus the sum of these digits.
<br>
For example 34 is followed by 41 (41 = 34 + (3+4)).
<br>
41 is itself followed by 46 (46 = 41 + (4+1)).
<br>
Two sequences with different starting points can end up joining. For example, the sequence that starts at 471 and the sequence that starts at 480 share the number 519 (the join point). Obviously after the join point, the sequences are identical.
<br>
<img decoding="async" fetchpriority="high" width="770" height="305"
     src="https://i0.wp.com/zerotutorials.com/wp-content/uploads/2022/06/join-point.png?resize=770%2C305&amp;ssl=1"
     alt="" class="wp-image-556"
     srcset="https://i0.wp.com/zerotutorials.com/wp-content/uploads/2022/06/join-point.png?resize=1024%2C405&amp;ssl=1 1024w, https://i0.wp.com/zerotutorials.com/wp-content/uploads/2022/06/join-point.png?resize=300%2C119&amp;ssl=1 300w, https://i0.wp.com/zerotutorials.com/wp-content/uploads/2022/06/join-point.png?resize=768%2C304&amp;ssl=1 768w, https://i0.wp.com/zerotutorials.com/wp-content/uploads/2022/06/join-point.png?resize=1536%2C608&amp;ssl=1 1536w, https://i0.wp.com/zerotutorials.com/wp-content/uploads/2022/06/join-point.png?resize=770%2C305&amp;ssl=1 770w, https://i0.wp.com/zerotutorials.com/wp-content/uploads/2022/06/join-point.png?w=1894&amp;ssl=1 1894w"
     sizes="(max-width: 770px) 100vw, 770px">

<h2>Code</h2>
<pre>
    function simple($mNbr)
{
    $nbr = (string)$mNbr;
    $cumul = $mNbr;
    for ($i = 0; $i < strlen($nbr); $i++) $cumul += substr($nbr, $i, 1);

    return $cumul;

}

function simpleV2($mNbr)
{
    $nbr = (string)$mNbr;
    $cumul = $mNbr;

    $chars = str_split($mNbr);
    foreach ($chars as $char) {
        $cumul += $char;
    }
    return $cumul;
}

function computeJoinPoint($s1, $s2)
{
    if ($s1 <= 0 || $s2 <= 0 || $s1 >= 20000000 || $s2 >= 20000000) {
        return 0;
    }

    while ($s1 != $s2) {
        if ($s1 < $s2) {
            $s1 = simpleV2($s1);
        } else {
            $s2 = simpleV2($s2);
        }
    }

    return $s1;
}

$s1 = 471;
$s2 = 480;
echo '<br> S1 : '.$s1;
echo '<br> S2 : '.$s2;
echo '<br> Compute Join Point : '.computeJoinPoint($s1, $s2);
</pre>
<h2>Solution</h2>
<?php
function simple($mNbr)
{
    $nbr = (string)$mNbr;
    $cumul = $mNbr;
    for ($i = 0; $i < strlen($nbr); $i++) $cumul += substr($nbr, $i, 1);

    return $cumul;

}

function simpleV2($mNbr)
{
    $nbr = (string)$mNbr;
    $cumul = $mNbr;

    $chars = str_split($mNbr);
    foreach ($chars as $char) {
        $cumul += $char;
    }
    return $cumul;
}

function computeJoinPoint($s1, $s2)
{
    if ($s1 <= 0 || $s2 <= 0 || $s1 >= 20000000 || $s2 >= 20000000) {
        return 0;
    }

    while ($s1 != $s2) {
        if ($s1 < $s2) {
            $s1 = simpleV2($s1);
        } else {
            $s2 = simpleV2($s2);
        }
    }

    return $s1;
}

$s1 = 471;
$s2 = 480;
echo '<br> S1 : '.$s1;
echo '<br> S2 : '.$s2;
echo '<br> Compute Join Point : '.computeJoinPoint($s1, $s2);
?>
<?php include 'parts/footerPart.php'; ?>

