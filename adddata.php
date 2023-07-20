<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $occasion = $_POST['occasion'];
        $partyDate = $_POST['partyDate'];
        $meal = $_POST['meal'];
        $foodOptions = $_POST['foodOptions'];
        $chk = implode(",",$foodOptions);  
        $courseList = $_POST['courseList'];
        $courseList = implode(",",$courseList); 

        $cost = $_POST['cost'];

        if($occasion != "" && $partyDate != ""  && $meal != ""  && $foodOptions != ""  && $cost != ""  && $courseList != ""){
            $sql = "INSERT INTO results (`occasion`, `partyDate`, `meal`,`foodOptions`,`cost`,`courseList`) 
            VALUES ('$occasion', '$partyDate','$meal','$chk','$cost','$courseList')";
            if (mysqli_query($conn, $sql)) {
                header("location: booking.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Name, Class and Marks cannot be empty!";
        }
    }
?>