<?php
        include "../db_SESSION.php";
        
        $uid = $_GET["userid"];
        $stmt = $connect->prepare("Select * from member where id = (?)");
        $stmt->bind_param("s", $uid);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
?>
