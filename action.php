<?php
include 'init.php';
$pageTitle = 'Manage';

$action = isset($_GET['action']) ? $_GET['action'] : 'Manage';

if($action === "Add") {
    
    echo "This is add"; ?>
    <section class="add-word container text-center">
        <a href="index.php"><i class="fa fa-home pull-left home"></i></a>
        <h1 class="word-header">Add a new word</h1>
        <form action="action.php?action=Insert" method="post" class="add-form">
            <input type="text" name="newWord" class="new-word" placeholder="new word" title="please choose a word" autocomplete="off" required>
            <div class="add">
                <input type="submit" value="Add Word" class="mybtn3 btn btn-danger">
                <i class="fa fa-file-word-o"></i>
            </div>
        </form>
    </section>

    <?php  } elseif($action === "Insert") {
        
        $newWord = $_POST['newWord'];
        $stmt2 = $connect->prepare("INSERT INTO words(word) VALUES(:word)");
        $stmt2->bindParam(':word',$newWord);
        $stmt2->execute();
        echo "<div class='success'>Successfully Added, You will be redirected to start game in 3 seconds...</div>";
        header("REFRESH:3;URL=index.php");
    
    } elseif($action === "Manage") { ?>
    <div class="container">

        <h1 class="text-center head">Available Words</h1>
        <div class="main-table table-responsive">
            <table class="table table-bordered text-center">
                <tr>
                    <thead>
                        <td>ID#</td>
                        <td>Word</td>
                        <td>Delete</td>
                    </thead>
                </tr>
                <?php 
                    $stmt2 = $connect->prepare("SELECT * FROM words");
                    $stmt2->execute();
                    $row = $stmt2->fetchAll();
                    foreach($row as $data){
                        echo "<tr>";
                        echo "<td>" . $data['wordID'] . "</td>";
                        echo "<td>" . $data['word'] . "</td>";
                        echo "<td>";
                        echo "<a href='action.php?action=Delete&wordID=" . $data['wordID'] . "'><button class='btn btn-danger fa fa-times confirm'></button></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
    
        echo "</table>";
        echo "<h5 class='text-center'><a href='index.php'>Go to homepage</a></h5>";
        echo "</div>";
        echo "</div>";
    
} elseif($action == "Delete"){
            
        $wordID = isset($_GET['wordID']) && is_numeric($_GET['wordID']) ? intval($_GET['wordID']) : 0;
                                                                                 
        //To get the information of that UserID

       
                 
            $stmt = $connect->prepare("DELETE FROM
                                            words
                                        WHERE
                                            wordID = :zwordId
                                                    ");
            $stmt->bindParam(":zwordId", $wordID);
            $stmt->execute();
            
            echo "<div class='success'>Successfully Deleted, You will be redirected to the previous page in 3 seconds...</div>";
            header("REFRESH:3;URL=action.php?action=Manage");
            
        }

   
        

 include $template . 'footer.php'; ?>
