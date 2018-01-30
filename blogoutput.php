<?php

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=blog", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM artikelen order by id desc";
    $result = $conn->query($sql);
    foreach ($result as $row) {
    echo "<p>";
    echo $row['titel'];
    echo "</p>";
    echo $row['body'] . ",";
    }
}

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
