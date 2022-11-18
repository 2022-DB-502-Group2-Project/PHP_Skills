<?php
    // Start session
    session_start();

    //session_id() : get current session id

    // get value of session
    if(isset($_SESSION["userid"]) and isset($_SESSION["username"]) and session_id()){
        $userid = $_SESSION["userid"];
        $username = $_SESSION["username"];
        $sessionid = session_id();
    }else{
        echo "<script>
alert(\"Session not initialized\");
</script>";
    }
    ?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Use enrolled session</h3>
    <ul>
        <li>Session id : <?= $sessionid ?></li>
        <li>Username : <?= $username ?></li>
        <li>User ID : <?= $userid ?></li>
    </ul>
</body>
</html>
