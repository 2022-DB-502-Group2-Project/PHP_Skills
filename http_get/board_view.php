<?php

$table = $_GET['table'];
$type = $_GET['type'];

if($table == "free"){
    $boardtitle = "자유게시판";
}else{
    $boardtitle = "QnA 게시판";
}

if ($type == "list"){
    $typetitle = "목록보기";
}else{
    $typetitle = "글 작성";
}

echo $boardtitle." | ".$typetitle;

?>