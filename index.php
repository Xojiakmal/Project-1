<?php
session_start();
if (!isset($_SESSION['lvl'])) {
    $_SESSION['lvl'] = 1;
    $son1 = rand(1,30);
    $son2 = rand(1,30);
    $bel = rand(1,4);
}elseif ($_SESSION['lvl'] != $_SESSION['lvl2']) {
    $_SESSION['lvl2'] = $_SESSION['lvl'];
    $_SESSION['son1'] = rand(1,30);
    $_SESSION['son2'] = rand(1,30);
    $_SESSION['bel'] = rand(1,4);
    $_SESSION['lvl']++;
}
$arr = ['son1' => $_SESSION['son1'], 'son2' => $_SESSION['son2'], 'bel' => $_SESSION['bel']];
$myJson = json_encode($arr, JSON_PRETTY_PRINT);
file_put_contents('bag.json', $myJson);
// print_r($_SESSION);
// print_r($arr);
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
        <div id="son1">a</div>
        <div id="bel">+</div>
        <div id="son2"></div>
        =
        <input type="tel" id="jav" name="jav"><br>
        <button type="submit">Yuborish</button>
        <br>
        <div id="xato"></div>
    </form>

    <script src="script.js"></script>
</body>
</html>