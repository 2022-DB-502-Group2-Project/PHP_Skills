<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
// PHP post 방오

$name = $_POST["name1"];

/**
 * <?= ?> 형태로 php 변수를 html에 전달할 수 있다
 *
 * <?php ?> 형태로 해도 괜찮다
 *
 * POST방식에서 사용되는 전역변수는 글로벌 배열인 $_POST이다.
 * $_POST 전역변수에 html input 태그에서 지정한 name 키값으로 요소의 값을 가져온다.
 */
?>
<h1>Hello <?= $name?></h1>
</body>
</html>