<?php include '../db.php';
if(isset($_POST['on'])){
mysqli_query($conn,"UPDATE charging_control SET relay_status=1,last_start=NOW() WHERE id=1");
}
if(isset($_POST['off'])){
mysqli_query($conn,"UPDATE charging_control SET relay_status=0,last_stop=NOW() WHERE id=1");
}
header("Location: dashboard.php");
?>