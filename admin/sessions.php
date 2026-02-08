<?php include '../db.php'; ?>
<h2>Charging Sessions</h2>
<table border="1">
<tr><th>Session ID</th><th>Energy</th><th>Amount</th><th>Status</th></tr>
<?php
$q=mysqli_query($conn,"SELECT * FROM sessions ORDER BY id DESC");
while($r=mysqli_fetch_assoc($q)){
echo "<tr><td>{$r['session_id']}</td><td>{$r['energy_kwh']}</td><td>{$r['amount']}</td><td>{$r['charging_status']}</td></tr>";
}
?>
</table>