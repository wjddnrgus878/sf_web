<?php
    session_start();
    $_SESSION["username"] = "admin";
    echo ("<script>document.location.href='index.html'</script>");

?>
