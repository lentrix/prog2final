<?php 
include "db.php";

if(isset($_POST['login'])) {
    $ln = $_POST['lname'];
    $fn = $_POST['fname'];

    if(empty($ln) || empty($fn)) {
        echo "<p>Please fill up all the fields.</p>";
    }else {
        //create a new answer
        $ps = $con->prepare("INSERT INTO answer (lname, fname) 
        VALUES (:l, :f)");

        $ps->bindParam(':l', $ln);
        $ps->bindParam(':f', $fn);

        $ps->execute();
        setcookie("answer_id", $con->lastInsertId(), time() + (86400 * 30), "/");
        setcookie("start", time(), time() + (86400 * 30), "/");

        header("location: index.php");
    }
}

?>

<form method="post" action="">

<table>
    <tr>
        <td><label for="lname">Last Name</label></td>
        <td><input type="text" name="lname" id="lname" /> </td>
    </tr>
    <tr>
        <td><label for="fname">First Name</label></td>
        <td><input type="text" name="fname" id="fname" /> </td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="login">Login</button>
        </td>
    </tr>
</table>

</form>