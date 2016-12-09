<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h3>Experience Stages</h3>
<?php
$stages = [
	1 => [
		"from" => 1,
		"to" => 20,
		"rate" => 15,
	],
	2 => [
		"from" => 21,
		"to" => 40,
		"rate" => 12,
	],
	3 => [
		"from" => 41,
		"to" => 50,
		"rate" => 8,
	],
	4 => [
		"from" => 51,
		"to" => 60,
		"rate" => 7,
	],
	5 => [
		"from" => 61,
		"to" => 70,
		"rate" => 6,
	],
	6 => [
		"from" => 71,
		"to" => 80,
		"rate" => 5,
	],
	7 => [
		"from" => 81,
		"to" => 90,
		"rate" => 4,
	],
	8 => [
		"from" => 91,
		"to" => 100,
		"rate" => 3,
	],	
	9 => [
		"from" => 101,
		"to" => 999,
		"rate" => 2,
	],	
];

//var_dump($stages);
?>
<table class="table table-striped table-hover">
	<tr>
		<th>From Level</th>
		<th>To Level</th>
		<th>Rate</th>
	</tr>
	<?php
	foreach ($stages as $stage) {
		echo '<tr><td>' . $stage['from'] . '</td><td>' . $stage['to'] . '</td><td>' . $stage['rate'] . 'x</td></tr>';
	}?>
</table>

<?php include 'layout/overall/footer.php'; ?>
