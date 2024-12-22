function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === null) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 2, null, 4, null];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [3] => 4 )

// The bug is that the keys are not reindexed after unset.  This could cause problems if you're relying on the numerical keys to be sequential.