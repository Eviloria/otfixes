<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h3>Spells</h3>

<?php
if (isset($_GET['vocation'])) {
	$type = $_GET['vocation'];
} else {
	$type = "all";
}
?>
<form action="" method="get">
	<table class="table">
		<tbody>
			<tr><th>Spell Search</th></tr>
			<tr><td>
				<label for="vocation">Vocation</label>
				<select class="form-control" name="vocation" id="vocation">
					<option value="all" <?php if ($type == "all") { echo "selected"; }?>>All</option>
					<option value="1" <?php if ($type == "1") { echo "selected"; }?>> Sorcerer</option>
					<option value="2" <?php if ($type == "2") { echo "selected"; }?>> Druid</option>
					<option value="3" <?php if ($type == "3") { echo "selected"; }?>> Paladin</option>
					<option value="4" <?php if ($type == "4") { echo "selected"; }?>> Knight</option>
				</select>
			</td></tr>
			<tr>
				<td><button class="btn btn-primary" type="submit">Filter</button></td>
			</tr>
		</tbody>
	</table>
</form>
<?php
echo $type;
?><br><?php
var_dump(getSpellList());
?><br><?php
var_dump(returnServerSpells());
?>

<?php include 'layout/overall/footer.php'; ?>
