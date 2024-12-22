function foo(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    if ($value !== null) {
      $newArray[] = $value;
    }
  }
  return $newArray;
}

$arr = [1, 2, null, 4, null];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 4 )

//Alternative solution using array_filter
$arr = [1, 2, null, 4, null];
$result = array_filter($arr);
$result = array_values($result); //Reindex the array
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 4 )