<?php
$spells = simplexml_load_file($config['server_path'].'/data/spells/spells.xml');
// Create our parsed item list
$spell_list = fopen('spell_list.txt', 'w');
foreach ($spells->children() as $spell) {
	if ($spell['words'] && $spell['name'] != NULL) {
		fwrite($spell_list, $spell['words'].'@'.$item['name'].'@'.$spell['maglv'].'@'.$spell['mana'].PHP_EOL);
	}
}
fclose($spell_list);
