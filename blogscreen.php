
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <script src="script2.js"></script>
 <link rel="stylesheet" type="text/css" href="blogstyle.css">
 <title>Document</title>
</head>
<body>

<h2> Johan's Blog </h2>

<div id="main">
<?php
try {
    $conn = new PDO("mysql:host=127.0.0.1; dbname=blog", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM artikelen order by id desc limit 3";
    $result = $conn->query($sql);
    foreach ($result as $row) {
    echo "<p>";
    echo $row['titel'];
    echo "</p>";
    echo "<div class='blogtext'>";
    echo $row['body'];
    echo "</div>";
    }
}

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
</div>




<!-- <div>
    <input placeholder="name" name="titel" type="text" id="titel">
    <input placeholder="message" name="body" type="text" id="body"></br>
    <button type="button" onclick="message()">Write to database</button></br>
    <button type="button" onclick="getDataFromDatabase()">Get database data</button></br>
</div> -->
<!--
<script>
function message () {
  var y = document.getElementById("titel").value;
  var x = document.getElementById("body").value;

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "blog.php?body=" + x + "&titel=" + y, false);
  xhttp.send();
  clearField();
}

function clearField() {
  document.getElementById("body").value = "";
  document.getElementById("titel").value = "";
}

function getDataFromDatabase() {
var xhttp = new XMLHttpRequest();
xhttp.open("GET", "blogoutput.php?", false);
xhttp.send();
document.getElementById("demo").innerHTML = xhttp.responseText;
}

</script> -->
</body>
</html>
