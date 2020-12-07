<?php
    include 'db_connection.php';
    $conn = OpenCon();
    // echo "Connected Successfully <br>";
    // CloseCon($conn);

    $sql = "Insert into test (name,message) values ('$_POST[name]','$_POST[message]')";
    $result = $conn->query($sql);

    if (!$result){
        die('Error: ' . $conn->error);
    }

    echo "1 record added";
    $conn->close();
?>
<html>
<button onclick="location.href = 'http://localhost:8000';">Back</button>
</html>