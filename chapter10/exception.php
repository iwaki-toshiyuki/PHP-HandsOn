<?php
try {
    $result = 1 / 0;
} catch (DivisionByZeroError $e) {
    echo "DivisionByZeroError: " . $e->getMessage() . PHP_EOL;
}