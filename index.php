<?php
session_start();
if (!isset($_SESSION['lvl'])) {
    $_SESSION['lvl'] = 1;
    $_SESSION['son1'] = rand(1,30);
    $_SESSION['son2'] = rand(1,30);
    $_SESSION['bel'] = rand(1,2);
}
if (isset($_POST['jav'])) {
    if (tek()) {
        if ($_SESSION['lvl'] <= 5) {
            $_SESSION['son1'] = rand(1,30);
            $_SESSION['son2'] = rand(1,30);
            $_SESSION['bel'] = rand(1,2);
        }
        elseif ($_SESSION['lvl'] <= 25) {
            $_SESSION['bel'] = rand(1,4);
            if ($_SESSION['bel'] == 1 or $_SESSION['bel'] == 2) {
                $_SESSION['son1'] = rand(1,30);
                $_SESSION['son2'] = rand(1,30);
            }
            elseif ($_SESSION['bel'] == 3) {
                $_SESSION['son1'] = rand(1,30);
                $_SESSION['son2'] = rand(1,5);
            }
            elseif ($_SESSION['bel'] == 4) {
                $_SESSION['son1'] = rand(1,50);
                $_SESSION['son2'] = rand(1,5);
            }
        }else/*if ($_SESSION['lvl'] >= 10)*/ {
            $_SESSION['bel'] = rand(1,4);
            if ($_SESSION['bel'] == 1 or $_SESSION['bel'] == 2) {
                $_SESSION['son1'] = rand(1,50);
                $_SESSION['son2'] = rand(1,50);
            }
            elseif ($_SESSION['bel'] == 3) {
                $_SESSION['son1'] = rand(1,50);
                $_SESSION['son2'] = rand(1,5);
            }
            elseif ($_SESSION['bel'] == 4) {
                $_SESSION['son1'] = rand(1,50);
                $_SESSION['son2'] = rand(1,5);
            }
        }
        $_SESSION['lvl']++;
    }
    elseif ($_POST['jav'] == '') {
        $xato = "Javob kiritmadingiz";
    }
    else {
        $xato = "To'g'ri javob kirirng";
    }
}
function tek() {
    if ($_SESSION['bel'] == 1) {
        if (($_SESSION['son1'] + $_SESSION['son2']) == $_POST['jav']) {
            return true;
        }
    }elseif ($_SESSION['bel'] == 2) {
        if (($_SESSION['son1'] - $_SESSION['son2']) == $_POST['jav']) {
            return true;
        }
    }elseif ($_SESSION['bel'] == 3) {
        if (($_SESSION['son1'] * $_SESSION['son2']) == $_POST['jav']) {
            return true;
        }
    }elseif ($_SESSION['bel'] == 4) {
        if (round($_SESSION['son1'] / $_SESSION['son2']) == $_POST['jav']) {
            return true;
        }
    }
}
function belgi($bel) {
    if ($bel == 1) {
        return('+');
    }elseif ($bel == 2) {
        return('-');
    }elseif ($bel == 3) {
        return('x');
    }elseif ($bel == 4) {
        return(':');
    }
}
// print_r($_SESSION);
// print_r($_POST);
// session_destroy()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class='lvl'><?=$_SESSION['lvl']?> Level</h2>
        <form action="" method="POST">
            <div class="bolim">
                <div id="son1"><?=$_SESSION['son1']?></div>
                <div id="bel"><?=belgi($_SESSION['bel'])?></div>
                <div id="son2"><?=$_SESSION['son2']?></div>
                =
                <input type="tel" id="jav" name="jav"><br>
            </div>
            <br>
            <button type='submit'>Yuborish</button>
        </form>
        <h2 id="xato"><?=$xato?></h2>
    </div>
</body>
</html>