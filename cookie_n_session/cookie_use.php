<?php

/**
 * 쿠키를 사용해보자
 *
 * 기본적으로 cookie_set.php에 setcookie() 이용시 path를 지정해 주지 않았다
 * 즉 현재 cookie_set.php와 동일한디렉토리의 페이지에서는 Cookie를 공유할 수 있다
 *
 *슈퍼 글로벌변수 $_COOKIE배열에서 userid, username이 key인 쿠키들을 추출해 본다
 * isset() 함수로 쿠키가 초기화 되어있는지 확인한다.
 *
 */

if(isset($_COOKIE['userid']) && isset($_COOKIE['username'])){
    $userid = $_COOKIE['userid'];
    $username = $_COOKIE['username'];

    echo "User ID Cookie : ".$userid."<br>";
    echo "User Name Cookie : ".$username;
}else{
    echo "Cookie not found";
}


?>