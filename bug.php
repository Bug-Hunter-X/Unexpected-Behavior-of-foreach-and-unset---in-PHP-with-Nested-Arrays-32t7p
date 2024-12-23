function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//This code seems correct, but if you have nested arrays and try to unset nested elements
//you will encounter this bug
$nested_arr = ['foo', ['bar', 'baz'], 'qux'];
$result = foo($nested_arr); //Warning:  Illegal offset type in isset or empty on line 3
print_r($result); //Output: Array ( [0] => foo [2] => qux )