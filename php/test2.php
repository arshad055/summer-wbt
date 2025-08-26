<?php
$amount = 1000;
$vat = $amount * 0.15;
$totalAmount = $amount + $vat;

echo "Original Amount: $" . $amount;
echo"<br>";
echo "VAT (15%): $" . $vat;
echo"<br>";
echo "Total Amount including VAT: $" . $totalAmount;
echo"<br>";
?>
