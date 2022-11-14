<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
/**
 * GET 방식으로 PHP를 사용해 본다.
 *
 * GET 방식을 사용할 때 $_GET 글로벌 변수를 사용한다.
 *
 */

$table = $_GET['table'];

echo "This is $table table";

/**
 *  php 파일을 접속할 때 뒤에 QueryString을 전달해 본다.
 *
 * ex) ~~/board1.php?table=example
 *
 * Query String -> URL?Key=Value&Key=Value 형태이다.
 *
 * https://ysoh.tistory.com/entry/Query-String
 */
?>
</body>
</html>