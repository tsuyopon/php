<?php
/*
 * GETリクエストのサンプルです。ログはerror.logに出力します
 * ログに出力されるサンプルは curl_post1.txt を参照してください。
 * 
 * リクエスト先にはhttpbinを利用しています。
 */

// 出力ログの設定
ini_set("log_errors","on");
ini_set('error_log', './error.log');
ini_set("date.timezone", "Asia/Tokyo");

// リクエスト
$url = "https://httpbin.org/post?a1=A1&b1=B1";          // POST用のエンドポイントを指定する
$post = [
	'test1'=> "a",
	'test2'=> "b",
	'test3'=> "c",
];
$req_header = [
  'ZZZ-AAAAA: aaa',
  'ZZZ-BBBBB: bbb',
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $req_header );
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );        // これを指定するとcurl_execでレスポンスを文字列で受け取ることができます。
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);         // リクエストヘッダを含める(curl_getinfoで取得すると、request_headerで取得できるようになる)
curl_setopt($ch, CURLOPT_VERBOSE, 1);                // 詳細のデバッグ情報を表示します
curl_setopt($ch, CURLOPT_CERTINFO, TRUE);            // オリジンの証明書情報も表示します

$result = curl_exec( $ch );

$errno = curl_errno($ch);  // エラー番号を取得(何もエラーがなければ0)
$errmsg = curl_error($ch); // エラーメッセージを取得(何もエラーがなければ空)
$info= curl_getinfo($ch);  // curl_getinfo($ch, CURLINFO_HTTP_CODE);のように個別に取得も可能

$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($result, 0, $header_size);
$body = substr($result, $header_size);

curl_close($ch);

// 画面出力
echo "Output to ./error.log";

// ログ出力
error_log("RequestUrl: ".$info["url"]);
error_log("RequestHeaders: ".$info["request_header"]);
error_log("RequestBody: ".http_build_query($post));         // そのまま指定する
error_log("StatusCode: ".$info["http_code"]);
error_log("Errno:".$errno.", Errmsg if exsits:".$errmsg);
error_log("Response(Header+Body):".$result);
error_log("Response(Header):".$header);
error_log("Response(Body):".$body);
error_log("CurlInfo:".var_export($info,true));

?>
