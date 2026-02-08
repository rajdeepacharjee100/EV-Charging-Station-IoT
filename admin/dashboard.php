<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>EV Admin Dashboard</title>
<style>
body{font-family:Arial;background:#0f172a;color:#fff}
.card{background:#111827;padding:15px;margin:10px;border-radius:10px}
.grid{display:grid;grid-template-columns:repeat(3,1fr)}
</style>
</head>
<body>
<h2>⚡ EV Charging Admin Dashboard</h2>


<div class="grid">
<div class="card">
<h3>Live Power</h3>
<?php $r=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM charging_live WHERE id=1")); ?>
Voltage: <?= $r['voltage'] ?> V<br>
Current: <?= $r['current'] ?> A<br>
Power: <?= $r['power'] ?> W<br>
Energy: <?= $r['energy_kwh'] ?> kWh
</div>


<div class="card">
<h3>Relay Status</h3>
<?php $c=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM charging_control WHERE id=1")); ?>
Status: <?= $c['relay_status']?'ON':'OFF' ?>
<form method="post" action="charging_control.php">
<button name="on">START</button>
<button name="off">STOP</button>
</form>
</div>


<div class="card">
<h3>Vehicle Detection</h3>
<?php $v=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM vehicle_status WHERE id=1")); ?>
IR1: <?= $v['ir_1'] ?> | IR2: <?= $v['ir_2'] ?>
</div>
</div>


</body>
</html>