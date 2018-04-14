<?php
include "init.php";
    session_start();
    extract($_POST);
    
    $cntWords = countRows(); // assign how many words in the database
    $randID = rand(1, $cntWords); //assign a random Id depends on the words in the database

   
    $theWord = getWord($randID); // get The word based on its ID
    $shuffle = str_shuffle($theWord);

    
    if($theWord != $shuffle) { //make sure the word is shuffeled
        $shuffle = $shuffle;
    } else {
        $shuffle = str_shuffle($theWord);
    }
    
    $_SESSION['CorrectWord'] = $theWord;
    $_SESSION['shuffeledWord'] = $shuffle;


?>

    <div class="round text-center">Round
        <?php echo $_SESSION['round'];?>
    </div>
    <section class="play-game container text-center">
        <a href="index.php"><i class="fa fa-arrow-left pull-left home"></i></a>
        <h1 class="play-header">Word</h1>
        <form action="chkword.php" method="POST">
            <input type="text" value="<?php echo $shuffle ;?>" class="text-center" readonly><br>
            <input type="text" name="try1" class="try1" autocomplete="off" placeholder="<?php echo $_SESSION['player1'] . " " . $_SESSION['score1'] ;?>">
            <input type="submit" name="res1" class="res1 btn" value="Try">
            <input type="text" name="try2" class="try2" autocomplete="off" placeholder="<?php echo $_SESSION['player2'] . " " . $_SESSION['score2'] ;?>">
            <input type="submit" name="res2" class="res2 btn" value="Try">
        </form>
    </section>

    <?php   
include $template . "footer.php";
?>
