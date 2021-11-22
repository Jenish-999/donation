<?php 

    include 'config.php';
    $id = $_GET['ids'];
    $delete = "Delete from user_data where id={$id}";
    $query_fire = mysqli_query($conn, $delete);

    if($query_fire){
        header("Location:display.php");
    }else{
        echo "<script>alert('Your data is not deleted!!');</script>";
    }

?>