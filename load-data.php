<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Mallow', 'Female', 'December 11, 2020', 'Kaye', 'Mallowie@gmail.com', 'Tarlac City', '09128566731');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Goldie',
			'gender' => 'Female',
			'birthdate' => 'January 06, 2019',
			'owner' => 'Kaye',
			'email' => 'Goldie@gmail.com',
			'address' => 'Tarlac City',
			'contact_number' => '09128566731'
		],
		[
			'name' => 'Ripples',
			'gender' => 'Male',
			'birthdate' => 'November 20, 2021',
			'owner' => 'Teree',
			'email' => 'poleng@gmail.com',
			'address' => 'Tarlac City',
			'contact_number' => '09128566731'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

