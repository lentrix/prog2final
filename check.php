<?php
include "db.php";
include "key.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam Result</title>
</head>
<body>

<?php if(!isset($_GET['id'])) : include("list.php"); ?>

<?php 
else :

$id = $_GET['id'];

$qry = $con->query("SELECT * FROM answer WHERE id=$id");
$row = $qry->fetch(PDO::FETCH_OBJ);

echo "<h1>Examination Result</h1>";
echo "<h2>Name: $row->lname, $row->fname</h2>";

$answer = explode("|", $row->answer);
$nAnswer = count($answer);
$nKey = count($key);
if($nAnswer<>$nKey) {
    die("<h1>Fatal Error! Answer and key does not match!</h1><p>Key[$nKey] : Answer[$nAnswer]</p>");
}
$score = 0;

echo "<table border=1>";
echo "<tr><th>Item</th><th>Reponse</th><th>Correct Answer</th><th>&nbsp;</th></tr>";
for($i=1; $i<=50; $i++) {
    if(strcmp($key[$i-1], $answer[$i-1]) == 0) {
        $character = '&#10004;';
        $score++;
    }else {
        $character = "X";
    }
    echo "<tr><td>$i.</th><th>{$key[$i-1]}</th><th>{$answer[$i-1]}</th><td>$character</td></tr>";
}
echo "</table>";
echo "<h2>Score Obtained by $row->lname, $row->fname: $score</h2>";

endif;
?>
    
</body>
</html>