<?php
header('Content-Type: text/html; charset=UTF-8');
    require_once(__DIR__.'/dbconn.php');
    $sql = "SELECT * FROM board where 1=1 and board_type = 'contest' order by idx desc";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result); 
    echo "한글";
    echo $row['subject'].'<br/>';
    echo $row['contents'].'<br/>';
    echo $row['link_value'].'<br/>';
    echo $row['category'].'<br/>';
    echo $row['category2'].'<br/>';
    echo $row['writer'].'<br/>';
    echo $row['country'].'<br/>';
    echo $row['tel'].'<br/>';
    echo $row['email'].'<br/>';
    echo $row['category3'].'<br/>';
    echo $row['reg_date'].'<br/>';
?>