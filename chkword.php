<?php

ob_start();
include "init.php";
session_start();
$ans1 = $_POST['try1'];
$ans2 = $_POST['try2'];

if ($_SESSION['round'] != 4) {

    $_SESSION['round'] ++;

    if (checkInDataBase($ans1) == 1) {
        echo "<center><div class='success'>" . $_SESSION['player1'] . " got it right!!" . "</div></center>";
        $_SESSION['score1'] = $_SESSION['score1'] + 1;
        if ($_SESSION['round'] != 4) {
            header("REFRESH:2;URL=playing.php");
        } else {
            header("REFRESH:2;URL=giveWord.php");
        }
    } elseif (checkInDataBase($ans2) == 1) {
        echo "<center><div class='success'>" . $_SESSION['player2'] . " got it right!!" . "</div></center>";
        $_SESSION['score2'] = $_SESSION['score2'] + 1;
        if ($_SESSION['round'] != 4) {
            header("REFRESH:2;URL=playing.php");
        } else {
            header("REFRESH:2;URL=giveWord.php");
        }
    } elseif (checkInDataBase($ans1) == 1 && checkInDataBase($ans2) == 1) {
        echo "<center><div class='success'>Both got it right!!" . "</div></center>";
        $_SESSION['score1'] = $_SESSION['score1'] + 1;
        $_SESSION['score2'] = $_SESSION['score2'] + 1;
        if ($_SESSION['round'] != 4) {
            header("REFRESH:2;URL=playing.php");
        } else {
            header("REFRESH:2;URL=giveWord.php");
        }
    } else {
        echo "<center><div class='success'>Nobody got it right</div></center>";
        if ($_SESSION['round'] != 4) {
            header("REFRESH:2;URL=playing.php");
        } else {
            header("REFRESH:2;URL=giveWord.php");
        }
    }
} else {
    header("REFRESH:2;URL=giveWord.php");
}

include $template . "footer.php";
ob_end_flush();
?>