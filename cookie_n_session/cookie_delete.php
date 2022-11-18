<?php

/**
 *
 * setcookie() 함수를 이용하여 userid, username 쿠키에 null 값인 ""를 설정한다
 *
 * 이렇게 하면 쿠키를 삭제할 수 있다.
 */
setcookie("userid","");
setcookie("username","");

?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
{
    echo "cookie 'userid' and 'username' deleted";
}
?>
</body>
</html>
