<?php
// confirm receipt of the form:
if (array_key_exists('test-submit', $_POST)) {
    // convert the text area's \n chars to html-friendly <br>
    $_POST['comments'] = nl2br($_POST['comments']); // nl2br is a PHP builtin
    if (isset($_POST['like-dogs'])) {
        $_POST['like-dogs'] = implode(', ', $_POST['like-dogs']);
    } // glues array into a string ^

    // show the form results:
    echo "Your name is {$_POST['name']}.<br>";
    echo "Your email is {$_POST['email']}.<br>";
    echo "You like dogs this much: {$_POST['like-dogs']}.<br>";
    echo "Your other comments are: {$_POST['comments']}.<br>";
} else {
    echo "You cannot see this page without submitting the form.";
}
?>