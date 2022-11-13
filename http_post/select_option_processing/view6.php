<html>
<head>
    <meta charset="UTF-8">
</head>
<?php
// 공백 제거 : trim() 사용
$email1 = trim($_POST["email"]);
$email2 = trim($_POST["email2"]);

if($email2 == "select value"){
    echo "<script>
alert('You should check email address!');
window.location.href = 'select.html';
</script>";
}
?>
<body>
    <ul>
        <li>Email : <?= $email1."@".$email2 ?></li>
    </ul>
</body>
</html>