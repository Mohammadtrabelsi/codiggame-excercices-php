<?php include 'parts/headart.php'; ?>
<h1>Calculate Total Price</h1>
<h2>Code</h2>
<pre>
    function calculateTotalPrice(array $prices, $discount)
    {
    $sum = 0;
    sort($prices);
    $rem = $discount / 100;
    for ($i = 0; $i < count($prices); $i++) {
    $sum = $sum + $prices[$i];
    }

    $total = $sum - $rem * $prices[count($prices) - 1];

    return floor($total);
    }
</pre>
<h2>Solution</h2>

<?php
function calculateTotalPrice(array $prices, $discount)
{
    $sum = 0;
    sort($prices);
    $rem = $discount / 100;
    for ($i = 0; $i < count($prices); $i++) {
        $sum = $sum + $prices[$i];
    }

    $total = $sum - $rem * $prices[count($prices) - 1];

    return floor($total);
}

$discount = 10;
echo '<br> Discount :' . $discount;
$prices = array(7, 13.5, 3, 8, 2, 1);
echo '<br> Prices :' . json_encode($prices);
echo '<br> CalculateTotalPrice :' . calculateTotalPrice($prices, $discount);
?>
<?php include 'parts/footerPart.php'; ?>





