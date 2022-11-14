<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

if(strtolower($_SERVER['REQUEST_METHOD']) == "post"){

    // 필수 입력 검증
    /**
     * empty() 함수와 isset() 함수를 이용해서 필수 입력 필드를 검증할 수 있다
     *
     * empty()는 비어있는 변수인지에 대해서 확인하며 아래 구문과 동일한 역할을 한다.
     *
     * !isset(var) || var == false
     *
     */

    $name = !empty($_POST["name"]) ? $_POST["name"] : "name not typed";
    $gender = !empty($_POST["gender"]) ? $_POST["gender"] : "gender not typed";
    // filter var 적용해보기
    $email = !filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) ? $_POST["email"] : "email not entered";
    $interest = !empty($_POST["interest"]) ? join(", ",$_POST["interest"]) : "No other interest selected";

    /**
     *
     * 검증 : Regular Expression
     *
     * preg_match()를 이용하 정규표현식을 이용하여 검증할 수 있다.
     * 만약 패턴이 존재하면 True를 존재하지 않으면 False를 반환한다
     *
     * preg_filter 같은 경우 문자열에 들어있는 배열에서
     */

    if(empty($_POST["regex"])){
        $regex = "Empty Variable : Regex";
    }else{
        $regex = $_POST["regex"];
        // preg_match()를 이용해서 정규표현식으로 matching 할 수 있다
        if(!preg_match("/^[a-zA-Z가-힣 ]*$/",$regex)){
            $regex = "Pattern does not match";
        }
    }

    /**
     * 이메일과 URL 주소 입력형식 검증하기
     *
     * filter_var()함수를 사용하면 검증을 할 수 있다.
     * filter_var()는 검증 필터에 맞는 유효한 값인지를 확인하는 함수이다. boolean 타입을 반환한다
     * Python의 assert 를 사용한 type validation과 비슷한 방식이다.
     *
     *  FILTER_VALIDATE_BOOLEAN	해당 변수가 "1", "true", "on", "yes"인 경우에만 true를 반환하고, 나머지는 전부 false를 반환함.
     *  FILTER_VALIDATE_EMAIL	해당 변수가 유효한 이메일 주소인지를 검증함.
     *  FILTER_VALIDATE_FLOAT	해당 변수가 float 타입인지를 검증함.
     *  FILTER_VALIDATE_INT	해당 변수가 int 타입인지를 검증함.
     *  FILTER_VALIDATE_IP	해당 변수가 유효한 IP 주소인지를 검증함.
     *  FILTER_VALIDATE_MAC	해당 변수가 유효한 MAC 주소인지를 검증함.
     *  FILTER_VALIDATE_REGEXP	해당 변수를 펄 호환 정규 표현식(Perl-Compatible Regular Expression, PCRE)으로 검증함.
     *  FILTER_VALIDATE_URL	해당 변수가 유효한 URL 주소인지를 검증함.
     */

    // 예를 들어 homepage에 대해서 URL 타입 validation을 해보겠습니다.

    $homepage = filter_var($_POST['homepage'],FILTER_VALIDATE_URL) ? $_POST['homepage'] : "Invalid homepage url type";

    echo "Name : ".$name."<br>";
    echo "Gender : ".$gender."<br>";
    echo "E-Mail : ".$email."<br>";
    echo "Interests : ".$interest."<br>";
    echo "Regex Test : ".$regex."<br>";
    echo "Homepage : ".$homepage."<br>";
}

?>

<!-- $_SERVER는 php에서 제공하는 슈퍼글로벌이다. PHP_SELF를 하게되면 현재 실행중인 PHP 스크립트를 가리키게된다 -->
<!-- htmlspecialchars()는 인수로 전달받은 문자열을 HTML 엔티티로 변환해준다

이는 XSS 공격을 방지할 수 있다.

string htmlspecialchars ( string $string [, int $quote_style [, string $charset [, bool $double_encode ]]] )

string $string : HTML엔티티로 변환할 문자
int $quote_style : '',""의 처리방식을 지정, 상수 지정방식으로 사용하며, 사용가능 상수는 아래와 같다

ENT_COMPAT : 기본모드로, 겹따옴표만 변환
ENT_QUOTES : ''(홑따옴표) 와 ""(겹따옴표) 둘다 변환
ENT_NOQUOTES : ''(홑따옴표) 와 ""(곁따옴표) 둘다 변환하지 않음

string $charset : 변환에 사용되는 문자셋을 지정할 수 있다. 기본은 ISO-8859-1
bool $double_encode : 이미 존재하는 HTML 엔티티를 encode할지 안할지에 대해 지정한다.



-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
    <ul>
        <li>
            이름 : <input type="text" name="name">
        </li>
        <li>
            성별 :
            <input type="radio" name="gender" value="female">여자
            <input type="radio" name="gender" value="male">남자
        </li>
        <li>
            E-mail : <input type="email" name="email">
        </li>
        <li>
            Interested In :
            <input type="checkbox" name="interest[]" value="movie"> 영화보기
            <input type="checkbox" name="interest[]" value="music"> 음악듣기
            <input type="checkbox" name="interest[]" value="game"> 게임하기
        </li>
        <li>
            Homepage : <input type="text" name="homepage">
        </li>
        <li>
            Regular Expression test : <input type="text" name="regex">
        </li>
        <li>
            <input type="submit" value="check">
        </li>
    </ul>

</form>
</body>
</html>