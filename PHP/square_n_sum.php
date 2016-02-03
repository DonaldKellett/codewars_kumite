<?php
/*
  square_n_sum.php
  My first Kumite on Codewars :D
  Open Source
  @author DonaldKellett
*/

function square_n_sum($array_of_numbers) {
  for ($i = 0; $i < sizeof($array_of_numbers); $i++) {
    $array_of_numbers[$i] = $array_of_numbers[$i] ** 2;
  }
  $sum_of_squared_numbers = 0;
  for ($i = 0; $i < sizeof($array_of_numbers); $i++) {
    $sum_of_squared_numbers += $array_of_numbers[$i];
  }
  return $sum_of_squared_numbers;
}
echo square_n_sum(array(1,2,3,5,6)); // Should return 75
echo "<br />";
echo square_n_sum(array(1,2)); // Should return 5
echo "<br />";
echo square_n_sum(array(3,4)); // Should return 25
echo "<br />";
echo square_n_sum(array(1,2,3,4)); // Should return 30
echo "<br />";
echo square_n_sum(array(1,2,3,4,5,6,7,8,9,99)); // Should return 10086

?>
