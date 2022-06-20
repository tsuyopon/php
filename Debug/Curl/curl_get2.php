<?php
/*
 * GETリクエストのサンプルです。ログはerror.logに出力します
 * ログに出力されるサンプルは curl_get2.txtを参照してください。
 * 
 * リクエスト先にはhttpbinを利用しています。
 */

// 出力ログの設定
ini_set("log_errors","on");
ini_set('error_log', './error.log');
ini_set("date.timezone", "Asia/Tokyo");

$url = "https://httpbin.org/get?msg=test&token=xxx";
$request = "test1=a&test2=b&test3=c+d+e";
$req_header = [
  'ZZZ-AAAAA: aaa',
  'ZZZ-BBBBB: bbb',
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');      // CURLOPT_HTTPGETと同じ
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $req_header );
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
echo "Output to ./error.log at curl_get2.php";

// ログ出力
error_log("RequestUrl: ".$info["url"]);
error_log("RequestHeaders: ".$info["request_header"]);
error_log("StatusCode: ".$info["http_code"]);
error_log("Errno:".$errno.", Errmsg if exsits:".$errmsg);
error_log("Response(Header+Body):".$result);
error_log("Response(Header):".$header);
error_log("Response(Body):".$body);
error_log("CurlInfo:".var_export($info,true));

?>
