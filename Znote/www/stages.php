<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h4>Experience Stages</h4>
<?php
$stages = [
	1 => [
		"from" => 1,
		"to" => 20,
		"rate" => 30,
	],
	2 => [
		"from" => 21,
		"to" => 50,
		"rate" => 20,
	],
	3 => [
		"from" => 51,
		"to" => 70,
		"rate" => 10,
	],
	4 => [
		"from" => 71,
		"to" => 999,
		"rate" => 5,
	],
];

//var_dump($stages);
?>
<table>
	<tr>
		<th>From Level</th>
		<th>To Level</th>
		<th>Rate</th>
	</tr>
	<?php
	foreach ($stages as $stage) {
		echo '<tr><td>' .. $stage['from'] .. '</td><td>' .. $stage['to'] .. '</td><td>' .. $stage['rate'] .. 'x</td></tr>';
	}?>
</table>

<?php include 'layout/overall/footer.php'; ?>
