<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h3>Task List</h3>
<?php
$tasks = [
	1 => [
    "img" => "amazon",
		"name" => "Amazons Task",
		"kills" => "200",
		"reward" => [
      1 => "10.000 XP",
      2 => "5.000 GP",
    ],
	],
  2 => [
    "img" => "bear",
		"name" => "Bears Task",
		"kills" => "100",
		"reward" => [
      1 => "2.000 XP",
    ],
	],
  3 => [
    "img" => "orcshaman",
		"name" => "Orc Shamans Task",
		"kills" => "400",
		"reward" => [
      1 => "2.000 GP",
      2 => "Blue Spellwand",
    ],
	],
];

//var_dump($tasks);
?>
<table class="table table-striped table-hover">
	<tr>
		<th>Monster</th>
		<th>Name</th>
		<th>Kills</th>
    <th>Reward</th>
	</tr>
	<?php
	foreach ($tasks as $task) {
		echo '<tr>';
    echo '<td><img src="layout/images/monsters/' . $task['img'] . '.gif"/></td>';
    echo '<td>' . $task['name'] . '</td>';
    echo '<td>' . $task['kills'] . '</td>';
    echo '<td>' . foreach ($task['reward'] as $reward) { echo $reward . '<br>'; } . '</td>';
    echo '</tr>';
	}?>
</table>

<?php include 'layout/overall/footer.php'; ?>
