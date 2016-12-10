<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h3>Spells</h3>

<?php
/*
 [index] => [
 	"name" => "",
 	"words" = "exura",
	"mana" = 25,
	"ml" = 1,
	"voc" => {1,2,3,4},
	"cost" => "150",
	("promo" => "no",)
],

index	just the index/id of the spell in the $spells array
name	the spell's name
words	the words to cast the spell
mana	the mana cost for the spell
ml	the required magic level to cast the spell
voc	array of vocations that can cast the spell (1 sorc, 2 druid, 3 paladin, 4 knight)
cost	the price to learn the spell
promo	optional: if promotion is required for the spell, if this is not declared in the array it will be auto "no"
*/
$spells = [
	1 => [
		"name" => "Find Person",
		"words" => "exiva \"pseudo",
		"mana" => 20,
		"ml" => 0,
		"voc" => {1,2,3,4},
		"cost" => "80",
	],
	2 => [
		"name" => "Ultimate Explosion",
		"words" => "exevo gran mas vis",
		"mana" => 800,
		"ml" => 40,
		"voc" => {1},
		"cost" => "8.000",
		"promo" => "yes",
	],
	3 => [
		"name" => "Ultimate Healing Rune",
		"words" => "adura vita",
		"mana" => 100,
		"ml" => 10,
		"voc" => {2},
		"cost" => "2.000",
	],
	4 => [
		"name" => "Conjure Arrow",
		"words" => "exevo con",
		"mana" => 40,
		"ml" => 2,
		"voc" => {3},
		"cost" => "400",
	],
	5 => [
		"name" => "Berserk",
		"words" => "exori",
		"mana" => "4 * Level",
		"ml" => 5,
		"voc" => {4},
		"cost" => "5.000",
	],
];

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

<table>
	<tr>
		<th>Spell Words</th>
		<th>Spell Name</th>
		<th>Mana</th>
		<th>Magic Level</th>
		<?php
		if ($type == "all") {
			echo '<th>Vocation</th>';
		}
		?>
		<th>Promotion</th>
		<th>Cost</th>
	</tr>
	<?php
	foreach ($spells as $key => $row) {
		$mlv[$key]    = $row['ml'];
	}
	array_multisort($mlv, SORT_ASC, $spells);
	
	foreach ($spells as $sp) {
		if ($type == "all" or $sp['voc'][$type]) {
			echo '<tr>';
			echo '<td>'.$sp['words'].'</td>';
			echo '<td>'.$sp['name'].'</td>';
			echo '<td>'.$sp['mana'].'</td>';
			echo '<td>'.$sp['ml'].'</td>';
			
			if ($type == "all") {
				$vocString = '';
				foreach($sp['voc'] as $voc) {
					switch($voc) {
						case 1:
							if ($vocString = '') {
								$vocString = "Sorcerer";
							} else {
								$vocString = $vocString + "<br>Sorcerer";
							}
							break;
						case 2:
							if ($vocString = '') {
								$vocString = "Druid";
							} else {
								$vocString = $vocString + "<br>Druid";
							}
							break;
						case 3:
							if ($vocString = '') {
								$vocString = "Paladin";
							} else {
								$vocString = $vocString + "<br>Paladin";
							}
							break;
						case 4:
							if ($vocString = '') {
								$vocString = "Knight";
							} else {
								$vocString = $vocString + "<br>Knight";
							}
							break;
					}
				}
				echo '<td>'.$vocString.'</td>';
			}
			
			if (isset($sp['promo']) and $sp['promo'] == "yes") {
				echo '<td>Yes</td>';
			} else {
				echo '<td>No</td>';
			}
			
			echo '<td>'.$sp['cost'].'</td>';
			echo '</tr>';
		}
	}
	?>
</table>

<?php include 'layout/overall/footer.php'; ?>
