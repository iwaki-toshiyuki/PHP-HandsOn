<?php
try {
    $result = "String" + 1;
} catch (TypeError $e) {
    echo "エラーが発生しました: " . $e->getMessage() . PHP_EOL;
}