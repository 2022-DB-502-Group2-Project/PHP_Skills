<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$hobbylist = $_POST["data"]["hobby"];
$country = $_POST["country"];

// 연관 배열로 나오는것을 확인해본다.
echo var_dump($_POST);

$example = "example var";

if(!$hobbylist){
    echo "<script>
alert('you should select at least one hobby!');
window.location.href = 'checkbox.html';
</script>";
}

?>
<script>
    // JavaScript + PHP 형태
    console.log("<?= $example ?>");
    alert("<?= $example ?>");
</script>
<ul>
    <li>My hobby is : <?= join(",", $hobbylist) ?></li>
    <li>I'm from  : <?= $country ?></li>
</ul>
</body>
</html>