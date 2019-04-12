<?php

require_once('../../common.php');

function GetExchangeValue($currency) {
	if ($currency == 'EUR') {
		return '0.00123';
	}
}

function GetUserCurrency ($user) {
	return "EUR";
}

function GetUserBalance ($user) {
	global $users;
	return read ($users.$user.'/balance');
}

function GetUserCurrencyBalance ($user) {
	return GetUserBalance($user)*GetExchangeValue(GetUserCurrency($user));
}

?>