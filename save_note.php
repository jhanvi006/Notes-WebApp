<?php  
    include("connection.php");
    //$connect = mysqli_connect("localhost", "root", "", "testing");
    if(isset($_POST["note_data"]))
    {
        $note_data = $_POST["note_data"];
        if($_POST["note_id"] != '')  
        {  
            //update post  
            $sql = "UPDATE NotesDetails SET NotesData = '".$note_data."' WHERE NotesId = '".$_POST["note_id"]."'";  
            mysqli_query($connect, $sql);  
        }  
        else  
        {  
            //insert post  
            $sql = "INSERT INTO NotesDetails(NotesData) VALUES ('".$note_data."')"; 
            $db -> get($sql); 
        }
    }  
?> 