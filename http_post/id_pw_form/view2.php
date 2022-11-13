<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
// PHP post 방식


/**
 *
 * 동일하게 post 요청에 대해서 들어오면 글로벌 배열인 $_POST에서 name값이 키가되는 value들을 들고온다
 *
 * ID -> id
 * Password -> pass
 */

$id = $_POST["id"];
$pass = $_POST["pass"];

?>


<h1>Information</h1>
<ul>
    <li>ID : <?= $id ?></li>
    <li>PW : <?= $pass ?></li>
</ul>
</body>
</html>