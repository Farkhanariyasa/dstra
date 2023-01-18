<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UnduhHasilPKL extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'instansi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pvd_unduh_hasil_pkl');
    

    }

    public function down()
    {
        $this->forge->dropTable('pvd_unduh_hasil_pkl');
    }
}
