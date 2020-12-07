<?php
    include 'db_connection.php';
    $conn = OpenCon();
    // echo "Connected Successfully <br>";
    // CloseCon($conn);

    $sql = "SELECT * FROM `test`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. "<br>Name: " . $row["name"]. "<br>Message: " . $row["message"]. "<br><br>";
        }
    } 
    else {
        echo "0 results";
    }
    $conn->close();
?>
<html>
<button onclick="location.href = 'http://localhost:8000';">Back</button>
</html>