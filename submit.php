<?php

include 'db.php';

if(isset($_POST['submit'])) {
    $answer = implode("|", $_POST['ans']);

    $id = $_COOKIE['answer_id'];
    
    $ps = $con->prepare("UPDATE answer SET answer=:ans WHERE id=:id");
    $ps->bindParam(":ans", $answer);
    $ps->bindParam(":id", $id);

    $ps->execute();

    setcookie("answer_id", "", time() - 3600,"/");
    setcookie("start", "", time() - 3600,"/");

    header("location: index.php");
}