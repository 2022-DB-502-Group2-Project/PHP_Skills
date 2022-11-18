<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
/**
 * session_start() 함수를 이용해 새로운 세션을 시작하거나 기존 세션을 다시 시작할 수 있다
 *
 * session_start() 함수는 세션 아이디가 존재하는지 확인하고, 존재하지 않으 새로운 아이디를 만든다
 * 만약 존재하는 세션이라면, 원래 있던 세션 변수를 불러와서 사용할 수 있도록 한다.
 *
 *
 * 세션 아이디는 서버에 의해 무작위로 생성이된 숫자이다.
 * 세션 아이디는 세션이 유지되는 동안 클라이언트에 저장되며, 세션 변수를 등록하는 키로 사용된다.
 *
 * 세션 지속은 쿠키와 달리 php.ini 파일에서 설정해 주어야 한다.
 *
 * session id는 개발자 도구의 쿠키에 보면 PHPSESSID라는 키로 존재한다.
 *
 */
session_start();

echo "Start session!<br>";

$_SESSION['userid'] = "hoplin";
$_SESSION['username'] = "윤준호";

echo "Session enroll complete!<br>";

echo "Session_userid : ".$_SESSION['userid']."<br>";
echo "Session_username : ".$_SESSION['username']."<br>";
?>
</body>
</html>