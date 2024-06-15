<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Buku extends Seeder
{
	public function run()
	{
		// membuat data
		$news_data = [
			[
				'judul' => 'Bobon Penguasa Tol Kanan',
				'penulis'  => 'Jiko tire',
				'penerbit' => 'Lautan Megah',
				'tahun_terbit' => '2078',
				'status' => 'draft'
			],
		];

		foreach ($news_data as $data) {
			// insert semua data ke tabel
			$this->db->table('buku')->insert($data);
		}
	}
}
