<?php
include "init.php";
session_start();
$_SESSION['round'] = 1;
$_SESSION['score1'] = 0;
$_SESSION['score2'] = 0;
extract($_POST);

if($_SERVER["REQUEST_METHOD"] == 'POST'){

$_SESSION['player1'] = $p1;
$_SESSION['player2'] = $p2;
    header("Location:playing.php");
    
} else {
?>





    <div class="instruc">
        <h4 class="text-center">How To Play..</h4>
        <ul>
            <li>Choose the names of the players</li>
            <li>The computer will give you a word</li>
            <li>The computer will shuffle that word</li>
            <li>Try to guess that word</li>
            <li>You have 3 rounds</li>
            <li>Who wins more rounds will win</li>
        </ul>
        <i class="fa fa-times"></i>
    </div>
    <section class="choose-player container text-center">
        <a href="index.php"><i class="fa fa-arrow-left pull-left home"></i></a>
        <h1 class="player-header">Players Names</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ;?>" method="post" class="player-form">
            <input type="text" name="p1" maxlength="20" class="player-names" placeholder="Player 1" title="Please Choose a player name" autocomplete="off" required>
            <input type="text" name="p2" maxlength="20" class="player-names" placeholder="Player 2" title="Please Choose a player name" autocomplete="off" required>
            <div class="play">
                <input type="submit" value="Kick Off" class="mybtn2 btn btn-danger">
                <i class="fa fa-play"></i>
            </div>
        </form>
    </section>

    <?php 
}
include $template . 'footer.php';
?>