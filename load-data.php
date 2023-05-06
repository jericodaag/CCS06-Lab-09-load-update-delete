<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Thor', 'Male', '2020-12-21', 'Eco', 'daageco@gmail.com', 'Sunflower Dr. Town & Country Homes', '09270416057');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Prince',
			'gender' => 'Male',
			'birthdate' => '2021-02-14',
			'owner' => 'Nica',
			'email' => 'nicadaag@gmail.com',
			'address' => 'Sta Fiora St. Heritage Place',
			'contact_number' => '09123234171'
		],
		[
			'name' => 'Bambi',
			'gender' => 'Female',
			'birthdate' => '2021-08-18',
			'owner' => 'Alekz',
			'email' => 'alekzpaulino@yahoo.com',
			'address' => 'Hacienda Royale Club St.',
			'contact_number' => '09214144565'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

