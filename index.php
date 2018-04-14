<?php

include "init.php";

?>
    <div class="pull-right insert-word text-center"><a href="action.php?action=Add">Add Words <i class="fa fa-plus"></i></a>
        <a href="action.php?action=Manage">Manage Words <i class="fa fa-edit"></i></a>
    </div>
    <section class="start-game container text-center">
        <div><i class="fa fa-cog pull-right insert-cog" id="show-insert"></i></div>
        <h1 id="divtoBlink" class="start-header">ScramWords</h1>
        <h5>Aziz 2016 &copy; v3.0</h5>
        <a href="chsplayer.php">
            <button class="mybtn btn btn-primary btn-lg"><span>Start Game</span><i class="fa fa-gamepad"></i></button>
        </a>
    </section>

    <?php
include $template . 'footer.php';
?>
