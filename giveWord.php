<?php
include "init.php";
session_start();
?>

<section class="result container text-center last-page">
    <a href="index.php"><i class="fa fa-repeat pull-left home"> Play Again</i></a></br>
    <div class="text-center">
        <h1 class="play-header"><?php echo "GameOver"; ?></h1>
        <h1 class="play-header">Winner</h1>
        <?php
        if ($_SESSION['score1'] > $_SESSION['score2']) {
            echo "<br><strong class='winner'>" . $_SESSION['player1'] . "</strong>";
        } elseif ($_SESSION['score1'] < $_SESSION['score2']) {
            echo "<br><strong class='winner'>" . $_SESSION['player2'] . "</strong>";
        } else {
            echo "<br><strong class='winner'>Draw</strong>";
        }
        ?>
        <h1 class="play-header">Result</h1>
        <h3><?php echo $_SESSION['score1'] . " - " . $_SESSION['score2']; ?></h3>
    </div> 
</section>

<?php
include $template . "footer.php";
?>