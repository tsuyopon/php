<?php
/*
 * GETリクエスト: デバッグ情報を画面に出力するサンプルです
 * 画面に出力される情報はcurl_get1.txtに記載されています。
 *
 * リクエスト先にはhttpbinを利用しています。
 */
$url = "https://httpbin.org/get?msg=test&token=xxx";
$request = "test1=a&test2=b&test3=c+d+e";

$req_header = [
  'ZZZ-AAAAA: aaa',
  'ZZZ-BBBBB: bbb',
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $req_header );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );   // curl_execでレスポンスを文字列で受け取る
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);    // このオプションを入れるとcurl_getinfoの結果で$info["request_header"]が取得できる様になる。
curl_setopt($ch, CURLOPT_VERBOSE, 1);

$result = curl_exec( $ch );
$info= curl_getinfo($ch);   // curl_getinfo($ch, CURLINFO_HTTP_CODE);のように個別に取得も可能

// レスポンスヘッダとレスポンスボディの取得: cf. https://stackoverflow.com/questions/9183178/can-php-curl-retrieve-response-headers-and-body-in-a-single-request
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE); // ヘッダサイズ取得 $info["header_size"]と同じ

/* エラー番号を取得 */
$errno = curl_errno($ch);

/* エラーを取得 */
$errmsg = curl_error($ch);

curl_close($ch);

// レスポンスヘッダを取得する場合には「CURLOPT_HEADER」の指定も必須です。これを指定しないと正しくヘッダが取得できません。
$header = substr($result, 0, $header_size);
$body = substr($result, $header_size);


/*
 * デバッグ情報の出力
 */
echo "リクエストURL: ".$info["url"]." <br>\n";
echo "リクエストヘッダ: ".$info["request_header"]." <br>\n";
echo "ステータスコード: ".$info["http_code"]." <br>\n";
echo "errno(エラー以外は0): ".$errno."<br>\n";
echo "error(エラー以外は未表示): ".$errmsg."<br>\n";
echo "レスポンスヘッダ: $header <br>\n";
echo "レスポンスボディ: $body <br>\n";

echo "curl_getinfoを一括出力";
print_r($info);

