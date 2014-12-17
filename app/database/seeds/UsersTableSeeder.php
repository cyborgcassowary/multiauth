<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
			User::create([
				'username' => 'ryanhettler',
				'email' => 'ryan@ryanhettler.com',
				'password' => Hash::make('WhatDoYouGoHomeTo?')
			]);
			User::create([
				'username' => 'cyborgcassowary',
				'email' => 'info@cyborgcassowary.com',
				'password' => Hash::make('ItIsNatural2BeAfraid')
			]);

			// Passwords titled after Explosions in the Sky songs on 'All Of A Sudden I Miss Everyone':
			// https://www.youtube.com/watch?v=6sDtb5-JrqE
	}

}