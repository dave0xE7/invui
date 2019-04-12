<?php

function BuildList ($array_list, $a, $b, $c, $d) {
	echo ($a);
	foreach ($array_list as $item) {
		echo ($c. $item .$d);
	}
	echo ($b);
}

function BuildListUlLi ($array_list) {
	BuildList ($array_list, '<ul>', '</ul>', '<li>', '</li>');
}

function BuildListUlLiA ($array_list) {
	echo ('<ul>');
	foreach ($array_list as $item) {
		echo ('<li><a href="?id='.$item.'">'. $item .'</a></li>');
	}
	echo ('</ul>');
}

?>