<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h3>Quests</h3>
<?php
$tasks = [
	1 => [
		"name" => "Alawar's Vault Quest",
		"required level" => "0",
		"recomended level" => "10",
		"location" => "Senja/Folda",
		"reward" => [
			1 => "3 White Pearls",
			2 => "Broad Sword",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	2 => [
		"name" => "Amazon Camp Quest",
		"required level" => "0",
		"recomended level" => "15",
		"location" => "Amazon Camp, Near Venore",
		"reward" => [
			1 => "White Pearl",
			2 => "2 Black Pearls",
			3 => "Crystal Necklace",
			4 => "Dwarven Ring",
			5 => "100 Gold Coins"
		],
	],
	3 => [
		"name" => "Axe Ring Quest",
		"required level" => "0",
		"recomended level" => "15",
		"location" => "East of Venore",
		"reward" => [
			1 => "Axe Ring",
			2 => "Magic Light Wand",
			3 => "Blank Rune",
			4 => "",
			5 => ""
		],
	],
	4 => [
		"name" => "Battle Axe Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Thais, sewers",
		"reward" => [
			1 => "Battle Axe",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	5 => [
		"name" => "Barbarian Axe Quest",
		"required level" => "0",
		"recomended level" => "40",
		"location" => "Edron Orc Cave",
		"reward" => [
			1 => "Barbarian Axe",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	6 => [
		"name" => "Berserker Treasure Quest",
		"required level" => "0",
		"recomended level" => "40",
		"location" => "Edron Orc Cave",
		"reward" => [
			1 => "3 White Pearls",
			2 => "175 Gold Coins",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	7 => [
		"name" => "Blood Herb Quest",
		"required level" => "0",
		"recomended level" => "30",
		"location" => "Venore Swamp",
		"reward" => [
			1 => "Blood Herb",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	8 => [
		"name" => "Dark Armor Quest",
		"required level" => "0",
		"recomended level" => "40",
		"location" => "Edron Orc Cave",
		"reward" => [
			1 => "Dark Armor",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	9 => [
		"name" => "Dark Helmet Quest",
		"required level" => "0",
		"recomended level" => "20",
		"location" => "Below Ice Islands",
		"reward" => [
			1 => "Dark Helmet",
			2 => "Key 4502",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	10 => [
		"name" => "Dead Archer Quest",
		"required level" => "0",
		"recomended level" => "15",
		"location" => "Thais Troll Cave",
		"reward" => [
			1 => "Bow",
			2 => "5 Poison Arrows",
			3 => "Mana fluid",
			4 => "Life Fluid",
			5 => ""
		],
	],
	11 => [
		"name" => "Double Hero Quest",
		"required level" => "0",
		"recomended level" => "45",
		"location" => "Hero Cave, north of Edron",
		"reward" => [
			1 => "Club Ring",
			2 => "Red Gem",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	13 => [
		"name" => "Edron Goblin Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Goblin Cave, West of Edron",
		"reward" => [
			1 => "Steel Shield",
			2 => "Silver Amulet",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	14 => [
		"name" => "Elvenbane Quest",
		"required level" => "0",
		"recomended level" => "35",
		"location" => "Elvenbane Castle, near Ab'Dendriel",
		"reward" => [
			1 => "Morning Star",
			2 => "Dwarven Shield",
			3 => "Blank Rune",
			4 => "Spellbook",
			5 => "2 Small Diamonds",
			6 => "100 Gold Coins"
		],
	],
	15 => [
		"name" => "Emperor's Cookies Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Kazordoon",
		"reward" => [
			1 => "Key 3800",
			2 => "Bag with 27 cookies",
			3 => "Key 3801",
			4 => "Key 3802",
			5 => ""
		],
	],
	16 => [
		"name" => "Fanfare Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Carlin Graveyard",
		"reward" => [
			1 => "Fanfare",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	17 => [
		"name" => "Geomancer Quest",
		"required level" => "0",
		"recomended level" => "25",
		"location" => "Mount Sternum Undead Cave",
		"reward" => [
			1 => "Small Sapphire",
			2 => "Small Diamond",
			3 => "Dwarven Ring",
			4 => "",
			5 => ""
		],
	],
	18 => [
		"name" => "Ghoul Room Quest",
		"required level" => "0",
		"recomended level" => "15",
		"location" => "Thais Ancient Temple",
		"reward" => [
			1 => "Garlic Necklace",
			2 => "Club Ring",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	19 => [
		"name" => "Giant Smithhammer Quest",
		"required level" => "0",
		"recomended level" => "30",
		"location" => "Plains of Havoc",
		"reward" => [
			1 => "Giant Smithhammer",
			2 => "Talon",
			3 => "100 Gold Coins",
			4 => "",
			5 => ""
		],
	],
	20 => [
		"name" => "Iron Hammer Quest",
		"required level" => "0",
		"recomended level" => "20",
		"location" => "Minotaur caves near Kazordoon",
		"reward" => [
			1 => "Iron Hammer",
			2 => "100 Gold Coins",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	21 => [
		"name" => "Iron Helmet Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Plains of Havoc",
		"reward" => [
			1 => "Iron Helmet",
			2 => "Sudden Death Rune",
			3 => "Longsword",
			4 => "Longsword",
			5 => ""
		],
	],
	22 => [
		"name" => "Life Ring Quest",
		"required level" => "0",
		"recomended level" => "20",
		"location" => "Ancient Temple, near Thais",
		"reward" => [
			1 => "Life Ring",
			2 => "Dragon Necklace",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	23 => [
		"name" => "Longsword Quest",
		"required level" => "0",
		"recomended level" => "15",
		"location" => "Troll Cave, Near Venore",
		"reward" => [
			1 => "Longsword",
			2 => "Wedding Ring",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	24 => [
		"name" => "Ornamented Shield Quest",
		"required level" => "0",
		"recomended level" => "50",
		"location" => "Plains of Havoc",
		"reward" => [
			1 => "Ornamented Shield",
			2 => "War Hammer",
			3 => "Key 3702",
			4 => "Spike Sword",
			5 => "Dragon Necklace",
			6 => "Time Ring",
			7 => "Might Ring",
			8 => "Garlic Necklace",
			9 => " 500 Gold Coins"
		],
	],
	25 => [
		"name" => "Panpipes Quest",
		"required level" => "0",
		"recomended level" => "20",
		"location" => "Jakundaf Desert",
		"reward" => [
			1 => "2 Small Amethysts",
			2 => "Power Ring",
			3 => "Panpipes",
			4 => "",
			5 => ""
		],
	],
	26 => [
		"name" => "Parchment Room Quest",
		"required level" => "0",
		"recomended level" => "100+",
		"location" => "Edron Hero Cave",
		"reward" => [
			1 => "Stealth Ring",
			2 => "2 Talons",
			3 => "Bone",
			4 => "Skull",
			5 => "Parchment",
			6 => "Golden Key"
		],
	],
	27 => [
		"name" => "Golden Key",
		"required level" => "0",
		"recomended level" => "35",
		"location" => "Plains of Havoc",
		"reward" => [
			1 => "5 Power Bolts",
			2 => "12 Burst Arrows",
			3 => "Two Handed Sword",
			4 => "Book",
			5 => ""
		],
	],
	28 => [
		"name" => "Power Ring Quest",
		"required level" => "0",
		"recomended level" => "15",
		"location" => "Femor Hills",
		"reward" => [
			1 => "Power Ring",
			2 => "Bronze Amulet",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	29 => [
		"name" => "Scale Armor Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Troll Cave, North of Thais",
		"reward" => [
			1 => "Scale Armor",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	30 => [
		"name" => "Shadowthorn Quest",
		"required level" => "0",
		"recomended level" => "30",
		"location" => "Shadowthorn",
		"reward" => [
			1 => "Time Ring",
			2 => "30 Burst Arrows",
			3 => "60 Poison Arrows",
			4 => "Elven Amulet",
			5 => "Mana Fluid",
			6 => "Life Fluid"
		],
	],
	31 => [
		"name" => "Silver Brooch Quest",
		"required level" => "0",
		"recomended level" => "25",
		"location" => "Rotworm Cave, Near Venore",
		"reward" => [
			1 => "3 Small Diamonds",
			2 => "2 Small Rubies",
			3 => "Silver Brooch",
			4 => "",
			5 => ""
		],
	],
	32 => [
		"name" => "Spike Sword Quest",
		"required level" => "0",
		"recomended level" => "25",
		"location" => "Between Thais and Venore",
		"reward" => [
			1 => "Spike Sword",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	33 => [
		"name" => "Stealth Ring Quest",
		"required level" => "0",
		"recomended level" => "25",
		"location" => "Minotaur Pyramid, north of Darashia",
		"reward" => [
			1 => "Stealth Ring",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	34 => [
		"name" => "Thais Lighthouse Quest",
		"required level" => "0",
		"recomended level" => "20",
		"location" => "Lighthouse, West of Thais",
		"reward" => [
			1 => "Battle Hammer",
			2 => "Dark Shield",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	35 => [
		"name" => "Thais Silver Amulet Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Thais Troll Cave",
		"reward" => [
			1 => "Silver Amulet",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	36 => [
		"name" => "The Postman Missions Quest",
		"required level" => "0",
		"recomended level" => "30",
		"location" => "All over Eviloria",
		"reward" => [
			1 => "Ability to use locked mailboxes, discount on parcels, letters and boat fares",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	37 => [
		"name" => "The White Raven Monastery Quest",
		"required level" => "0",
		"recomended level" => "40",
		"location" => "Ghostlands",
		"reward" => [
			1 => "Blessed Ankh",
			2 => "Family Brooch",
			3 => "Acces to Isle of Kings",
			4 => "",
			5 => ""
		],
	],
	38 => [
		"name" => "Troll Cave Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Troll Cave, west of Edron",
		"reward" => [
			1 => "Brass Legs",
			2 => "Garlic Necklace",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	39 => [
		"name" => "Time Ring Quest",
		"required level" => "0",
		"recomended level" => "35",
		"location" => "Venore, Shadowthorn",
		"reward" => [
			1 => "Time Ring",
			2 => "Elven Amulet",
			3 => "Crystal Ball",
			4 => "",
			5 => ""
		],
	],
	40 => [
		"name" => "Six Rubies Quest",
		"required level" => "0",
		"recomended level" => "35",
		"location" => "Ancient Temple, near Thais",
		"reward" => [
			1 => "6 Small Rubies",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	41 => [
		"name" => "Wedding Ring Quest",
		"required level" => "0",
		"recomended level" => "60+",
		"location" => "Hero Cave, north of Edron",
		"reward" => [
			1 => "Wedding Ring",
			2 => "Dragon Necklace",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	42 => [
		"name" => "White Pearl Quest",
		"required level" => "0",
		"recomended level" => "8",
		"location" => "Ankrahmun",
		"reward" => [
			1 => "White Pearl",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	43 => [
		"name" => "",
		"required level" => "0",
		"recomended level" => "",
		"location" => "",
		"reward" => [
			1 => "",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	44 => [
		"name" => "Desert Dungeon Quest",
		"required level" => "20",
		"recomended level" => "20",
		"location" => "Jakundaf Desert",
		"reward" => [
			1 => "100 Platinum Coins",
			2 => "Protection Amulet",
			3 => "Magic Light Wand",
			4 => "Ring of Healing",
			5 => "Ankh"
		],
	],
	45 => [
		"name" => "Draconia Quest",
		"required level" => "25",
		"recomended level" => "25",
		"location" => "Draconia, near Ab'dendriel",
		"reward" => [
			1 => "Ice Rapier",
			2 => "Serpent Sword",
			3 => "Stone Skin Amulet",
			4 => "Energy Ring",
			5 => ""
		],
	],
	46 => [
		"name" => "Devil Helmet Quest",
		"required level" => "30",
		"recomended level" => "30",
		"location" => "Ancient Temple, near Thais",
		"reward" => [
			1 => "Devil Helmet",
			2 => "Halberd",
			3 => "4 Small Sapphires",
			4 => "",
			5 => ""
		],
	],
	47 => [
		"name" => "Griffin Shield Quest",
		"required level" => "30",
		"recomended level" => "30",
		"location" => "Demona",
		"reward" => [
			1 => "Griffin Shield",
			2 => "Dwarven Axe",
			3 => "Obsidian Lance",
			4 => "",
			5 => ""
		],
	],
	48 => [
		"name" => "Dwarf Hell Quest",
		"required level" => "32",
		"recomended level" => "35",
		"location" => "Dwarf Mine, near Kazordoon",
		"reward" => [
			1 => "Dwarven Axe",
			2 => "War Hammer",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	49 => [
		"name" => "Crusader Helmet Quest",
		"required level" => "35",
		"recomended level" => "35",
		"location" => "Dwarf Mine, near Kazordoon",
		"reward" => [
			1 => "Crusader Helmet",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	50 => [
		"name" => "Noble Armor Quest",
		"required level" => "35",
		"recomended level" => "35",
		"location" => "Mt. Sternum",
		"reward" => [
			1 => "Noble Armor",
			2 => "Crown Helmet",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	51 => [
		"name" => "",
		"required level" => "",
		"recomended level" => "",
		"location" => "",
		"reward" => [
			1 => "",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	52 => [
		"name" => "Mad Mage Room Quest",
		"required level" => "40",
		"recomended level" => "40",
		"location" => "Ancient Temple, near Thais",
		"reward" => [
			1 => "Hat of the Mad",
			2 => "Stone Skin Amulet",
			3 => "Star Amulet",
			4 => "",
			5 => ""
		],
	],
	53 => [
		"name" => "Naginata Quest",
		"required level" => "40",
		"recomended level" => "50",
		"location" => "Thais Dragon Lair",
		"reward" => [
			1 => "Naginata",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	54 => [
		"name" => "Blue Djinn Quest",
		"required level" => "40",
		"recomended level" => "45",
		"location" => "Ashta'daramai",
		"reward" => [
			1 => "Ability to trade many items to the Blue Djinns",
			2 => "3 Small Sapphires",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	55 => [
		"name" => "Green Djinn Quest",
		"required level" => "40",
		"recomended level" => "45",
		"location" => "Mal'ouquah",
		"reward" => [
			1 => "Ability to trade many items to the Green Djinns",
			2 => "600 Gold Coins",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	56 => [
		"name" => "Orc Fort Quest",
		"required level" => "40",
		"recomended level" => "50",
		"location" => "Orc Fortress, north of Venore",
		"reward" => [
			1 => "Knight Armor",
			2 => "Fire Sword",
			3 => "Knight Axe",
			4 => "",
			5 => ""
		],
	],
	57 => [
		"name" => "Triangle Tower Quest",
		"required level" => "40",
		"recomended level" => "40",
		"location" => "Triangle Tower",
		"reward" => [
			1 => "Garlic Necklace",
			2 => "Dwarven Ring",
			3 => "Dwarven Ring",
			4 => "",
			5 => ""
		],
	],
	58 => [
		"name" => "Bright Sword Quest",
		"required level" => "45",
		"recomended level" => "45",
		"location" => "Outlaw Camp",
		"reward" => [
			1 => "Bright Sword",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	59 => [
		"name" => "Black Knight Quest",
		"required level" => "50",
		"recomended level" => "50",
		"location" => "Black Knight's Villa",
		"reward" => [
			1 => "Crown Armor",
			2 => "Crown Shield",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	60 => [
		"name" => "Deeper Fibula Quest",
		"required level" => "50",
		"recomended level" => "50",
		"location" => "Fibula",
		"reward" => [
			1 => "Knight Axe",
			2 => "Tower Shield",
			3 => "Warrior Helmet",
			4 => "Dwarven Ring",
			5 => ""
		],
	],
	61 => [
		"name" => "Banshee Quest",
		"required level" => "60",
		"recomended level" => "70",
		"location" => "Ghostland",
		"reward" => [
			1 => "Boots of Haste",
			2 => "Giant Sword",
			3 => "Tower Shield",
			4 => "Stealth Ring",
			5 => "Stone Skin Amulet",
			6 => "100 Platinus Coins"
		],
	],
	62 => [
		"name" => "Fire Axe Quest",
		"required level" => "60",
		"recomended level" => "90",
		"location" => "Edron Dragon Lair",
		"reward" => [
			1 => "Fire Axe",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	63 => [
		"name" => "Medusa Shield Quest",
		"required level" => "60",
		"recomended level" => "60",
		"location" => "Drefia, west of Darashia",
		"reward" => [
			1 => "Medusa Shield",
			2 => "Blue Robe",
			3 => "Skull Staff",
			4 => "",
			5 => ""
		],
	],
	64 => [
		"name" => "Vampire Shield Quest",
		"required level" => "70",
		"recomended level" => "70",
		"location" => "Hero Cave, north of Edron",
		"reward" => [
			1 => "Vampire Shield",
			2 => "Dragon Lance",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	65 => [
		"name" => "Helmet Of The Ancients Quest",
		"required level" => "75",
		"recomended level" => "100+",
		"location" => "Ankrahmun Tombs",
		"reward" => [
			1 => "Helmet of the Ancients",
			2 => "",
			3 => "",
			4 => "",
			5 => ""
		],
	],
	66 => [
		"name" => "Behemoth Quest",
		"required level" => "80",
		"recomended level" => "80",
		"location" => "Cyclopolis, north of Edron",
		"reward" => [
			1 => "Demon Shield",
			2 => "Golden Armor",
			3 => "Guardian Halberd",
			4 => "Platinum Amulet",
			5 => "Life Ring",
			5 => "Crystal Ring",
			5 => "3 Small Diamonds",
			5 => "4 Small Sapphires",
			5 => ""
		],
	],
	67 => [
		"name" => "Demon Helmet Quest",
		"required level" => "100",
		"recomended level" => "100+",
		"location" => "Hero Cave, north of Edron",
		"reward" => [
			1 => "Demon Helmet",
			2 => "Demon Shield",
			3 => "Steel Boots",
			4 => "",
			5 => ""
		],
	],
	68 => [
		"name" => "The Annihilator Quest",
		"required level" => "100",
		"recomended level" => "120+",
		"location" => "Hero Cave, north of Edron",
		"reward" => [
			1 => "Choose one of the following: ",
			2 => "Demon Armor",
			3 => "Magic Sword",
			4 => "Stonecutter Axe",
			5 => "Annihilator Bear"
		],
	],




];

//var_dump($quests);
?>
<table class="table table-striped table-hover">
	<tr>
		<th>Name</th>
		<th>Required Level</th>
		<th>Recommended Level</th>
		<th>Location</th>
    	<th>Reward</th>
	</tr>
<?php
foreach ($tasks as $task) {
	echo '<tr style="align: center">';
	echo '<td>' . $task['name'] . '</td>';
	echo '<td>' . $task['required level'] . '</td>';
	echo '<td>' . $task['recomended level'] . '</td>';
	echo '<td>' . $task['location'] . '</td>';
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
