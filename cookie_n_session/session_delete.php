<?php
/**
 * 세션 삭제하기
 *
 *
 * unset() 함수를 이용해서 session의 특정 session 변수를 초기화시켜줄 수 있다.
 *
 * session_unset()을 사용하면 세션내 변수(데이터)들만 삭제된다. session_id는 유효한 상태이다.
 *
 * session_destroy()를 사용하면 세션 전체를 삭제하게 된다.
 *
 */

session_start();

unset($_SESSION["username"]);

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<ul>
    <li><?= "userid session : ".$_SESSION["userid"]."<br>" ?></li>
    <li><?= "username session :".$_SESSION["username"]."<br>"?></li>
    <li><?= "username session deleted!"?></li>
</ul>
</body>
</html>
