<?php
$servername = "localhost"; // = "sandpiper" results in host "true-tube.org" is not allowed to connect...
$dbname = "fastcards";
$username = 'ubuntu';
$password = 'FgNQj+c<a6J!t(eZ';
$tablename= 'demo';
// connect to mysql
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT id front FROM demo WHERE id=0';

$result = $conn->query($sql);   // saves result of mysql query in $result

if ($result->num_rows > 0) {
    echo "front: " . $result["front"] . "<br>";
} else {
    echo "results will show here.";
}
$conn->close();
?>

<DOCTYPE html>
<head>
    <title>sql_read</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database Test Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css"/>
</head>
<body>
    <h1>I am Sandpiper. This is FastCards.</h1>
    <h2>Reviewing deck...</h2>
    <form name="myform" action="sql_read.php" method="POST">
        <input type="hidden" name="test-submit">
        <!-- username and password:  -->
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Enter your username" required>
        <button type="submit">Begin Review</button>
    </form>
</body>
</html>