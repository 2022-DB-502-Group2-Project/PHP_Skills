<?php
/**
 * 쿠키 : 사용자가 웹 페이지에 접속할 때 웹 서버가 사용자의 컴퓨터에 저장하는 작은 양의 데이터이다.
 *
 * 쿠키를 통해 세션관리 개인화 트래킹(사용자의 이용패턴 분석)에 사용할 수 있다.
 *
 * 쿠키는 사용자의 컴퓨터에 저장한 뒤 쿠키가 필요할때 컴퓨터에 요청하고, 컴퓨터는 저장된 쿠키를 웹 서버에 전송한다.
 *
 * 쿠키는 Key-Value 형태의 String이며, 4KB 이상 저장이 불가능하다
 *
 *
 * 간단하게 쿠키 생성하는 법을 알아보자
 */

// setcookie()를 이용해서 userid : hoplin 이라는 key-value cookie를 만들었다
// 만약 쿠키 만드는데 성공하면 true를 반환하고 아니면 False를 반환한다
$a = setcookie("userid","hoplin");
// setcookie()의 세번째 인자는 쿠키 만료 시간을 지정해 준다.
// Unix timestamp값을 넣어주면 되며, time() + 60을 하면 생성시간 기준 60초 후를 의미한다.
$b = setcookie("username","윤준호",time() + 60);

/**
 *
 * setcookie() : HTTP 헤더에 보낼 쿠키를 정의한다
 *
 * < Parameters >
 *
 * name : 쿠키 이름, 대소문자 구분한다
 * value : 쿠키 값, 사용자의 컴퓨터에 저장된다
 * expire : 쿠키 유효 시간이며, 초 단위로 표시된다.(Unix Time), ex) : time() + 60 * 60(1시간) * 24(1일) * 30(30일) -> 30일 후 expire
 * path : 쿠키를 이용할 수 있는 경로를의미한다.
 *
 * - 기본 : 현재 디렉토리
 * - / : 전체도메인
 * - /home : home디렉토리와 하위 디렉토리
 *
 * 크롬 브라우저에서 개발자도구 -> Application -> Cookie에서 쿠키 내용을 볼 수 있다.
 */

// userid, username 쿠키가 모두 정상적으로 생성되었음을 의미한다
if($a and $b){
    echo "Cookie 'userid' and 'username' generated<br>";
    echo "Cookie 'username' will be expired in 1min";
}
?>
