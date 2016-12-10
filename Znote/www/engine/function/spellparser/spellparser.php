<?php
$spells = simplexml_load_file($config['server_path'].'/data/spells/spells.xml');
// Create our parsed item list
$spell_list = fopen('spell_list.txt', 'w');
foreach ($spells->children() as $spell) {
	if ($spell['words'] && $spell['name'] != NULL) {
		$voc = {0,0,0,0};
		if ($spell['vocation']) {
			foreach ($spell['vocation'] as $vocname) {
				switch($vocname) {
					case "Sorcerer":
						$voc[1] = 1;
						break;
					case "Master Sorcerer":
						$voc[1] = 1;
						break;
					case "Druid":
						$voc[2] = 1;
						break;
					case "Elder Druid":
						$voc[2] = 1;
						break;
					case "Paladin":
						$voc[3] = 1;
						break;
					case "Royal Paladin":
						$voc[3] = 1;
						break;
					case "Knight":
						$voc[4] = 1;
						break;
					case "Elite Knight":
						$voc[4] = 1;
						break;
				}
			}
		}
		fwrite($spell_list, $spell['words'].'@'.$item['name'].'@'.$spell['maglv'].'@'.$spell['mana'].'@'.$spell['vocation'].PHP_EOL);
	}
}
fclose($spell_list);
