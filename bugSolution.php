function foo(array $arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      $keysToRemove[] = $key;
    }
  }
  foreach($keysToRemove as $keyToRemove){
    unset($arr[$keyToRemove]);
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$nested_arr = ['foo', ['bar', 'baz'], 'qux'];
$result = foo($nested_arr); //No errors
print_r($result); //Output: Array ( [0] => foo [2] => qux )