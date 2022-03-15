<?php
/*if(isset($_POST['name'])) {
    echo "Hello  " . $_POST['name']. "  Your Last Login At " . $_POST['lastlogin'];
}
*/
/*
if(isset($_GET['name'])) {
    echo "Hello  " . $_GET['name']. "  Your Last Login At " . $_GET['lastlogin'];
}
*/
$comments = array('Thanks','Thanks You','Good');
if(isset($_POST['comments'])) {
    array_push($comments, $_POST['comments']);
}

foreach($comments as $com){
    echo $com . "</br>";
}


