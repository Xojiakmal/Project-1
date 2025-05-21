<?php
$arr = ['bir', 'ikki', 'uch'];

$myJson = json_encode($arr);

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
        <div id="son1"></div>
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