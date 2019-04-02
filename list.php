<h1>Check Results</h1>
<?php
$query = $con->query("SELECT id, lname, fname FROM answer ORDER BY lname, fname");
echo "<ul>";
while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo "<li><a href='check.php?id=$row->id'>$row->lname, $row->fname</a></li>";
}
echo "</ul>";