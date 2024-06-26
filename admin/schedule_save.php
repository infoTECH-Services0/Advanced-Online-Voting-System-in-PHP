<?php
include 'includes/session.php';

if(isset($_POST['save'])){
//    $id = $_POST['id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "SELECT * FROM schedule WHERE id = 1";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    $sql = "UPDATE schedule SET start_date = '$start_date', end_date = '$end_date' WHERE id = 1";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Voting Time Schedule updated successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }
}
else{
    $_SESSION['error'] = 'Fill up edit form first';
}

header('location: home.php');

?>