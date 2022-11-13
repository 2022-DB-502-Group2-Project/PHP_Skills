<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$textcontent = $_POST["textcontent"];

foreach ($_POST as $k=>$v){
    echo $k." : ".$v."\n";
}
?>

<ul>

    <li>글 내용 : <?= $textcontent ?></li>
</ul>
</body>
</html>
