<?php
// JSONの例
$jsonString = '{"name": "John", "age": 30, "is_student": false, "courses": ["Math", "Science", "History"]}';

// JSON文字列をPHPの配列に変換
$data = json_decode($jsonString, true);

// データの表示
echo $data["name"] . PHP_EOL;
echo $data["age"] . PHP_EOL;
echo var_export($data["is_student"]) . PHP_EOL;

// 配列の要素をループで表示
foreach ($data["courses"] as $course) {
    echo $course . PHP_EOL;
}