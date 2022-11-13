<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$gender = $_POST["gender"];
$email = $_POST["email"] == "예" ? "수신" : "비수신";

/**
 *
 * php + JavaScript
 *
 * -> 만약 이메일이 비수신인 경우에 대해서 alert창을 내고, radio.html로 redirect한다.
 */

if($email == "비수신"){
    echo "<script>
alert('Email not sended');
window.location.href = 'radio.html';
</script>";
}

?>

<ul>
    <li>성별 : <?= $gender?></li>
    <li>이메일 수신여부 : <?= $email?></li>
</ul>

</body>
</html>