<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

<?php

/**
 * 여러개의 파일을 올릴때에는 input name을 배열형태로 지정해 주어야한다.
 *
 * Reference : https://www.php.net/manual/en/features.file-upload.multiple.php
 */

$file_dir = __DIR__."/img";

// file_exists()로 파일 혹은 디렉토리가 존재하는지 확인할 수 있다
// is_dir() 함수를 통해서도 디렉토리가 존재하는지 확인할 수 있다.
if(!is_dir($file_dir)){
    // mkdir() 함수로 디렉토리를 생성한다.
    // directory, permissions, recursive, context
    mkdir($file_dir,$recursive=true);
}

/**
 * PHP 4.1.0 부터는 $_FILES가 존재한다
 *
 * $_FILES는 전역변수이다.
 *
 * $_FILES배열은 파일들에 대한 모든 정보를 가지고 있다.
 *
 * $_FILES 배열이 가질 수 있는 필드는 아래와 같다
 *
 * $_FILES["(input tag's name attr)"]['name'] : 클라이언트 머신에 존재하는 파일 원래 이름
 * $_FILES["(input tag's name attr)"]['type'] : 브라우저가 이 정보를 제공할 경우의 파일 mime type (example : image/gif)
 * $_FILES["(input tag's name attr)"]['size'] : 업로드된 파일 사이즈
 * $_FILES["(input tag's name attr)"]['tmp_name'] : 서버에 저장된 업로드된 파일의 임시 파일 이름
 * $_FILES["(input tag's name attr)"]['error'] : 파일 업로드와 관련된 에러
 *
 * var_dump($_FILES) 를 하면 아래와 같이 나온다
 *
 * array(1) { ["upload"]=> array(6)
 * {
 * ["name"]=> array(2) { [0]=> string(5) "a.txt" [1]=> string(19) "무제.drawio" }
 * ["full_path"]=> array(2) { [0]=> string(5) "a.txt" [1]=> string(19) "무제.drawio" }
 * ["type"]=> array(2) { [0]=> string(10) "text/plain" [1]=> string(24) "application/octet-stream" }
 * ["tmp_name"]=> array(2) { [0]=> string(66) "/private/var/folders/bv/hfxy36vd6_5f_4959zpp0lp40000gn/T/phpBabNqQ" [1]=> string(66) "/private/var/folders/bv/hfxy36vd6_5f_4959zpp0lp40000gn/T/phpnuSIse" }
 * ["error"]=> array(2) { [0]=> int(0) [1]=> int(0) }
 * ["size"]=> array(2) { [0]=> int(0) [1]=> int(2374) } } }
 *
 */

$file_info = $_FILES['upload'];
foreach ($file_info['name'] as $index => $value ){
    $file_path = $file_dir."/".$value;
    // move_uploaded_file : 업로드된 파일을 설정한 파일 경로에 저장한다는 의미이다. "tmp_name" 에 저장된 것들은, 파일이 임시로 저장된 파일명이다.
    // 임시경로에 저장된 파일을, 실제 저장할 경로를 지정함으로서 옮긴다.
    // move_uploaded_file(파일명, 경로)
    if(move_uploaded_file($file_info['tmp_name'][$index],$file_path)){
        // <img> 태그의 src에 쓰일 img path
        $img_path = "img/".$value;


?>
        <ul>
            <li><img src="<?= $img_path?>"></li>
            <li><?= $_POST['comment'] ?></li>
        </ul>
<?php
    }
    else{
        echo "Error occured while uploading file";
    }
}

?>

</body>

</html>