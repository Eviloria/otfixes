<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h4>Experience Stages</h4>
<?php
$stages = [
	1 => [
		"from" => 1,
		"to" => 20,
		"rate" => 30
	],
	2 => [
		"from" => 21,
		"to" => 50,
		"rate" => 20
	],
	3 => [
		"from" => 51,
		"to" => 70,
		"rate" => 10
	],
	4 => [
		"from" => 71,
		"to" => 999,
		"rate" => 5
	]
];

var_dump($stages);
?>

<?php include 'layout/overall/footer.php'; ?>
