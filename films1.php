<?php
    $host = 'us-cdbr-gcp-east-01.cleardb.net';
    $user = 'beb54524da0b18';
    $pass = '56f79846';
    $db = 'gcp_ede578708e7f0a61dc4a';
    $conn = new mysqli($host,$user,$pass,$db);
    mysqli_query($conn, "SET NAME utf8");
?>
