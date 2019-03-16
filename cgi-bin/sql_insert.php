<?php
    // confirm that the form input data exists in $_POST:
if (array_key_exists('test-submit', $_POST)) {
    // here, convert newlines to breaks, glue arrays into strings,
    // but that isn't necessary since flashcards are <= 140 chars

    $front = $_POST['front']; // 'front' and 'back' respectively 
    $back  = $_POST['back'];  // must be name properties in the forms.
}

// init vars to make the connection
$servername = "localhost"; // = "sandpiper" results in host "true-tube.org" is not allowed to connect...
$dbname = "fastcards";
$username = $_POST['username'];
$password = $_POST['password'];
$tablename= $_POST['tablename'];

try {
    // PDO stands for PHP Database Object and represents an object used to connect to a database:
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // -> accesses instance members. :: accesses field members.
    // so this is declaring that $conn should throw exceptions:
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO $tablename VALUES ('$front', '$back');";
    $conn->exec($sql);
    echo "new card created: <br>FRONT = {$front} <br>BACK = {$back}";
} catch (PDOException $e) { // display the SQL command with PDO's error message.
    echo $sql , "<br>" , $e->getMessage();
}

// CAN WE DO BATCH READS FROM TEAMSITE? 
// Advocate Git or ClearCase for large batch changes.
// email helpdesk for outlook attaches.
// What framework will be used for responsive front-end design? Bootstrap? CSS Grid?
// Get in touch with whoever scripted the Intranet

$conn = null; // end connection
?>