<?php
    require('films1.php');
    $sql_text = " SELECT * FROM films1 WHERE kerword LIKE 'a'";
    $query = mysqli_query($conn,$sql_text);
    while($objresult = mysqli_fetch_assoc($query))
    {
        echo $objresult['answer']."<br>";
    }




?>    