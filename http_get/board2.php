<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$boardtype1 = "free";
$boardtype2 = "qna";

?>

<h3>Free Board</h3>
<a href="board_view.php?table=<?= $boardtype1 ?>&type=list">View Contents</a>
<br>
<a href="board_view.php?table=<?= $boardtype1 ?>&type=write">Write content</a>

<h3>QnA Board</h3>
<a href="board_view.php?table=<?= $boardtype2 ?>&type=list">View Contents</a>
<br>
<a href="board_view.php?table=<?= $boardtype2 ?>&type=write">Write content</a>
</body>
</html>