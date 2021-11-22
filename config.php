<?php 

    $conn = mysqli_connect("localhost", "root", "", "donation");
    if(!$conn){
        echo "<script>alert('DataBase is not connected!!');</script>";
    }

?>