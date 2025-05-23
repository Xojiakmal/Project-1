<?php
session_start();
if (!isset($_SESSION['lvl'])) {
    $_SESSION['lvl'] = 1;
    $_SESSION['son1'] = rand(1,30);
    $_SESSION['son2'] = rand(1,30);
    $_SESSION['bel'] = rand(1,4);
}elseif (($_SESSION['son1'] + $_SESSION['son2']) == $_POST['jav'] and isset($_POST['jav'])) {
    $_SESSION['son1'] = rand(1,30);
    $_SESSION['son2'] = rand(1,30);
    $_SESSION['bel'] = rand(1,4);
    $_SESSION['lvl']++;
}else {
    $xato = "Javobingiz xato!";
}
print_r($_SESSION);
print_r($_POST)
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display:inline-block;
        }
        body{
            background: #000;
            color: white;
        }
        input{
            width: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post" onsubmit="return abd()" name="form">
        <div id="son1"><?=$_SESSION['son1']?></div>
        <div id="bel">+</div>
        <div id="son2"><?=$_SESSION['son2']?></div>
        =
        <input type="tel" id="jav" name="jav"><br>
        <button type='submit'>Yuborish</button>
        <br>
        <div id="xato"><?=$xato?></div>
    </form>

    <script src="script.js"></script>
</body>
</html>