<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>
level_to_experience
<h3>Experience Table</h3>
<?php
$exp_table_config = [
  'start_lvl' = 1,
  'end_lvl' = 200,
];
?>
<table class="table table-striped table-hover">
	<tr>
		<th>Level</th>
		<th>Experience</th>
		<th>Level</th>
		<th>Experience</th>
	</tr>
<?php
for ($i = $exp_table_config['start_lvl']; $i <= ($exp_table_config['end_lvl'] / 2); $i++) {
  echo '<tr>';
	echo '<td>' . $i . '</td>';
	echo '<td>' . level_to_experience($i) . '</td>';
	echo '<td>' . ($i+($exp_table_config['end_lvl'] / 2)) . '</td>';
	echo '<td>' . level_to_experience(($i+($exp_table_config['end_lvl'] / 2))) . '</td>';
  echo '</tr>';
}?>
</table>

<?php include 'layout/overall/footer.php'; ?>
