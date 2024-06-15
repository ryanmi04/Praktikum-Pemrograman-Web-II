<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookcatalog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'judul'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'penulis'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'penerbit'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'tahun_terbit'      => [
                'type'           => 'YEAR',
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['published', 'draft'],
                'default'        => 'draft',
            ]
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('buku', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}
