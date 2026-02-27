<?php
// 複数の連想配列を1つにまとめる
$associative_array1 = [ "name" => "Alice", "age" => 30 ];
$associative_array2 = [ "city" => "Wonderland" ];
$associative_array3 = [ "name" => "Bob", "age" => 20 ];

$merged_associative_array = array_merge($associative_array1, $associative_array2);
print_r($merged_associative_array);

$merged_associative_array_with_conflict = array_merge($associative_array1, $associative_array3);
print_r($merged_associative_array_with_conflict);