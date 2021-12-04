<?php
/**
 * 2 гамбургера по 4.95
 * 1 коктейль за 1.95
 * 1 кока-кола за 0.85
 * чаевые 16%
 * НДС 7,5%
 */

 $hamburgerName = 'Гамбургер';
 $hamburgerPrice = 4.95;
 $hamburgerCount = 2;

 $milkshakeName = 'коктейль';
 $milkshakePrice = 1.95;
 $milkshakeCount = 1;

 $colaName = 'кока-кола';
 $colaPrice = 0.85;
 $colaCount = 1;

 $ChaiPr = 16;
 $NSDPr = 7.5;

 $sum = (($hamburgerPrice * $hamburgerCount)+($milkshakePrice * $milkshakeCount)+($colaPrice * $colaCount));
 $chai = ($sum/100)*$ChaiPr;
 $NDS = (($sum+$chai)/100)*$NSDPr;
 $total = $sum + $chai + $NDS;
 
 //echo $hamburgerName.' по '.$hamburgerPrice.' x'.$hamburgerCount;
 //echo '<br>';
 //echo $milkshakeName.' по '.$milkshakePrice.' x'.$milkshakeCount;
 //echo '<br>';
 //echo $colaName.' по '.$colaPrice.' x'.$colaCount;
 //echo '<br>';
 //echo 'Сумма = '.$sum;
 //echo '<br>';
 //echo 'Чаевые = '.$chai;
 //echo '<br>';
 //echo 'Налог = '.$NDS;
 //echo '<br>';
 //echo 'Итог = '.$total;
?>
<table>
<?php
 echo "<tr>";
 echo "<td> Позиция <td> Цена <td> Кол-во <td><tr>";
 echo "<td> ".$hamburgerName."<td>".$hamburgerPrice."<td>".$hamburgerCount."<td>"."<tr>";
 echo "<td> ".$milkshakeName."<td>".$milkshakePrice."<td>".$milkshakeCount."<td>"."<tr>";
 echo "<td> ".$colaName."<td>".$colaPrice."<td>".$colaCount."<td>"."<tr>";
 echo "<td> Сумма <td>".$sum."<td>".' '."<td>"."<tr>";
 echo "<td> Чаевые <td>".$chai."<td>".$ChaiPr.'%'."<td>"."<tr>";
 echo "<td> Налог <td>".$NDS."<td>".$NSDPr.'%'."<td>"."<tr>";
 echo "<td> Итог <td>".$total."<td>".' '."<td>"."<tr>";
?>
</table>
