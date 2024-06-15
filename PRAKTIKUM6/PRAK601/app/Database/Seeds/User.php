<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
	public function run()
	{
		// membuat data
		$news_data = [
			[
				'username' => 'useradmin',
				'email'  => '123@gmail.com',
				'password' => '123'
			],
		];

		foreach ($news_data as $data) {
			// insert semua data ke tabel
			$this->db->table('user')->insert($data);
		}
	}
}
