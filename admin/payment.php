<?php include '../db.php'; ?>
<h2>Payments</h2>
<table border="1">
<tr><th>Session</th><th>Amount</th><th>Status</th></tr>
<?php
$q=mysqli_query($conn,"SELECT * FROM payment_status ORDER BY id DESC");
while($r=mysqli_fetch_assoc($q)){
echo "<tr><td>{$r['session_id']}</td><td>{$r['amount']}</td><td>{$r['status']}</td></tr>";
}
?>
</table>