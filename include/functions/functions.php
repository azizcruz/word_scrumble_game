<?php
//This Function Count How many words in the database
function countRows(){

    global $connect;
    $query = $connect->prepare("SELECT * FROM words");
    $query->execute();
    $row = $query->rowCount();
    return $row;
    
}
//This Function Count How many words in the database

//This Function Retreive a word from database depends on its id
function getWord($id){ 

    global $connect;
    $query = $connect->prepare("SELECT word FROM words WHERE wordID = $id");
    $query->execute(array($id));
    $data = $query->fetchColumn();
    
    return $data;
    
}
//This Function Retreive a word from database depends on its id

//This function to check if the word is in database
function checkInDataBase($word) {
    global $connect;
    $query = $connect->prepare("SELECT word FROM words");
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_COLUMN, 0);
    
    if(in_array($word, $data) == 1){
        return 1;
    } else {
        return 0;
    }
}
//This function to check if the word is in database




?>