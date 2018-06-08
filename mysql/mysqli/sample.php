<?php
// prepared statementに関するサンプル

$mysqli = new mysqli("127.0.0.1", "root", "", "sakila");

/* 接続状況をチェックします */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* プリペアドステートメントを作成します */
if ($stmt = $mysqli->prepare("SELECT city_id, city FROM city WHERE country_id=? AND city LIKE ?")) {

    /* マーカにパラメータをバインドします */
    $country_id = 75;
    $city_like = "Ta%";
    // 第1引数に指定しているのは　i: integer, s: string, d: double, b: blob
    $stmt->bind_param("is", $country_id, $city_like);

    /* クエリを実行します */
    $stmt->execute();

    $stmt->bind_result($city_id, $city);

    /* 値を取得します */
    while ($stmt->fetch()) {
        printf("city_id=%d, city_name=%s\n", $city_id, $city);
    }

    $stmt->close();
}

$mysqli->close();
?>
