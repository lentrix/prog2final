<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programming 2 Final - Programming</title>
    <style type="text/css">
        
        body {color: #000000; background-color: #ffffff; font-family: monospace; font-size: 1.2em}
        pre {color: #000000; background-color: #ffffff; font-family: monospace; font-size: 1.2em}
        table {color: #000000; background-color: #e9e8e2; font-family: monospace}
        .ST0 {font-family: monospace; font-weight: bold}
        .ST1 {font-family: monospace; font-weight: bold; font-style: italic}
        .ST2 {color: #009900; font-family: monospace; font-style: italic}
        .literal {color: #0000e6}
        .string {color: #ce7b00}
        .title{font-size: 1.6em; font-weight: bold}
        .submission {
            display: block;
            clear: both;
            padding: 20px;
        }
        .submission button {
            font-size: 1.4em;
        }
        input.ans {
            width: 150px;
        }
        input.ans.long {
            width: 250px;
        }

        .timer {
            position: absolute;
            right: 30px;
            top: 30px;
            background-color: #333;
            color: yellow;
            font-size: 2.0em;
            padding: 20px;
        }
        
    </style>
</head>
<body>
    <!--
        HEY! WHY ARE YOU LOOKING AT THE SOURCE?
        ARE YOU PLANNING TO CHEAT? HUH?
    -->

    <?php if(!isset($_COOKIE['answer_id'])) : ?>
        <?php include "login.php"; ?>
    <?php else : ?>

    <p><span style="font-size: 1.3em; font-weight: bold">Instruction:</span> Complete the lacking parts of the program.</p>
    <form action="submit.php" method="post">
        <?php include("Subject.java.php"); ?>
        <?php include("Student.java.php"); ?>
        <?php include("Finals.java.php"); ?>
        <div class="submission">
            <p>
                <label for="ready">
                <input type="checkbox" id="ready" onClick="readyToSubmit()" />
                I am now ready to submit
                </label>
            </p>
            <button type="submit" id="submit" name="submit" disabled>Submit</button>
        </div>
    </form>

    <?php endif; ?>

    <script>
    function readyToSubmit() {
        var check = document.getElementById("ready");
        var submit = document.getElementById("submit");
        submit.disabled = !check.checked;
    }
    </script>
</body>
</html>