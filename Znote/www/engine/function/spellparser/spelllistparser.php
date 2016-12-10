<?php 

function getSpellList() {
	$spell_list = explode(PHP_EOL, file_get_contents('spell_list.txt'));
	$ia = array();
	for ($i = 0; $i < count($spell_list) - 1; $i++) {
		$it = explode('@', $spell_list[$i]);
		$ia[(int)$it[0]] = ucfirst($it[1]);
	}
	return $ia;
}
