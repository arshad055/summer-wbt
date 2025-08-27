<?php
$rows = 5;
for ($i = $rows; $i >= 1; $i--) 
    {
    for ($j = 1; $j <= $i; $j++)
         {
        echo "*";
         }
    echo "<br>";
    }
echo"<br> <br>"
?>

<?php
$rows = 4;
for ($i = 1; $i <= $rows; $i++)
     {
    for ($j = 1; $j <= $i; $j++)
         {
        echo $j . " ";
         }
    echo "<br>";

     }
echo"<br> <br>"
?>

<?php
$rows = 4;
$letter = 'A';
for ($i = 1; $i <= $rows; $i++) 
    {
    for ($j = 1; $j <= $i; $j++) 
        {
        echo $letter . " ";
        }
    echo "<br>";
    $letter++;
    }
?>
