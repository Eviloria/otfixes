<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h3>Task List</h3>
<?php
$tasks = [
	1 => [
		"img" => "rat",
		"name" => "Rats",
		"kills" => "35",
		"reward" => [
			1 => "2200 Experience",
			2 => "400 Gold Coins",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	2 => [
		"img" => "troll",
		"name" => "Trolls",
		"kills" => "100",
		"reward" => [
			1 => "5000 Experience",
			2 => "15 Platinum Coins"
		],
	],
	3 => [
		"img" => "swamptroll",
		"name" => "Swamp Trolls",
		"kills" => "200",
		"reward" => [
			1 => "9000 Experience",
			2 => "15 Platinum Coins",
		],
	],
	4 => [
		"img" => "rotworm",
		"name" => "Rotworms",
		"kills" => "200",
		"reward" => [
			1 => "15000 Experience",
			2 => "35 Platinum Coins",
		],
	],
	5 => [
		"img" => "larva",
		"name" => "Larvas",
		"kills" => "200",
		"reward" => [
			1 => "15000 Experience",
			2 => "30 Platinum Coins",
		],
	],
	6 => [
		"img" => "scarab",
		"name" => "Scarabs",
		"kills" => "200",
		"reward" => [
			1 => "100000 Experience",
			2 => "90 Platinum Coins",
		],
	],
	7 => [
		"img" => "goblin",
		"name" => "Goblins",
		"kills" => "200",
		"reward" => [
			1 => "30000 Experience",
			2 => "20 Platinum Coins",
		],
	],
	8 => [
		"img" => "slime",
		"name" => "Slimes",
		"kills" => "100",
		"reward" => [
			1 => "30000 Experience",
			2 => "50 Platinum Coins",
		],
	],
	9 => [
		"img" => "minotaur",
		"name" => "Minotaurs",
		"kills" => "500 (any kind)",
		"reward" => [
			1 => "100000 Experience",
			2 => "50 Platinum Coins",
		],
	],
	10 => [
		"img" => "orc",
		"name" => "Orcs",
		"kills" => "900 (any kind)",
		"reward" => [
			1 => "200000 Experience",
			2 => "75 Platinum Coins",
		],
	],
	11 => [
		"img" => "ghoul",
		"name" => "Ghouls",
		"kills" => "300",
		"reward" => [
			1 => "100000 Experience",
			2 => "100 Platinum Coins",
		],
	],
	12 => [
		"img" => "Valkyrie",
		"name" => "Valkyries",
		"kills" => "200",
		"reward" => [
			1 => "80000 Experience",
			2 => "70 Platinum Coins",
		],
	],
	13 => [
		"img" => "Amazon",
		"name" => "Amazons",
		"kills" => "200",
		"reward" => [
			1 => "30000 Experience",
		],
	],
	14 => [
		"img" => "Mummy",
		"name" => "Mummies",
		"kills" => "500",
		"reward" => [
			1 => "200000 Experience",
			2 => "50 Platinum Coins",
		],
	],	
	15 => [
		"img" => "Elf",
		"name" => "Elves",
		"kills" => "750",
		"reward" => [
			1 => "150000 Experience",
			2 => "60 Platinum Coins",
		],
	],
	16 => [
		"img" => "Priestess",
		"name" => "Priestesses",
		"kills" => "350",
		"reward" => [
			1 => "250000 Experience",
		],
	],	
	17 => [
		"img" => "Cyclops",
		"name" => "Cyclops",
		"kills" => "600",
		"reward" => [
			1 => "	200000 Experience",
			2 => "",
		],
	],
	18 => [
		"img" => "DwarfGuard",
		"name" => "Dwarf Guards",
		"kills" => "500",
		"reward" => [
			1 => "200000 Experience",
			2 => "",
		],
	],
	19 => [
		"img" => "CryptShambler",
		"name" => "Crypt Shamblers",
		"kills" => "600",
		"reward" => [
			1 => "350000 Experience",
			2 => "",
		],
	],
	20 => [
		"img" => "blackknight",
		"name" => "Black Knights",
		"kills" => "100",
		"reward" => [
			1 => "300000 Experience",
			2 => "Boots of Haste",
		],
	],
	21 => [
		"img" => "DemonSkeleton",
		"name" => "Demon Skeletons",
		"kills" => "666",
		"reward" => [
			1 => "400000 Experience",
			2 => "66 Black Pearls",
			3 => "Grey Tome"
		],
	],
	22 => [
		"img" => "Vampire",
		"name" => "Vampires",
		"kills" => "600",
		"reward" => [
			1 => "400000",
			2 => "Vampire Shield",
		],
	],
	23 => [
		"img" => "Hero",
		"name" => "Heroes",
		"kills" => "400",
		"reward" => [
			1 => "250000 Experience",
			2 => "Crown",
		],
	],
	24 => [
		"img" => "BlueDjinn",
		"name" => "Blue Djinns",
		"kills" => "400",
		"reward" => [
			1 => "350000 Experience",
			2 => "Blue Gem",
		],
	],
	25 => [
		"img" => "GreenDjinn",
		"name" => "Green Djinns",
		"kills" => "400",
		"reward" => [
			1 => "350000 Experience",
			2 => "Green Gem",
		],
	],
	26 => [
		"img" => "Marid",
		"name" => "Marids",
		"kills" => "200",
		"reward" => [
			1 => "300000 Experience",
			2 => "Blue Tome",
		],
	],
	27 => [
		"img" => "Efreet",
		"name" => "Efreets",
		"kills" => "200",
		"reward" => [
			1 => "300000 Experience",
			2 => "Green Tome",
		],
	],
	28 => [
		"img" => "Necromancer",
		"name" => "Necromancers",
		"kills" => "350",
		"reward" => [
			1 => "250000 Experience",
			2 => "Boots of Haste",
		],
	],
	29 => [
		"img" => "AncientScarab",
		"name" => "Ancient Scarabs",
		"kills" => "400",
		"reward" => [
			1 => "400000 Experience",
			2 => "36 Small Emeralds",
		],
	],
	30 => [
		"img" => "Dragon",
		"name" => "Dragons",
		"kills" => "700 (any kind)",
		"reward" => [
			1 => "1000000 Experience",
			2 => "",
		],
	],
	31 => [
		"img" => "GiantSpider",
		"name" => "Giant Spiders",
		"kills" => "500",
		"reward" => [
			1 => "400000 Experience",
			2 => "Knight Armor",
			2 => "Knight Legs",
		],
	],
	32 => [
		"img" => "Behemoth",
		"name" => "Behemoths",
		"kills" => "500",
		"reward" => [
			1 => "1000000 Experience",
			2 => "Amazon Shield",
		],
	],	
	33 => [
		"img" => "DragonLord",
		"name" => "Dragon Lords",
		"kills" => "1000",
		"reward" => [
			1 => "2000000 Experience",
			2 => "Red Tome",
		],
	],	
	34 => [
		"img" => "Warlock",
		"name" => "Warlocks",
		"kills" => "600",
		"reward" => [
			1 => "1500000 Experience",
			2 => "Rose Shield",
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
	echo '<tr style="align: center">';
	echo '<td><img src="layout/images/monsters/' . $task['img'] . '.gif"/></td>';
	echo '<td>' . $task['name'] . '</td>';
	echo '<td>' . $task['kills'] . '</td>';
	$reward_str = '';
	foreach ($task['reward'] as $reward) {
		if ($reward_str == '') {
			$reward_str = $reward;
		} else {
			$reward_str = $reward_str . '<br>' . $reward;
		}
	}
	echo '<td>' . $reward_str . '</td>';
	echo '</tr>';
}?>
</table>

<?php include 'layout/overall/footer.php'; ?>
