<?php
// cURLセッションを初期化
$curl_handle = curl_init();

// リクエスト先のURLを設定
curl_setopt($curl_handle, CURLOPT_URL, "http://www.example.com");

// レスポンスを直接出力せず、変数に格納する
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// レスポンスを取得
$response = curl_exec($curl_handle);

// ステータスコードを取得
$httpCode = curl_getinfo($curl_handle, CURLINFO_HTTP_CODE);

// cURLセッションを終了
curl_close($curl_handle);

// ステータスコードを表示
echo $httpCode . PHP_EOL;

// レスポンスボディを表示
echo $response . PHP_EOL;
