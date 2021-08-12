<?php

function hash_password($password) {
	return password_hash($password, PASSWORD_DEFAULT);
}

function check_password($password, $hash) {
	return password_verify($password, $hash);
}

function indonesia_month_name($month_number) {
	$month_name = [	'Januari', 'Februari', 'Maret', 'April',
					'Mei', 'Juni', 'Juli', 'Agustus',
					'September','Oktober', 'November', 'Desember'
				];
	return $month_name[$month_number - 1];
}

function indonesia_date($datetime) {

	$day 	= substr($datetime, 8, 2);
	$month 	= substr($datetime, 5, 2);
	$year 	= substr($datetime, 0, 4);

	return $day.'/'.indonesia_month_name($month).'/'.$year;
}

function month_name($month_number) {
	$month_name = [	'Jan', 'Feb', 'Mar', 'Apr',
					'May', 'Jun', 'Jul', 'Aug',
					'Sep','Oct', 'Nov', 'Dec'
				];
	return $month_name[$month_number - 1];
}

function date_time($datetime) {

	$day = substr($datetime, 8, 2);
	$month = substr($datetime, 5, 2);
	$year = substr($datetime, 0, 4);

	$hh = substr($datetime, 11, 2);
	$mm = substr($datetime, 14, 2);
	$ss = substr($datetime, 17, 2);

	return $day.' '.month_name($month).' '.$year.' at '.$hh.':'.$mm ;
}