function foo(array $arr) {
  // Iterate over the array in reverse to avoid key shifting
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'bar') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//Another solution:  Create a copy of keys before iterating
// function foo(array $arr) {
//   $keys = array_keys($arr);
//   foreach ($keys as $key) {
//     if ($arr[$key] === 'bar') {
//       unset($arr[$key]);
//     }
//   }
//   return $arr;
// }
// 
// $arr = ['foo', 'bar', 'baz'];
// $result = foo($arr);
// print_r($result); // Output: Array ( [0] => foo [2] => baz )